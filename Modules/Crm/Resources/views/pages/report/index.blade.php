@extends('crm::layouts.master1')

@section('css')
    <link href="{{ asset('css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/crm/report/a.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo chăm sóc')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo chăm sóc</li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="crmReportIndexFilter" class="form-inline" role="form"
                      id="crmReportIndexFilter">
                    <div class="form-group"><input type="text" name="daterangepicker"
                                                   class="form-control date-range-picker" id="daterangepicker"
                                                   value="01/07/2020 - 31/07/2020"></div>
                    <div class="form-group"><select name="groupBy" id="groupBy"
                                                    class="form-control">
                            <option value="day">Theo ngày</option>
                            <option value="month">Theo tháng</option>
                        </select></div>
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
                    <div class="form-group"><select name="departmentId" id="departmentId"
                                                    class="form-control">
                            <option value="">- Phòng ban -</option>
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
                    <div class="form-group"><input type="text" name="createdByName"
                                                   placeholder="Nhân viên" id="createdByName"
                                                   class="form-control ui-autocomplete-input" value=""
                                                   autocomplete="off"></div> <input type="hidden" name="createdById"
                                                                                    id="createdById" class="form-control" value="">
                    <div class="form-group"><input name="submit" type="submit"
                                                   id="btnFilterCrmContact" class="form-control btn btn-primary"
                                                   value="Lọc"></div>
                </form>
            </div>
            <div class="col-md-12">
                <div id="crm-chart">
                    <div style="position: relative;">
                        <div dir="ltr"
                             style="position: relative; width: 1844px; height: 300px;">
                            <div aria-label="A chart."
                                 style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                <svg width="1844" height="300" aria-label="A chart."
                                     style="overflow: hidden;">
                                    <defs id="_ABSTRACT_RENDERER_ID_0">
                                        <clippath id="_ABSTRACT_RENDERER_ID_1">
                                            <rect x="179" y="58" width="1486" height="185">
                                            </rect>
                                        </clippath>
                                    </defs>
                                    <rect x="0" y="0" width="1844" height="300" stroke="none"
                                          stroke-width="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="179" y="34.6"
                                             font-family="Arial" font-size="16"
                                             font-weight="bold" stroke="none" stroke-width="0"
                                             fill="#000000">Tình hình chăm sóc - tìm, gọi
                                            gặp</text>
                                        <rect x="179" y="21" width="1486" height="16"
                                              stroke="none" stroke-width="0" fill-opacity="0"
                                              fill="#ffffff"></rect>
                                    </g>
                                    <g>
                                        <rect x="1681" y="58" width="147" height="185"
                                              stroke="none" stroke-width="0" fill-opacity="0"
                                              fill="#ffffff"></rect>
                                        <g>
                                            <rect x="1681" y="58" width="147" height="16"
                                                  stroke="none" stroke-width="0" fill-opacity="0"
                                                  fill="#ffffff"></rect>
                                            <g><text text-anchor="start" x="1719" y="71.6"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">Tìm</text></g>
                                            <path d="M1681,66L1713,66" stroke="#3366cc"
                                                  stroke-width="2" fill-opacity="1" fill="none">
                                            </path>
                                            <circle cx="1697" cy="66" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                        </g>
                                        <g>
                                            <rect x="1681" y="84" width="147" height="16"
                                                  stroke="none" stroke-width="0" fill-opacity="0"
                                                  fill="#ffffff"></rect>
                                            <g><text text-anchor="start" x="1719" y="97.6"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">Gọi thành công</text></g>
                                            <path d="M1681,92L1713,92" stroke="#dc3912"
                                                  stroke-width="2" fill-opacity="1" fill="none">
                                            </path>
                                            <circle cx="1697" cy="92" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                        </g>
                                        <g>
                                            <rect x="1681" y="110" width="147" height="16"
                                                  stroke="none" stroke-width="0" fill-opacity="0"
                                                  fill="#ffffff"></rect>
                                            <g><text text-anchor="start" x="1719" y="123.6"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">Gọi thất bại</text></g>
                                            <path d="M1681,118L1713,118" stroke="#ff9900"
                                                  stroke-width="2" fill-opacity="1" fill="none">
                                            </path>
                                            <circle cx="1697" cy="118" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                        </g>
                                        <g>
                                            <rect x="1681" y="136" width="147" height="16"
                                                  stroke="none" stroke-width="0" fill-opacity="0"
                                                  fill="#ffffff"></rect>
                                            <g><text text-anchor="start" x="1719" y="149.6"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">Gặp</text></g>
                                            <path d="M1681,144L1713,144" stroke="#109618"
                                                  stroke-width="2" fill-opacity="1" fill="none">
                                            </path>
                                            <circle cx="1697" cy="144" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                        </g>
                                        <g>
                                            <rect x="1681" y="162" width="147" height="16"
                                                  stroke="none" stroke-width="0" fill-opacity="0"
                                                  fill="#ffffff"></rect>
                                            <g><text text-anchor="start" x="1719" y="175.6"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">Hẹn</text></g>
                                            <path d="M1681,170L1713,170" stroke="#990099"
                                                  stroke-width="2" fill-opacity="1" fill="none">
                                            </path>
                                            <circle cx="1697" cy="170" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                        </g>
                                        <g>
                                            <rect x="1681" y="188" width="147" height="16"
                                                  stroke="none" stroke-width="0" fill-opacity="0"
                                                  fill="#ffffff"></rect>
                                            <g><text text-anchor="start" x="1719" y="201.6"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">Triển khai</text></g>
                                            <path d="M1681,196L1713,196" stroke="#0099c6"
                                                  stroke-width="2" fill-opacity="1" fill="none">
                                            </path>
                                            <circle cx="1697" cy="196" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                        </g>
                                        <path d="M1697,243L1689,227L1681,243Z" stroke="none"
                                              stroke-width="0" fill="#cccccc"></path>
                                        <g><text text-anchor="middle" x="1714" y="240.6"
                                                 font-family="Arial" font-size="16" stroke="none"
                                                 stroke-width="0" fill="#0011cc">1/2</text></g>
                                        <path d="M1731,227L1747,227L1739,243Z" stroke="none"
                                              stroke-width="0" fill="#0011cc"></path>
                                    </g>
                                    <g>
                                        <rect x="179" y="58" width="1486" height="185"
                                              stroke="none" stroke-width="0" fill-opacity="0"
                                              fill="#ffffff"></rect>
                                        <g
                                                clip-path="url(https://erp.nhanh.vn/crm/report/index#_ABSTRACT_RENDERER_ID_1)">
                                            <g>
                                                <rect x="179" y="242" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#cccccc"></rect>
                                                <rect x="179" y="181" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#cccccc"></rect>
                                                <rect x="179" y="119" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#cccccc"></rect>
                                                <rect x="179" y="58" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#cccccc"></rect>
                                                <rect x="179" y="211" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#ebebeb"></rect>
                                                <rect x="179" y="150" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#ebebeb"></rect>
                                                <rect x="179" y="89" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#ebebeb"></rect>
                                            </g>
                                            <g>
                                                <rect x="179" y="242" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#333333"></rect>
                                            </g>
                                            <g>
                                                <path
                                                        d="M203.4516129032258,151.7266666666667L251.35483870967744,152.95333333333335L299.258064516129,145.9L347.16129032258067,178.71333333333334L395.06451612903226,240.96666666666667L442.9677419354839,142.22000000000003L490.8709677419355,164.60666666666668L538.7741935483871,128.7266666666667L586.6774193548388,141.3L634.5806451612904,145.59333333333333L682.483870967742,226.86L730.3870967741935,240.66L778.2903225806452,151.7266666666667L826.1935483870968,161.54000000000002L874.0967741935484,135.47333333333336L922,173.5L969.9032258064517,169.82L1017.8064516129033,239.43333333333334L1065.7096774193549,240.35333333333332L1113.6129032258063,176.56666666666666L1161.516129032258,178.40666666666667L1209.4193548387098,153.87333333333333L1257.3225806451615,164.3L1305.225806451613,242.19333333333333"
                                                        stroke="#3366cc" stroke-width="2"
                                                        fill-opacity="1" fill="none"></path>
                                                <path
                                                        d="M203.4516129032258,151.7266666666667L251.35483870967744,152.95333333333335L299.258064516129,145.9L347.16129032258067,178.71333333333334L395.06451612903226,240.96666666666667L442.9677419354839,142.22000000000003L490.8709677419355,164.60666666666668L538.7741935483871,128.7266666666667L586.6774193548388,141.3L634.5806451612904,145.59333333333333L682.483870967742,226.86L730.3870967741935,240.66L778.2903225806452,151.7266666666667L826.1935483870968,161.54000000000002L874.0967741935484,135.47333333333336L922,173.5L969.9032258064517,169.82L1017.8064516129033,239.43333333333334L1065.7096774193549,240.35333333333332L1113.6129032258063,176.56666666666666L1161.516129032258,178.40666666666667L1209.4193548387098,153.87333333333333L1257.3225806451615,164.3L1305.225806451613,242.19333333333333"
                                                        stroke="#dc3912" stroke-width="2"
                                                        fill-opacity="1" fill="none"></path>
                                                <path
                                                        d="M203.4516129032258,132.71333333333334L251.35483870967744,93.46000000000001L299.258064516129,103.58000000000001L347.16129032258067,173.80666666666667L395.06451612903226,241.27333333333334L442.9677419354839,69.23333333333335L490.8709677419355,93.76666666666668L538.7741935483871,75.06L586.6774193548388,106.34L634.5806451612904,117.99333333333334L682.483870967742,223.79333333333335L730.3870967741935,239.74L778.2903225806452,83.95333333333335L826.1935483870968,111.86000000000001L874.0967741935484,99.9L922,114.31333333333333L969.9032258064517,134.86L1017.8064516129033,236.06L1065.7096774193549,237.9L1113.6129032258063,105.11333333333334L1161.516129032258,131.48666666666668L1209.4193548387098,102.04666666666668L1257.3225806451615,134.86L1305.225806451613,241.88666666666666"
                                                        stroke="#ff9900" stroke-width="2"
                                                        fill-opacity="1" fill="none"></path>
                                                <path
                                                        d="M203.4516129032258,213.98000000000002L251.35483870967744,215.51333333333332L299.258064516129,201.40666666666667L347.16129032258067,227.78M442.9677419354839,206.00666666666666L490.8709677419355,204.16666666666669L538.7741935483871,195.88666666666666L586.6774193548388,185.46L634.5806451612904,189.44666666666666M730.3870967741935,240.35333333333332L778.2903225806452,204.16666666666669L826.1935483870968,204.78L874.0967741935484,207.54000000000002L922,213.06L969.9032258064517,202.02M1113.6129032258063,220.11333333333334L1161.516129032258,206.00666666666666L1209.4193548387098,215.51333333333332L1257.3225806451615,221.03333333333333"
                                                        stroke="#109618" stroke-width="2"
                                                        fill-opacity="1" fill="none"></path>
                                                <path
                                                        d="M203.4516129032258,232.99333333333334L251.35483870967744,234.83333333333334L299.258064516129,232.07333333333332L347.16129032258067,232.38L395.06451612903226,242.19333333333333L442.9677419354839,231.15333333333334L490.8709677419355,231.76666666666668L538.7741935483871,227.47333333333333L586.6774193548388,231.46L634.5806451612904,231.46L682.483870967742,242.19333333333333L730.3870967741935,241.27333333333334L778.2903225806452,229.92666666666668L826.1935483870968,229.00666666666666L874.0967741935484,231.15333333333334L922,229.31333333333333L969.9032258064517,236.98L1017.8064516129033,242.19333333333333L1065.7096774193549,242.19333333333333L1113.6129032258063,232.07333333333332L1161.516129032258,232.99333333333334L1209.4193548387098,230.54L1257.3225806451615,228.7"
                                                        stroke="#990099" stroke-width="2"
                                                        fill-opacity="1" fill="none"></path>
                                                <path
                                                        d="M203.4516129032258,236.67333333333335L251.35483870967744,234.52666666666667L299.258064516129,238.20666666666668L347.16129032258067,235.14M442.9677419354839,235.75333333333333L490.8709677419355,235.14L538.7741935483871,236.98L586.6774193548388,236.67333333333335L634.5806451612904,234.52666666666667M778.2903225806452,233.3L826.1935483870968,236.67333333333335L874.0967741935484,234.83333333333334L922,233.3L969.9032258064517,238.51333333333332M1113.6129032258063,237.59333333333333L1161.516129032258,234.52666666666667L1209.4193548387098,234.83333333333334L1257.3225806451615,237.59333333333333L1305.225806451613,241.88666666666666"
                                                        stroke="#0099c6" stroke-width="2"
                                                        fill-opacity="1" fill="none"></path>
                                                <path
                                                        d="M203.4516129032258,203.86L251.35483870967744,207.84666666666666L299.258064516129,208.15333333333334L347.16129032258067,220.72666666666666L395.06451612903226,238.82L442.9677419354839,206.62L490.8709677419355,203.86L538.7741935483871,205.7L586.6774193548388,204.78L634.5806451612904,203.24666666666667L682.483870967742,232.99333333333334L730.3870967741935,239.12666666666667L778.2903225806452,203.86L826.1935483870968,206.00666666666666L874.0967741935484,204.16666666666669L922,205.39333333333335L969.9032258064517,205.7L1017.8064516129033,234.22L1065.7096774193549,237.28666666666666L1113.6129032258063,206.92666666666668L1161.516129032258,204.78L1209.4193548387098,203.24666666666667L1257.3225806451615,205.7L1305.225806451613,241.58"
                                                        stroke="#66aa00" stroke-width="2"
                                                        fill-opacity="1" fill="none"></path>
                                                <path
                                                        d="M203.4516129032258,238.20666666666668L251.35483870967744,237.9L299.258064516129,240.04666666666668L347.16129032258067,240.96666666666667L395.06451612903226,240.04666666666668L442.9677419354839,237.9L490.8709677419355,238.20666666666668L538.7741935483871,237.28666666666666L586.6774193548388,238.51333333333332L634.5806451612904,238.82L682.483870967742,221.95333333333332L730.3870967741935,240.35333333333332L778.2903225806452,237.28666666666666L826.1935483870968,240.66L874.0967741935484,236.06L922,237.59333333333333L969.9032258064517,237.59333333333333L1017.8064516129033,235.14L1065.7096774193549,240.04666666666668L1113.6129032258063,237.28666666666666L1161.516129032258,236.36666666666667L1209.4193548387098,238.82L1257.3225806451615,235.14"
                                                        stroke="#b82e2e" stroke-width="2"
                                                        fill-opacity="1" fill="none"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <circle cx="203.4516129032258"
                                                    cy="151.7266666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="251.35483870967744"
                                                    cy="152.95333333333335" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="299.258064516129" cy="145.9" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#3366cc">
                                            </circle>
                                            <circle cx="347.16129032258067"
                                                    cy="178.71333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="395.06451612903226"
                                                    cy="240.96666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="442.9677419354839"
                                                    cy="142.22000000000003" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="490.8709677419355"
                                                    cy="164.60666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="538.7741935483871"
                                                    cy="128.7266666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="586.6774193548388" cy="141.3" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#3366cc">
                                            </circle>
                                            <circle cx="634.5806451612904"
                                                    cy="145.59333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="682.483870967742" cy="226.86" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#3366cc">
                                            </circle>
                                            <circle cx="730.3870967741935" cy="240.66" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#3366cc">
                                            </circle>
                                            <circle cx="778.2903225806452"
                                                    cy="151.7266666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="826.1935483870968"
                                                    cy="161.54000000000002" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="874.0967741935484"
                                                    cy="135.47333333333336" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="922" cy="173.5" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="969.9032258064517" cy="169.82" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#3366cc">
                                            </circle>
                                            <circle cx="1017.8064516129033"
                                                    cy="239.43333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="1065.7096774193549"
                                                    cy="240.35333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="1113.6129032258063"
                                                    cy="176.56666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="1161.516129032258"
                                                    cy="178.40666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="1209.4193548387098"
                                                    cy="153.87333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="1257.3225806451615" cy="164.3" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#3366cc">
                                            </circle>
                                            <circle cx="1305.225806451613"
                                                    cy="242.19333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="203.4516129032258"
                                                    cy="151.7266666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="251.35483870967744"
                                                    cy="152.95333333333335" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="299.258064516129" cy="145.9" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#dc3912">
                                            </circle>
                                            <circle cx="347.16129032258067"
                                                    cy="178.71333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="395.06451612903226"
                                                    cy="240.96666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="442.9677419354839"
                                                    cy="142.22000000000003" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="490.8709677419355"
                                                    cy="164.60666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="538.7741935483871"
                                                    cy="128.7266666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="586.6774193548388" cy="141.3" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#dc3912">
                                            </circle>
                                            <circle cx="634.5806451612904"
                                                    cy="145.59333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="682.483870967742" cy="226.86" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#dc3912">
                                            </circle>
                                            <circle cx="730.3870967741935" cy="240.66" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#dc3912">
                                            </circle>
                                            <circle cx="778.2903225806452"
                                                    cy="151.7266666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="826.1935483870968"
                                                    cy="161.54000000000002" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="874.0967741935484"
                                                    cy="135.47333333333336" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="922" cy="173.5" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="969.9032258064517" cy="169.82" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#dc3912">
                                            </circle>
                                            <circle cx="1017.8064516129033"
                                                    cy="239.43333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="1065.7096774193549"
                                                    cy="240.35333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="1113.6129032258063"
                                                    cy="176.56666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="1161.516129032258"
                                                    cy="178.40666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="1209.4193548387098"
                                                    cy="153.87333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="1257.3225806451615" cy="164.3" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#dc3912">
                                            </circle>
                                            <circle cx="1305.225806451613"
                                                    cy="242.19333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="203.4516129032258"
                                                    cy="132.71333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="251.35483870967744"
                                                    cy="93.46000000000001" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="299.258064516129"
                                                    cy="103.58000000000001" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="347.16129032258067"
                                                    cy="173.80666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="395.06451612903226"
                                                    cy="241.27333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="442.9677419354839"
                                                    cy="69.23333333333335" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="490.8709677419355"
                                                    cy="93.76666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="538.7741935483871" cy="75.06" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#ff9900">
                                            </circle>
                                            <circle cx="586.6774193548388" cy="106.34" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#ff9900">
                                            </circle>
                                            <circle cx="634.5806451612904"
                                                    cy="117.99333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="682.483870967742"
                                                    cy="223.79333333333335" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="730.3870967741935" cy="239.74" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#ff9900">
                                            </circle>
                                            <circle cx="778.2903225806452"
                                                    cy="83.95333333333335" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="826.1935483870968"
                                                    cy="111.86000000000001" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="874.0967741935484" cy="99.9" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#ff9900">
                                            </circle>
                                            <circle cx="922" cy="114.31333333333333" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#ff9900">
                                            </circle>
                                            <circle cx="969.9032258064517" cy="134.86" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#ff9900">
                                            </circle>
                                            <circle cx="1017.8064516129033" cy="236.06" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#ff9900">
                                            </circle>
                                            <circle cx="1065.7096774193549" cy="237.9" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#ff9900">
                                            </circle>
                                            <circle cx="1113.6129032258063"
                                                    cy="105.11333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="1161.516129032258"
                                                    cy="131.48666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="1209.4193548387098"
                                                    cy="102.04666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="1257.3225806451615" cy="134.86" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#ff9900">
                                            </circle>
                                            <circle cx="1305.225806451613"
                                                    cy="241.88666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#ff9900"></circle>
                                            <circle cx="203.4516129032258"
                                                    cy="213.98000000000002" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="251.35483870967744"
                                                    cy="215.51333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="299.258064516129"
                                                    cy="201.40666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="347.16129032258067" cy="227.78" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#109618">
                                            </circle>
                                            <circle cx="442.9677419354839"
                                                    cy="206.00666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="490.8709677419355"
                                                    cy="204.16666666666669" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="538.7741935483871"
                                                    cy="195.88666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="586.6774193548388" cy="185.46" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#109618">
                                            </circle>
                                            <circle cx="634.5806451612904"
                                                    cy="189.44666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="730.3870967741935"
                                                    cy="240.35333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="778.2903225806452"
                                                    cy="204.16666666666669" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="826.1935483870968" cy="204.78" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#109618">
                                            </circle>
                                            <circle cx="874.0967741935484"
                                                    cy="207.54000000000002" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="922" cy="213.06" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="969.9032258064517" cy="202.02" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#109618">
                                            </circle>
                                            <circle cx="1113.6129032258063"
                                                    cy="220.11333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="1161.516129032258"
                                                    cy="206.00666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="1209.4193548387098"
                                                    cy="215.51333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="1257.3225806451615"
                                                    cy="221.03333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#109618"></circle>
                                            <circle cx="203.4516129032258"
                                                    cy="232.99333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="251.35483870967744"
                                                    cy="234.83333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="299.258064516129"
                                                    cy="232.07333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="347.16129032258067" cy="232.38" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#990099">
                                            </circle>
                                            <circle cx="395.06451612903226"
                                                    cy="242.19333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="442.9677419354839"
                                                    cy="231.15333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="490.8709677419355"
                                                    cy="231.76666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="538.7741935483871"
                                                    cy="227.47333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="586.6774193548388" cy="231.46" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#990099">
                                            </circle>
                                            <circle cx="634.5806451612904" cy="231.46" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#990099">
                                            </circle>
                                            <circle cx="682.483870967742"
                                                    cy="242.19333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="730.3870967741935"
                                                    cy="241.27333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="778.2903225806452"
                                                    cy="229.92666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="826.1935483870968"
                                                    cy="229.00666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="874.0967741935484"
                                                    cy="231.15333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="922" cy="229.31333333333333" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#990099">
                                            </circle>
                                            <circle cx="969.9032258064517" cy="236.98" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#990099">
                                            </circle>
                                            <circle cx="1017.8064516129033"
                                                    cy="242.19333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="1065.7096774193549"
                                                    cy="242.19333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="1113.6129032258063"
                                                    cy="232.07333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="1161.516129032258"
                                                    cy="232.99333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#990099"></circle>
                                            <circle cx="1209.4193548387098" cy="230.54" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#990099">
                                            </circle>
                                            <circle cx="1257.3225806451615" cy="228.7" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#990099">
                                            </circle>
                                            <circle cx="203.4516129032258"
                                                    cy="236.67333333333335" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="251.35483870967744"
                                                    cy="234.52666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="299.258064516129"
                                                    cy="238.20666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="347.16129032258067" cy="235.14" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#0099c6">
                                            </circle>
                                            <circle cx="442.9677419354839"
                                                    cy="235.75333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="490.8709677419355" cy="235.14" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#0099c6">
                                            </circle>
                                            <circle cx="538.7741935483871" cy="236.98" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#0099c6">
                                            </circle>
                                            <circle cx="586.6774193548388"
                                                    cy="236.67333333333335" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="634.5806451612904"
                                                    cy="234.52666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="778.2903225806452" cy="233.3" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#0099c6">
                                            </circle>
                                            <circle cx="826.1935483870968"
                                                    cy="236.67333333333335" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="874.0967741935484"
                                                    cy="234.83333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="922" cy="233.3" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="969.9032258064517"
                                                    cy="238.51333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="1113.6129032258063"
                                                    cy="237.59333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="1161.516129032258"
                                                    cy="234.52666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="1209.4193548387098"
                                                    cy="234.83333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="1257.3225806451615"
                                                    cy="237.59333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="1305.225806451613"
                                                    cy="241.88666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#0099c6"></circle>
                                            <circle cx="203.4516129032258" cy="203.86" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="251.35483870967744"
                                                    cy="207.84666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="299.258064516129"
                                                    cy="208.15333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="347.16129032258067"
                                                    cy="220.72666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="395.06451612903226" cy="238.82" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="442.9677419354839" cy="206.62" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="490.8709677419355" cy="203.86" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="538.7741935483871" cy="205.7" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="586.6774193548388" cy="204.78" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="634.5806451612904"
                                                    cy="203.24666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="682.483870967742"
                                                    cy="232.99333333333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="730.3870967741935"
                                                    cy="239.12666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="778.2903225806452" cy="203.86" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="826.1935483870968"
                                                    cy="206.00666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="874.0967741935484"
                                                    cy="204.16666666666669" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="922" cy="205.39333333333335" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="969.9032258064517" cy="205.7" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="1017.8064516129033" cy="234.22" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="1065.7096774193549"
                                                    cy="237.28666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="1113.6129032258063"
                                                    cy="206.92666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="1161.516129032258" cy="204.78" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="1209.4193548387098"
                                                    cy="203.24666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#66aa00"></circle>
                                            <circle cx="1257.3225806451615" cy="205.7" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="1305.225806451613" cy="241.58" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#66aa00">
                                            </circle>
                                            <circle cx="203.4516129032258"
                                                    cy="238.20666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="251.35483870967744" cy="237.9" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#b82e2e">
                                            </circle>
                                            <circle cx="299.258064516129"
                                                    cy="240.04666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="347.16129032258067"
                                                    cy="240.96666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="395.06451612903226"
                                                    cy="240.04666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="442.9677419354839" cy="237.9" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#b82e2e">
                                            </circle>
                                            <circle cx="490.8709677419355"
                                                    cy="238.20666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="538.7741935483871"
                                                    cy="237.28666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="586.6774193548388"
                                                    cy="238.51333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="634.5806451612904" cy="238.82" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#b82e2e">
                                            </circle>
                                            <circle cx="682.483870967742"
                                                    cy="221.95333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="730.3870967741935"
                                                    cy="240.35333333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="778.2903225806452"
                                                    cy="237.28666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="826.1935483870968" cy="240.66" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#b82e2e">
                                            </circle>
                                            <circle cx="874.0967741935484" cy="236.06" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#b82e2e">
                                            </circle>
                                            <circle cx="922" cy="237.59333333333333" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#b82e2e">
                                            </circle>
                                            <circle cx="969.9032258064517"
                                                    cy="237.59333333333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="1017.8064516129033" cy="235.14" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#b82e2e">
                                            </circle>
                                            <circle cx="1065.7096774193549"
                                                    cy="240.04666666666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="1113.6129032258063"
                                                    cy="237.28666666666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="1161.516129032258"
                                                    cy="236.36666666666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#b82e2e"></circle>
                                            <circle cx="1209.4193548387098" cy="238.82" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#b82e2e">
                                            </circle>
                                            <circle cx="1257.3225806451615" cy="235.14" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#b82e2e">
                                            </circle>
                                        </g>
                                        <g>
                                            <g><text text-anchor="middle" x="203.4516129032258"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">01/07/2020</text></g>
                                            <g><text text-anchor="middle" x="251.35483870967744"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">02/07/2020</text></g>
                                            <g><text text-anchor="middle" x="299.258064516129"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">03/07/2020</text></g>
                                            <g><text text-anchor="middle" x="347.16129032258067"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">04/07/2020</text></g>
                                            <g><text text-anchor="middle" x="395.06451612903226"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">05/07/2020</text></g>
                                            <g><text text-anchor="middle" x="442.9677419354839"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">06/07/2020</text></g>
                                            <g><text text-anchor="middle" x="490.8709677419355"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">07/07/2020</text></g>
                                            <g><text text-anchor="middle" x="538.7741935483871"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">08/07/2020</text></g>
                                            <g><text text-anchor="middle" x="586.6774193548388"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">09/07/2020</text></g>
                                            <g><text text-anchor="middle" x="634.5806451612904"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">10/07/2020</text></g>
                                            <g><text text-anchor="middle" x="682.483870967742"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">11/07/2020</text></g>
                                            <g><text text-anchor="middle" x="730.3870967741935"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">12/07/2020</text></g>
                                            <g><text text-anchor="middle" x="778.2903225806452"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">13/07/2020</text></g>
                                            <g><text text-anchor="middle" x="826.1935483870968"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">14/07/2020</text></g>
                                            <g><text text-anchor="middle" x="874.0967741935484"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">15/07/2020</text></g>
                                            <g><text text-anchor="middle" x="922" y="287.6"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">16/07/2020</text></g>
                                            <g><text text-anchor="middle" x="969.9032258064517"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">17/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1017.8064516129033"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">18/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1065.7096774193549"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">19/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1113.6129032258063"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">20/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1161.516129032258"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">21/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1209.4193548387098"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">22/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1257.3225806451615"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">23/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1305.225806451613"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">24/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1353.1290322580646"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">25/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1401.032258064516"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">26/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1448.9354838709678"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">27/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1496.8387096774195"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">28/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1544.741935483871"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">29/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1592.6451612903227"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">30/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1640.5483870967744"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">31/07/2020</text></g>
                                            <g><text text-anchor="end" x="163" y="248.1"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#444444">0</text></g>
                                            <g><text text-anchor="end" x="163" y="186.7667"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#444444">200</text></g>
                                            <g><text text-anchor="end" x="163"
                                                     y="125.43329999999999" font-family="Arial"
                                                     font-size="16" stroke="none"
                                                     stroke-width="0" fill="#444444">400</text>
                                            </g>
                                            <g><text text-anchor="end" x="163" y="64.1"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#444444">600</text></g>
                                        </g>
                                    </g>
                                    <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                     style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Thời gian</th>
                                            <th>Tìm</th>
                                            <th>Gọi thành công</th>
                                            <th>Gọi thất bại</th>
                                            <th>Gặp</th>
                                            <th>Hẹn</th>
                                            <th>Triển khai</th>
                                            <th>Nhân viên</th>
                                            <th>Khách hàng</th>
                                            <th>Hợp đồng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>01/07/2020</td>
                                            <td>296</td>
                                            <td>296</td>
                                            <td>358</td>
                                            <td>93</td>
                                            <td>31</td>
                                            <td>19</td>
                                            <td>NaN</td>
                                            <td>126</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>02/07/2020</td>
                                            <td>292</td>
                                            <td>292</td>
                                            <td>486</td>
                                            <td>88</td>
                                            <td>25</td>
                                            <td>26</td>
                                            <td>NaN</td>
                                            <td>113</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>03/07/2020</td>
                                            <td>315</td>
                                            <td>315</td>
                                            <td>453</td>
                                            <td>134</td>
                                            <td>34</td>
                                            <td>14</td>
                                            <td>NaN</td>
                                            <td>112</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>04/07/2020</td>
                                            <td>208</td>
                                            <td>208</td>
                                            <td>224</td>
                                            <td>48</td>
                                            <td>33</td>
                                            <td>24</td>
                                            <td>NaN</td>
                                            <td>71</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>05/07/2020</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>4</td>
                                            <td>NaN</td>
                                            <td>1</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>12</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>06/07/2020</td>
                                            <td>327</td>
                                            <td>327</td>
                                            <td>565</td>
                                            <td>119</td>
                                            <td>37</td>
                                            <td>22</td>
                                            <td>NaN</td>
                                            <td>117</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>07/07/2020</td>
                                            <td>254</td>
                                            <td>254</td>
                                            <td>485</td>
                                            <td>125</td>
                                            <td>35</td>
                                            <td>24</td>
                                            <td>NaN</td>
                                            <td>126</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>08/07/2020</td>
                                            <td>371</td>
                                            <td>371</td>
                                            <td>546</td>
                                            <td>152</td>
                                            <td>49</td>
                                            <td>18</td>
                                            <td>NaN</td>
                                            <td>120</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>09/07/2020</td>
                                            <td>330</td>
                                            <td>330</td>
                                            <td>444</td>
                                            <td>186</td>
                                            <td>36</td>
                                            <td>19</td>
                                            <td>NaN</td>
                                            <td>123</td>
                                            <td>13</td>
                                        </tr>
                                        <tr>
                                            <td>10/07/2020</td>
                                            <td>316</td>
                                            <td>316</td>
                                            <td>406</td>
                                            <td>173</td>
                                            <td>36</td>
                                            <td>26</td>
                                            <td>NaN</td>
                                            <td>128</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>11/07/2020</td>
                                            <td>51</td>
                                            <td>51</td>
                                            <td>61</td>
                                            <td>NaN</td>
                                            <td>1</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>31</td>
                                            <td>67</td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2020</td>
                                            <td>6</td>
                                            <td>6</td>
                                            <td>9</td>
                                            <td>7</td>
                                            <td>4</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>11</td>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <td>13/07/2020</td>
                                            <td>296</td>
                                            <td>296</td>
                                            <td>517</td>
                                            <td>125</td>
                                            <td>41</td>
                                            <td>30</td>
                                            <td>NaN</td>
                                            <td>126</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>14/07/2020</td>
                                            <td>264</td>
                                            <td>264</td>
                                            <td>426</td>
                                            <td>123</td>
                                            <td>44</td>
                                            <td>19</td>
                                            <td>NaN</td>
                                            <td>119</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>15/07/2020</td>
                                            <td>349</td>
                                            <td>349</td>
                                            <td>465</td>
                                            <td>114</td>
                                            <td>37</td>
                                            <td>25</td>
                                            <td>NaN</td>
                                            <td>125</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>16/07/2020</td>
                                            <td>225</td>
                                            <td>225</td>
                                            <td>418</td>
                                            <td>96</td>
                                            <td>43</td>
                                            <td>30</td>
                                            <td>NaN</td>
                                            <td>121</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <td>17/07/2020</td>
                                            <td>237</td>
                                            <td>237</td>
                                            <td>351</td>
                                            <td>132</td>
                                            <td>18</td>
                                            <td>13</td>
                                            <td>NaN</td>
                                            <td>120</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <td>18/07/2020</td>
                                            <td>10</td>
                                            <td>10</td>
                                            <td>21</td>
                                            <td>NaN</td>
                                            <td>1</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>27</td>
                                            <td>24</td>
                                        </tr>
                                        <tr>
                                            <td>19/07/2020</td>
                                            <td>7</td>
                                            <td>7</td>
                                            <td>15</td>
                                            <td>NaN</td>
                                            <td>1</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>17</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>20/07/2020</td>
                                            <td>215</td>
                                            <td>215</td>
                                            <td>448</td>
                                            <td>73</td>
                                            <td>34</td>
                                            <td>16</td>
                                            <td>NaN</td>
                                            <td>116</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>21/07/2020</td>
                                            <td>209</td>
                                            <td>209</td>
                                            <td>362</td>
                                            <td>119</td>
                                            <td>31</td>
                                            <td>26</td>
                                            <td>NaN</td>
                                            <td>123</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>22/07/2020</td>
                                            <td>289</td>
                                            <td>289</td>
                                            <td>458</td>
                                            <td>88</td>
                                            <td>39</td>
                                            <td>25</td>
                                            <td>NaN</td>
                                            <td>128</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>23/07/2020</td>
                                            <td>255</td>
                                            <td>255</td>
                                            <td>351</td>
                                            <td>70</td>
                                            <td>45</td>
                                            <td>16</td>
                                            <td>NaN</td>
                                            <td>120</td>
                                            <td>24</td>
                                        </tr>
                                        <tr>
                                            <td>24/07/2020</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>2</td>
                                            <td>NaN</td>
                                            <td>3</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>25/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>26/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>27/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>28/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>29/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>30/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>31/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div aria-hidden="true"
                             style="display: none; position: absolute; top: 310px; left: 1854px; white-space: nowrap; font-family: Arial; font-size: 16px;">
                            0/0</div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div id="crm-chart-revenue">
                    <div style="position: relative;">
                        <div dir="ltr"
                             style="position: relative; width: 1844px; height: 300px;">
                            <div aria-label="A chart."
                                 style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                <svg width="1844" height="300" aria-label="A chart."
                                     style="overflow: hidden;">
                                    <defs id="_ABSTRACT_RENDERER_ID_2">
                                        <clippath id="_ABSTRACT_RENDERER_ID_3">
                                            <rect x="179" y="58" width="1486" height="185">
                                            </rect>
                                        </clippath>
                                    </defs>
                                    <rect x="0" y="0" width="1844" height="300" stroke="none"
                                          stroke-width="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="179" y="34.6"
                                             font-family="Arial" font-size="16"
                                             font-weight="bold" stroke="none" stroke-width="0"
                                             fill="#000000">Tình hình chăm sóc - giá trị hợp
                                            đồng, doanh thu</text>
                                        <rect x="179" y="21" width="1486" height="16"
                                              stroke="none" stroke-width="0" fill-opacity="0"
                                              fill="#ffffff"></rect>
                                    </g>
                                    <g>
                                        <rect x="1681" y="58" width="147" height="42"
                                              stroke="none" stroke-width="0" fill-opacity="0"
                                              fill="#ffffff"></rect>
                                        <g>
                                            <rect x="1681" y="58" width="147" height="16"
                                                  stroke="none" stroke-width="0" fill-opacity="0"
                                                  fill="#ffffff"></rect>
                                            <g><text text-anchor="start" x="1719" y="71.6"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">Giá trị HD</text></g>
                                            <path d="M1681,66L1713,66" stroke="#3366cc"
                                                  stroke-width="2" fill-opacity="1" fill="none">
                                            </path>
                                            <circle cx="1697" cy="66" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                        </g>
                                        <g>
                                            <rect x="1681" y="84" width="147" height="16"
                                                  stroke="none" stroke-width="0" fill-opacity="0"
                                                  fill="#ffffff"></rect>
                                            <g><text text-anchor="start" x="1719" y="97.6"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">Đã thu</text></g>
                                            <path d="M1681,92L1713,92" stroke="#dc3912"
                                                  stroke-width="2" fill-opacity="1" fill="none">
                                            </path>
                                            <circle cx="1697" cy="92" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                        </g>
                                    </g>
                                    <g>
                                        <rect x="179" y="58" width="1486" height="185"
                                              stroke="none" stroke-width="0" fill-opacity="0"
                                              fill="#ffffff"></rect>
                                        <g
                                                clip-path="url(https://erp.nhanh.vn/crm/report/index#_ABSTRACT_RENDERER_ID_3)">
                                            <g>
                                                <rect x="179" y="242" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#cccccc"></rect>
                                                <rect x="179" y="181" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#cccccc"></rect>
                                                <rect x="179" y="119" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#cccccc"></rect>
                                                <rect x="179" y="58" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#cccccc"></rect>
                                                <rect x="179" y="211" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#ebebeb"></rect>
                                                <rect x="179" y="150" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#ebebeb"></rect>
                                                <rect x="179" y="89" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#ebebeb"></rect>
                                            </g>
                                            <g>
                                                <rect x="179" y="242" width="1486" height="1"
                                                      stroke="none" stroke-width="0"
                                                      fill="#333333"></rect>
                                            </g>
                                            <g>
                                                <path
                                                        d="M203.4516129032258,242.49997546666665L251.35483870967744,242.49997362666667L299.258064516129,242.4999816L347.16129032258067,242.4999908M442.9677419354839,242.49996626666666L490.8709677419355,242.49996626666666L538.7741935483871,242.49997301333335L586.6774193548388,242.49997792L634.5806451612904,242.49997853333332L682.483870967742,242.49999877333335M778.2903225806452,242.49996442666668L826.1935483870968,242.49998098666666L874.0967741935484,242.49996626666666L922,242.49996933333333L969.9032258064517,242.49996933333333L1017.8064516129033,242.49999632M1113.6129032258063,242.49996994666665L1161.516129032258,242.49997546666665L1209.4193548387098,242.49997178666666L1257.3225806451615,242.49997178666666L1305.225806451613,242.49999938666667"
                                                        stroke="#3366cc" stroke-width="2"
                                                        fill-opacity="1" fill="none"></path>
                                                <path
                                                        d="M203.4516129032258,138.8672673066667L251.35483870967744,146.70957792000002L299.258064516129,169.10239816L347.16129032258067,207.47314666666665M442.9677419354839,99.53750344L490.8709677419355,79.68821333333332L538.7741935483871,161.83439264L586.6774193548388,173.25352218666666L634.5806451612904,194.39626237333334L682.483870967742,241.028M778.2903225806452,95.33002512000002L826.1935483870968,160.8259328L874.0967741935484,83.63742925333332L922,117.47933914666667L969.9032258064517,134.50607968L1017.8064516129033,236.9432M1113.6129032258063,160.56361504L1161.516129032258,135.57949642666665L1209.4193548387098,98.42738114666668L1257.3225806451615,122.90303968"
                                                        stroke="#dc3912" stroke-width="2"
                                                        fill-opacity="1" fill="none"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <circle cx="203.4516129032258"
                                                    cy="242.49997546666665" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="251.35483870967744"
                                                    cy="242.49997362666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="299.258064516129" cy="242.4999816"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#3366cc"></circle>
                                            <circle cx="347.16129032258067" cy="242.4999908"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#3366cc"></circle>
                                            <circle cx="442.9677419354839"
                                                    cy="242.49996626666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="490.8709677419355"
                                                    cy="242.49996626666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="538.7741935483871"
                                                    cy="242.49997301333335" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="586.6774193548388" cy="242.49997792"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#3366cc"></circle>
                                            <circle cx="634.5806451612904"
                                                    cy="242.49997853333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="682.483870967742"
                                                    cy="242.49999877333335" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="778.2903225806452"
                                                    cy="242.49996442666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="826.1935483870968"
                                                    cy="242.49998098666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="874.0967741935484"
                                                    cy="242.49996626666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="922" cy="242.49996933333333" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#3366cc">
                                            </circle>
                                            <circle cx="969.9032258064517"
                                                    cy="242.49996933333333" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="1017.8064516129033" cy="242.49999632"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#3366cc"></circle>
                                            <circle cx="1113.6129032258063"
                                                    cy="242.49996994666665" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="1161.516129032258"
                                                    cy="242.49997546666665" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="1209.4193548387098"
                                                    cy="242.49997178666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="1257.3225806451615"
                                                    cy="242.49997178666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="1305.225806451613"
                                                    cy="242.49999938666667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#3366cc"></circle>
                                            <circle cx="203.4516129032258"
                                                    cy="138.8672673066667" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="251.35483870967744"
                                                    cy="146.70957792000002" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="299.258064516129" cy="169.10239816"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#dc3912"></circle>
                                            <circle cx="347.16129032258067"
                                                    cy="207.47314666666665" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="442.9677419354839" cy="99.53750344"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#dc3912"></circle>
                                            <circle cx="490.8709677419355"
                                                    cy="79.68821333333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="538.7741935483871" cy="161.83439264"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#dc3912"></circle>
                                            <circle cx="586.6774193548388"
                                                    cy="173.25352218666666" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="634.5806451612904"
                                                    cy="194.39626237333334" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="682.483870967742" cy="241.028" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#dc3912">
                                            </circle>
                                            <circle cx="778.2903225806452"
                                                    cy="95.33002512000002" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="826.1935483870968" cy="160.8259328"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#dc3912"></circle>
                                            <circle cx="874.0967741935484"
                                                    cy="83.63742925333332" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="922" cy="117.47933914666667" r="2.5"
                                                    stroke="none" stroke-width="0" fill="#dc3912">
                                            </circle>
                                            <circle cx="969.9032258064517" cy="134.50607968"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#dc3912"></circle>
                                            <circle cx="1017.8064516129033" cy="236.9432"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#dc3912"></circle>
                                            <circle cx="1113.6129032258063" cy="160.56361504"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#dc3912"></circle>
                                            <circle cx="1161.516129032258"
                                                    cy="135.57949642666665" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="1209.4193548387098"
                                                    cy="98.42738114666668" r="2.5" stroke="none"
                                                    stroke-width="0" fill="#dc3912"></circle>
                                            <circle cx="1257.3225806451615" cy="122.90303968"
                                                    r="2.5" stroke="none" stroke-width="0"
                                                    fill="#dc3912"></circle>
                                        </g>
                                        <g>
                                            <g><text text-anchor="middle" x="203.4516129032258"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">01/07/2020</text></g>
                                            <g><text text-anchor="middle" x="251.35483870967744"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">02/07/2020</text></g>
                                            <g><text text-anchor="middle" x="299.258064516129"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">03/07/2020</text></g>
                                            <g><text text-anchor="middle" x="347.16129032258067"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">04/07/2020</text></g>
                                            <g><text text-anchor="middle" x="395.06451612903226"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">05/07/2020</text></g>
                                            <g><text text-anchor="middle" x="442.9677419354839"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">06/07/2020</text></g>
                                            <g><text text-anchor="middle" x="490.8709677419355"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">07/07/2020</text></g>
                                            <g><text text-anchor="middle" x="538.7741935483871"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">08/07/2020</text></g>
                                            <g><text text-anchor="middle" x="586.6774193548388"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">09/07/2020</text></g>
                                            <g><text text-anchor="middle" x="634.5806451612904"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">10/07/2020</text></g>
                                            <g><text text-anchor="middle" x="682.483870967742"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">11/07/2020</text></g>
                                            <g><text text-anchor="middle" x="730.3870967741935"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">12/07/2020</text></g>
                                            <g><text text-anchor="middle" x="778.2903225806452"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">13/07/2020</text></g>
                                            <g><text text-anchor="middle" x="826.1935483870968"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">14/07/2020</text></g>
                                            <g><text text-anchor="middle" x="874.0967741935484"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">15/07/2020</text></g>
                                            <g><text text-anchor="middle" x="922" y="287.6"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">16/07/2020</text></g>
                                            <g><text text-anchor="middle" x="969.9032258064517"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">17/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1017.8064516129033"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">18/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1065.7096774193549"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">19/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1113.6129032258063"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">20/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1161.516129032258"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">21/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1209.4193548387098"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">22/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1257.3225806451615"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">23/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1305.225806451613"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">24/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1353.1290322580646"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">25/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1401.032258064516"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">26/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1448.9354838709678"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">27/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1496.8387096774195"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">28/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1544.741935483871"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">29/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1592.6451612903227"
                                                     y="287.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">30/07/2020</text></g>
                                            <g><text text-anchor="middle" x="1640.5483870967744"
                                                     y="266.6" font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#222222">31/07/2020</text></g>
                                            <g><text text-anchor="end" x="163" y="248.1"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#444444">0</text></g>
                                            <g><text text-anchor="end" x="163" y="186.7667"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#444444">100,000,000</text></g>
                                            <g><text text-anchor="end" x="163"
                                                     y="125.43329999999999" font-family="Arial"
                                                     font-size="16" stroke="none"
                                                     stroke-width="0"
                                                     fill="#444444">200,000,000</text></g>
                                            <g><text text-anchor="end" x="163" y="64.1"
                                                     font-family="Arial" font-size="16"
                                                     stroke="none" stroke-width="0"
                                                     fill="#444444">300,000,000</text></g>
                                        </g>
                                    </g>
                                    <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                     style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Thời gian</th>
                                            <th>Giá trị HD</th>
                                            <th>Đã thu</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>01/07/2020</td>
                                            <td>40</td>
                                            <td>168,966,412</td>
                                        </tr>
                                        <tr>
                                            <td>02/07/2020</td>
                                            <td>43</td>
                                            <td>156,180,036</td>
                                        </tr>
                                        <tr>
                                            <td>03/07/2020</td>
                                            <td>30</td>
                                            <td>119,670,003</td>
                                        </tr>
                                        <tr>
                                            <td>04/07/2020</td>
                                            <td>15</td>
                                            <td>57,109,000</td>
                                        </tr>
                                        <tr>
                                            <td>05/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>06/07/2020</td>
                                            <td>55</td>
                                            <td>233,091,027</td>
                                        </tr>
                                        <tr>
                                            <td>07/07/2020</td>
                                            <td>55</td>
                                            <td>265,454,000</td>
                                        </tr>
                                        <tr>
                                            <td>08/07/2020</td>
                                            <td>44</td>
                                            <td>131,520,012</td>
                                        </tr>
                                        <tr>
                                            <td>09/07/2020</td>
                                            <td>36</td>
                                            <td>112,901,866</td>
                                        </tr>
                                        <tr>
                                            <td>10/07/2020</td>
                                            <td>35</td>
                                            <td>78,430,007</td>
                                        </tr>
                                        <tr>
                                            <td>11/07/2020</td>
                                            <td>2</td>
                                            <td>2,400,000</td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>13/07/2020</td>
                                            <td>58</td>
                                            <td>239,951,046</td>
                                        </tr>
                                        <tr>
                                            <td>14/07/2020</td>
                                            <td>31</td>
                                            <td>133,164,240</td>
                                        </tr>
                                        <tr>
                                            <td>15/07/2020</td>
                                            <td>55</td>
                                            <td>259,015,061</td>
                                        </tr>
                                        <tr>
                                            <td>16/07/2020</td>
                                            <td>50</td>
                                            <td>203,838,034</td>
                                        </tr>
                                        <tr>
                                            <td>17/07/2020</td>
                                            <td>50</td>
                                            <td>176,077,044</td>
                                        </tr>
                                        <tr>
                                            <td>18/07/2020</td>
                                            <td>6</td>
                                            <td>9,060,000</td>
                                        </tr>
                                        <tr>
                                            <td>19/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>20/07/2020</td>
                                            <td>49</td>
                                            <td>133,591,932</td>
                                        </tr>
                                        <tr>
                                            <td>21/07/2020</td>
                                            <td>40</td>
                                            <td>174,326,908</td>
                                        </tr>
                                        <tr>
                                            <td>22/07/2020</td>
                                            <td>46</td>
                                            <td>234,901,009</td>
                                        </tr>
                                        <tr>
                                            <td>23/07/2020</td>
                                            <td>46</td>
                                            <td>194,995,044</td>
                                        </tr>
                                        <tr>
                                            <td>24/07/2020</td>
                                            <td>1</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>25/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>26/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>27/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>28/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>29/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>30/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <td>31/07/2020</td>
                                            <td>NaN</td>
                                            <td>NaN</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div aria-hidden="true"
                             style="display: none; position: absolute; top: 310px; left: 1854px; white-space: nowrap; font-family: Arial; font-size: 16px;">
                            Đã thu</div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="widget widget-table">
                <div class="widget-header">
                    <h3><i class="fa fa-table"></i> Báo cáo chăm sóc</h3>
                </div>
                <div class="dgContainer widget-content table-responsive">
                    <div style="display: none; width: 1852px;" class="stickyHeader">
                        <table class="table table-bordered" cellspacing="0" cellpadding="0">
                            <thead>
                            <tr class="even">
                                <th rowspan="2" style="width: 152px;">Thời gian</th>
                                <th rowspan="2" style="width: 120px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=createdLead&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Tạo TT</a></th>
                                <th rowspan="2" style="width: 213px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=lead&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Nhận chăm sóc</a></th>
                                <th colspan="2" style="width: 178px;">Gọi</th>
                                <th rowspan="2" style="width: 89px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=meeting&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Gặp</a></th>
                                <th rowspan="2" style="width: 89px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=calendar&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Hẹn</a></th>
                                <th rowspan="2" style="width: 151px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=deploy&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Triển khai</a></th>
                                <th rowspan="2" style="width: 153px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=employee&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Nhân viên</a></th>
                                <th rowspan="2" style="width: 174px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=account&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Khách hàng</a></th>
                                <th colspan="3" style="width: 532px;">Hợp đồng</th>
                            </tr>
                            <tr>
                                <th style="width: 89px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=callSuccess&amp;dir=asc"><i
                                                class="fa fa-sort"></i> <i
                                                class="fa fa-check"></i></a></th>
                                <th style="width: 89px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=callFail&amp;dir=asc"><i
                                                class="fa fa-sort"></i> <i
                                                class="fa fa-minus-circle"></i></a></th>
                                <th style="width: 147px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=contractTotal&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Số lượng</a></th>
                                <th style="width: 188px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=contractValue&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Giá trị (VNĐ)</a></th>
                                <th style="width: 197px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=contractPayment&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Thu (VNĐ)</a></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 dgButtons"></div>
                        <div style="clear: both;"></div><br>
                    </div>
                    <table id="dgCrmReportIndex" class="table table-bordered">
                        <thead>
                        <tr class="even">
                            <th rowspan="2">Thời gian</th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=createdLead&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Tạo TT</a></th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=lead&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Nhận chăm sóc</a></th>
                            <th colspan="2">Gọi</th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=meeting&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Gặp</a></th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=calendar&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Hẹn</a></th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=deploy&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Triển khai</a></th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=employee&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Nhân viên</a></th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=account&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Khách hàng</a></th>
                            <th colspan="3">Hợp đồng</th>
                        </tr>
                        <tr>
                            <th><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=callSuccess&amp;dir=asc"><i
                                            class="fa fa-sort"></i> <i
                                            class="fa fa-check"></i></a></th>
                            <th><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=callFail&amp;dir=asc"><i
                                            class="fa fa-sort"></i> <i
                                            class="fa fa-minus-circle"></i></a></th>
                            <th><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=contractTotal&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Số lượng</a></th>
                            <th><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=contractValue&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Giá trị (VNĐ)</a></th>
                            <th><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=contractPayment&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Thu (VNĐ)</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="even">
                            <td>01/07/2020</td>
                            <td class="colNumber">296</td>
                            <td class="colNumber">296</td>
                            <td class="colNumber">358</td>
                            <td class="colNumber">93</td>
                            <td class="colNumber">31</td>
                            <td class="colNumber">19</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">126</td>
                            <td class="colNumber">14</td>
                            <td class="colNumber">40</td>
                            <td class="colNumber">168.966.412</td>
                            <td class="colNumber">-542.559.599</td>
                        </tr>
                        <tr>
                            <td>02/07/2020</td>
                            <td class="colNumber">292</td>
                            <td class="colNumber">292</td>
                            <td class="colNumber">486</td>
                            <td class="colNumber">88</td>
                            <td class="colNumber">25</td>
                            <td class="colNumber">26</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">113</td>
                            <td class="colNumber">15</td>
                            <td class="colNumber">43</td>
                            <td class="colNumber">156.180.036</td>
                            <td class="colNumber">246.912.789</td>
                        </tr>
                        <tr class="even">
                            <td>03/07/2020</td>
                            <td class="colNumber">315</td>
                            <td class="colNumber">315</td>
                            <td class="colNumber">453</td>
                            <td class="colNumber">134</td>
                            <td class="colNumber">34</td>
                            <td class="colNumber">14</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">112</td>
                            <td class="colNumber">8</td>
                            <td class="colNumber">30</td>
                            <td class="colNumber">119.670.003</td>
                            <td class="colNumber">377.534.715</td>
                        </tr>
                        <tr>
                            <td>04/07/2020</td>
                            <td class="colNumber">208</td>
                            <td class="colNumber">208</td>
                            <td class="colNumber">224</td>
                            <td class="colNumber">48</td>
                            <td class="colNumber">33</td>
                            <td class="colNumber">24</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">71</td>
                            <td class="colNumber">5</td>
                            <td class="colNumber">15</td>
                            <td class="colNumber">57.109.000</td>
                            <td class="colNumber">456.074.136</td>
                        </tr>
                        <tr class="even">
                            <td>05/07/2020</td>
                            <td class="colNumber">5</td>
                            <td class="colNumber">5</td>
                            <td class="colNumber">4</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">1</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">12</td>
                            <td class="colNumber">8</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>06/07/2020</td>
                            <td class="colNumber">327</td>
                            <td class="colNumber">327</td>
                            <td class="colNumber">565</td>
                            <td class="colNumber">119</td>
                            <td class="colNumber">37</td>
                            <td class="colNumber">22</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">117</td>
                            <td class="colNumber">15</td>
                            <td class="colNumber">55</td>
                            <td class="colNumber">233.091.027</td>
                            <td class="colNumber">4.112.214.738</td>
                        </tr>
                        <tr class="even">
                            <td>07/07/2020</td>
                            <td class="colNumber">254</td>
                            <td class="colNumber">254</td>
                            <td class="colNumber">485</td>
                            <td class="colNumber">125</td>
                            <td class="colNumber">35</td>
                            <td class="colNumber">24</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">126</td>
                            <td class="colNumber">14</td>
                            <td class="colNumber">55</td>
                            <td class="colNumber">265.454.000</td>
                            <td class="colNumber">-2.744.425.016</td>
                        </tr>
                        <tr>
                            <td>08/07/2020</td>
                            <td class="colNumber">371</td>
                            <td class="colNumber">371</td>
                            <td class="colNumber">546</td>
                            <td class="colNumber">152</td>
                            <td class="colNumber">49</td>
                            <td class="colNumber">18</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">120</td>
                            <td class="colNumber">17</td>
                            <td class="colNumber">44</td>
                            <td class="colNumber">131.520.012</td>
                            <td class="colNumber">-1.342.564.634</td>
                        </tr>
                        <tr class="even">
                            <td>09/07/2020</td>
                            <td class="colNumber">330</td>
                            <td class="colNumber">330</td>
                            <td class="colNumber">444</td>
                            <td class="colNumber">186</td>
                            <td class="colNumber">36</td>
                            <td class="colNumber">19</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">123</td>
                            <td class="colNumber">13</td>
                            <td class="colNumber">36</td>
                            <td class="colNumber">112.901.866</td>
                            <td class="colNumber">171.451.648</td>
                        </tr>
                        <tr>
                            <td>10/07/2020</td>
                            <td class="colNumber">316</td>
                            <td class="colNumber">316</td>
                            <td class="colNumber">406</td>
                            <td class="colNumber">173</td>
                            <td class="colNumber">36</td>
                            <td class="colNumber">26</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">128</td>
                            <td class="colNumber">12</td>
                            <td class="colNumber">35</td>
                            <td class="colNumber">78.430.007</td>
                            <td class="colNumber">71.467.893</td>
                        </tr>
                        <tr class="even">
                            <td>11/07/2020</td>
                            <td class="colNumber">51</td>
                            <td class="colNumber">51</td>
                            <td class="colNumber">61</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">1</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">31</td>
                            <td class="colNumber">67</td>
                            <td class="colNumber">2</td>
                            <td class="colNumber">2.400.000</td>
                            <td class="colNumber">323.809.800</td>
                        </tr>
                        <tr>
                            <td>12/07/2020</td>
                            <td class="colNumber">6</td>
                            <td class="colNumber">6</td>
                            <td class="colNumber">9</td>
                            <td class="colNumber">7</td>
                            <td class="colNumber">4</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">11</td>
                            <td class="colNumber">7</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>13/07/2020</td>
                            <td class="colNumber">296</td>
                            <td class="colNumber">296</td>
                            <td class="colNumber">517</td>
                            <td class="colNumber">125</td>
                            <td class="colNumber">41</td>
                            <td class="colNumber">30</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">126</td>
                            <td class="colNumber">17</td>
                            <td class="colNumber">58</td>
                            <td class="colNumber">239.951.046</td>
                            <td class="colNumber">4.748.407.941</td>
                        </tr>
                        <tr>
                            <td>14/07/2020</td>
                            <td class="colNumber">264</td>
                            <td class="colNumber">264</td>
                            <td class="colNumber">426</td>
                            <td class="colNumber">123</td>
                            <td class="colNumber">44</td>
                            <td class="colNumber">19</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">119</td>
                            <td class="colNumber">6</td>
                            <td class="colNumber">31</td>
                            <td class="colNumber">133.164.240</td>
                            <td class="colNumber">-2.524.822.284</td>
                        </tr>
                        <tr class="even">
                            <td>15/07/2020</td>
                            <td class="colNumber">349</td>
                            <td class="colNumber">349</td>
                            <td class="colNumber">465</td>
                            <td class="colNumber">114</td>
                            <td class="colNumber">37</td>
                            <td class="colNumber">25</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">125</td>
                            <td class="colNumber">21</td>
                            <td class="colNumber">55</td>
                            <td class="colNumber">259.015.061</td>
                            <td class="colNumber">-718.976.572</td>
                        </tr>
                        <tr>
                            <td>16/07/2020</td>
                            <td class="colNumber">225</td>
                            <td class="colNumber">225</td>
                            <td class="colNumber">418</td>
                            <td class="colNumber">96</td>
                            <td class="colNumber">43</td>
                            <td class="colNumber">30</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">121</td>
                            <td class="colNumber">16</td>
                            <td class="colNumber">50</td>
                            <td class="colNumber">203.838.034</td>
                            <td class="colNumber">756.466.178</td>
                        </tr>
                        <tr class="even">
                            <td>17/07/2020</td>
                            <td class="colNumber">237</td>
                            <td class="colNumber">237</td>
                            <td class="colNumber">351</td>
                            <td class="colNumber">132</td>
                            <td class="colNumber">18</td>
                            <td class="colNumber">13</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">120</td>
                            <td class="colNumber">16</td>
                            <td class="colNumber">50</td>
                            <td class="colNumber">176.077.044</td>
                            <td class="colNumber">-5.334.932.776</td>
                        </tr>
                        <tr>
                            <td>18/07/2020</td>
                            <td class="colNumber">10</td>
                            <td class="colNumber">10</td>
                            <td class="colNumber">21</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">1</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">27</td>
                            <td class="colNumber">24</td>
                            <td class="colNumber">6</td>
                            <td class="colNumber">9.060.000</td>
                            <td class="colNumber">310.442.120</td>
                        </tr>
                        <tr class="even">
                            <td>19/07/2020</td>
                            <td class="colNumber">7</td>
                            <td class="colNumber">7</td>
                            <td class="colNumber">15</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">1</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">17</td>
                            <td class="colNumber">8</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>20/07/2020</td>
                            <td class="colNumber">215</td>
                            <td class="colNumber">215</td>
                            <td class="colNumber">448</td>
                            <td class="colNumber">73</td>
                            <td class="colNumber">34</td>
                            <td class="colNumber">16</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">116</td>
                            <td class="colNumber">17</td>
                            <td class="colNumber">49</td>
                            <td class="colNumber">133.591.932</td>
                            <td class="colNumber">4.325.162.632</td>
                        </tr>
                        <tr class="even">
                            <td>21/07/2020</td>
                            <td class="colNumber">209</td>
                            <td class="colNumber">209</td>
                            <td class="colNumber">362</td>
                            <td class="colNumber">119</td>
                            <td class="colNumber">31</td>
                            <td class="colNumber">26</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">123</td>
                            <td class="colNumber">20</td>
                            <td class="colNumber">40</td>
                            <td class="colNumber">174.326.908</td>
                            <td class="colNumber">-3.234.913.869</td>
                        </tr>
                        <tr>
                            <td>22/07/2020</td>
                            <td class="colNumber">289</td>
                            <td class="colNumber">289</td>
                            <td class="colNumber">458</td>
                            <td class="colNumber">88</td>
                            <td class="colNumber">39</td>
                            <td class="colNumber">25</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">128</td>
                            <td class="colNumber">12</td>
                            <td class="colNumber">46</td>
                            <td class="colNumber">234.901.009</td>
                            <td class="colNumber">3.081.173.045</td>
                        </tr>
                        <tr class="even">
                            <td>23/07/2020</td>
                            <td class="colNumber">255</td>
                            <td class="colNumber">255</td>
                            <td class="colNumber">351</td>
                            <td class="colNumber">70</td>
                            <td class="colNumber">45</td>
                            <td class="colNumber">16</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">120</td>
                            <td class="colNumber">24</td>
                            <td class="colNumber">46</td>
                            <td class="colNumber">194.995.044</td>
                            <td class="colNumber">-579.698.260</td>
                        </tr>
                        <tr>
                            <td>24/07/2020</td>
                            <td class="colNumber">1</td>
                            <td class="colNumber">1</td>
                            <td class="colNumber">2</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">2</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">3</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">1</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>25/07/2020</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>26/07/2020</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>27/07/2020</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>28/07/2020</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>29/07/2020</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>30/07/2020</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>31/07/2020</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="rowSum">
                            <td><b>Tổng</b></td>
                            <td class="colNumber">5.128</td>
                            <td class="colNumber">5.128</td>
                            <td class="colNumber">7.875</td>
                            <td class="colNumber">2.065</td>
                            <td class="colNumber">656</td>
                            <td class="colNumber">394</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">2.235</td>
                            <td class="colNumber">376</td>
                            <td class="colNumber">787</td>
                            <td class="colNumber">3.084.642.681</td>
                            <td class="colNumber">1.958.224.625</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-6 dgButtons"></div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            td.mark {
                font-weight: bold;
            }

            td.colNumber {
                text-align: right;
            }
        </style>
        <script>
            var titleFirstChart = 'Tình hình chăm sóc - tìm, gọi gặp';
            var titleSecondChart = 'Tình hình chăm sóc - giá trị hợp đồng, doanh thu';
        </script>
    </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/loader.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_default_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_graphics_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_ui_module.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_fw_module.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_corechart_module.js') }}"></script>

    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/jsapi') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/index.js') }}"></script>
@endsection