@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo chăm sóc theo công ty')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo chăm sóc theo công ty</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="customercarecompanyFilter" class="form-inline" role="form"
                id="customercarecompanyFilter">
                <div class="form-group"><input type="text" name="daterangepicker"
                        class="form-control date-range-picker" id="daterangepicker"
                        value="01/07/2020 - 31/07/2020"></div>
                <div class="form-group"><select name="companyId" id="companyId"
                        class="form-control">
                        <option value="">- Công ty -</option>
                        <option value="10" selected="selected">VNP group</option>
                        <option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
                        <option value="315">------Vật giá - Hà Nội</option>
                        <option value="319">------Vật giá - Hồ Chí Minh</option>
                        <option value="365">------Vật giá - Hải Phòng</option>
                        <option value="387">------WeSave</option>
                        <option value="389">------123doc.org</option>
                        <option value="390">------Cunghocvui.com</option>
                        <option value="391">------123job.vn</option>
                        <option value="392">------9houz.com</option>
                        <option value="393">------123dok.com</option>
                        <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                        <option value="322">------Bảo Kim - Hà Nội</option>
                        <option value="323">------Bảo Kim - Hồ Chí Minh</option>
                        <option value="324">---Công ty cổ phần Nhanh.vn</option>
                        <option value="1">------Nhanh.vn</option>
                        <option value="366">------Nhanh.vn Đà Nẵng</option>
                        <option value="395">------Nhanh.vn HCM</option>
                        <option value="379">---Westay</option>
                        <option value="384">---Công ty cổ phần WeHelp</option>
                        <option value="398">---WeLove</option>
                        <option value="402">---Công ty TNHH Nguồn Nhân Lực Elite Việt Nam
                        </option>
                    </select></div>
                <div class="form-group"><input name="submit" type="submit"
                        id="btnFilterCrmContact" class="form-control btn btn-primary"
                        value="Lọc"></div>
            </form>
        </div>
        <div class="companyReport companyReport_315">
            <legend>
                Vật giá - Hà Nội</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_315">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_6">
                                    <clippath id="_ABSTRACT_RENDERER_ID_7">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                    <filter id="_ABSTRACT_RENDERER_ID_44">
                                        <fegaussianblur in="SourceAlpha" stdDeviation="2">
                                        </fegaussianblur>
                                        <feoffset dx="1" dy="1"></feoffset>
                                        <fecomponenttransfer>
                                            <fefunca type="linear" slope="0.1"></fefunca>
                                        </fecomponenttransfer>
                                        <femerge>
                                            <femergenode></femergenode>
                                            <femergenode in="SourceGraphic"></femergenode>
                                        </femerge>
                                    </filter>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_7)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="92" width="152" height="69"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="108" width="152" height="53"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="158" width="152" height="3"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="62" width="152" height="99"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">50</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">100</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>57</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>44</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>81</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px; font-weight: bold;">
                        81</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">57</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">44</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">3</p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">81</p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">130%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">1467%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">4%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_319">
            <legend>
                Vật giá - Hồ Chí Minh</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_319">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_8">
                                    <clippath id="_ABSTRACT_RENDERER_ID_9">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_9)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="120" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="79" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="73" width="152" height="88"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="55" width="152" height="106"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="159" width="152" height="2"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="158" width="152" height="3"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="125.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">2,500</text></g>
                                        <g><text text-anchor="end" x="105" y="84.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">5,000</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">7,500</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>5,419</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>6,529</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>189</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>263</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">5.419</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">6.529</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">189</p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">263</p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">83%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">3454%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">72%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_393">
            <legend>
                123dok.com</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_393">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_36">
                                    <clippath id="_ABSTRACT_RENDERER_ID_37">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_37)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_392">
            <legend>
                9houz.com</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_392">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_34">
                                    <clippath id="_ABSTRACT_RENDERER_ID_35">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_35)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_391">
            <legend>
                123job.vn</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_391">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_32">
                                    <clippath id="_ABSTRACT_RENDERER_ID_33">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_33)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="120" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="79" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="141" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="59" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="64" width="152" height="97"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="146" width="152" height="15"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="161" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="154" width="152" height="7"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="125.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">5</text></g>
                                        <g><text text-anchor="end" x="105" y="84.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">10</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">15</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">12</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">2</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">1</p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">600%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_390">
            <legend>
                Cunghocvui.com</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_390">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_30">
                                    <clippath id="_ABSTRACT_RENDERER_ID_31">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_31)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_365">
            <legend>
                Vật giá - Hải Phòng</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_365">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_18">
                                    <clippath id="_ABSTRACT_RENDERER_ID_19">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_19)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_389">
            <legend>
                123doc.org</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_389">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_28">
                                    <clippath id="_ABSTRACT_RENDERER_ID_29">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_29)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_387">
            <legend>
                WeSave</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_387">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_26">
                                    <clippath id="_ABSTRACT_RENDERER_ID_27">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_27)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_379">
            <legend>
                Westay</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_379">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_22">
                                    <clippath id="_ABSTRACT_RENDERER_ID_23">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_23)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_402">
            <legend>
                Công ty TNHH Nguồn Nhân Lực Elite Việt Nam</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_402">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_42">
                                    <clippath id="_ABSTRACT_RENDERER_ID_43">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_43)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_398">
            <legend>
                WeLove</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_398">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_40">
                                    <clippath id="_ABSTRACT_RENDERER_ID_41">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_41)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_384">
            <legend>
                Công ty cổ phần WeHelp</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_384">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_24">
                                    <clippath id="_ABSTRACT_RENDERER_ID_25">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_25)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="120" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="79" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="141" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="59" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="121" width="152" height="40"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="161" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="161" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="39" width="152" height="122"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="125.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">2</text></g>
                                        <g><text text-anchor="end" x="105" y="84.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">4</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">6</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>6</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">2</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">6</p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_324">
            <legend>
                Công ty cổ phần Nhanh.vn</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_324">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_16">
                                    <clippath id="_ABSTRACT_RENDERER_ID_17">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_17)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_321">
            <legend>
                Công ty cổ phần TMDT Bảo Kim</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_321">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_10">
                                    <clippath id="_ABSTRACT_RENDERER_ID_11">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_11)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_10">
            <legend>
                VNP group</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_10">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_4">
                                    <clippath id="_ABSTRACT_RENDERER_ID_5">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_5)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_2">
            <legend>
                Công ty cổ phần Vật Giá Việt Nam</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_2">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_2">
                                    <clippath id="_ABSTRACT_RENDERER_ID_3">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_3)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_323">
            <legend>
                Bảo Kim - Hồ Chí Minh</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_323">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_14">
                                    <clippath id="_ABSTRACT_RENDERER_ID_15">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_15)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_322">
            <legend>
                Bảo Kim - Hà Nội</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_322">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_12">
                                    <clippath id="_ABSTRACT_RENDERER_ID_13">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_13)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_1">
            <legend>
                Nhanh.vn</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_1">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_0">
                                    <clippath id="_ABSTRACT_RENDERER_ID_1">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_1)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="120" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="79" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="74" width="152" height="87"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="61" width="152" height="100"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="149" width="152" height="12"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="150" width="152" height="11"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="125.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">2,500</text></g>
                                        <g><text text-anchor="end" x="105" y="84.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">5,000</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">7,500</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>5,395</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>6,158</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>794</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>703</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">5.395</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">6.158</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">794</p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">703</p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">88%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">776%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">113%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_366">
            <legend>
                Nhanh.vn Đà Nẵng</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_366">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_20">
                                    <clippath id="_ABSTRACT_RENDERER_ID_21">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_21)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="106" width="152" height="55"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="69" width="152" height="92"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="159.778" width="152"
                                                height="1.7220000000000084" stroke="none"
                                                stroke-width="0" fill="#3366cc"></rect>
                                            <rect x="901" y="161.3032" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1,000</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">2,000</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>908</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>1,516</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>35</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">908</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">1.516</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">35</p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">4</p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">60%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">4331%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">875%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="companyReport companyReport_395">
            <legend>
                Nhanh.vn HCM</legend>
            <div class="chartArea col-md-8" style="min-height: 200px;" id="chartArea_395">
                <div style="position: relative;">
                    <div dir="ltr" style="position: relative; width: 1219px; height: 200px;">
                        <div aria-label="A chart."
                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                            <svg width="1219" height="200" aria-label="A chart."
                                style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_38">
                                    <clippath id="_ABSTRACT_RENDERER_ID_39">
                                        <rect x="119" y="38" width="981" height="124"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1219" height="200" stroke="none"
                                    stroke-width="0" fill="#ffffff"></rect>
                                <g>
                                    <rect x="1114" y="38" width="91" height="14" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                        <rect x="1114" y="38" width="91" height="14"
                                            stroke="none" stroke-width="0" fill-opacity="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="1147" y="49.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Số lượng</text>
                                        </g>
                                        <rect x="1114" y="38" width="28" height="14"
                                            stroke="none" stroke-width="0" fill="#3366cc">
                                        </rect>
                                    </g>
                                </g>
                                <g>
                                    <rect x="119" y="38" width="981" height="124" stroke="none"
                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g
                                        clip-path="url(https://erp.nhanh.vn/crm/report/customercarecompany?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#_ABSTRACT_RENDERER_ID_39)">
                                        <g>
                                            <rect x="119" y="161" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="38" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#cccccc">
                                            </rect>
                                            <rect x="119" y="130" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                            <rect x="119" y="69" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#ebebeb">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="166" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="411" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="656" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                            <rect x="901" y="100" width="152" height="0.5"
                                                stroke="none" stroke-width="0" fill="#3366cc">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect x="119" y="100" width="981" height="1"
                                                stroke="none" stroke-width="0" fill="#333333">
                                            </rect>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g>
                                        <g><text text-anchor="middle" x="242" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Nhận</text></g>
                                        <g><text text-anchor="middle" x="487" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gọi</text></g>
                                        <g><text text-anchor="middle" x="732" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Gặp</text></g>
                                        <g><text text-anchor="middle" x="977" y="182.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#222222">Hợp đồng</text>
                                        </g>
                                        <g><text text-anchor="end" x="105" y="166.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">-1</text></g>
                                        <g><text text-anchor="end" x="105" y="104.9"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">0</text></g>
                                        <g><text text-anchor="end" x="105" y="43.4"
                                                font-family="Arial" font-size="14" stroke="none"
                                                stroke-width="0" fill="#444444">1</text></g>
                                    </g>
                                </g>
                                <g></g>
                            </svg>
                            <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình thức</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nhận</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gọi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Gặp</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Hợp đồng</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        style="display: none; position: absolute; top: 210px; left: 1229px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                        Số lượng</div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-8 control-label">Nhận:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <label class="col-md-8 control-label">Số hợp đồng:</label>
                    <div class="col-md-4">
                        <p class="form-control-static"></p>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <label class="col-md-8 control-label">Nhận/gọi:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gọi/gặp:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                    <label class="col-md-8 control-label">Gặp/HD:</label>
                    <div class="col-md-4">
                        <p class="form-control-static">0%</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <script>
            var pageVariables = {
                "dataSource": {
                    "315": {
                        "company": {
                            "id": "315",
                            "name": "V\u1eadt gi\u00e1 - H\u00e0 N\u1ed9i"
                        },
                        "totalPhoneCall": "44",
                        "totalMeeting": "3",
                        "totalMeetingDistance": "3",
                        "totalTakecare": "57",
                        "totalContract": "81"
                    },
                    "319": {
                        "company": {
                            "id": "319",
                            "name": "V\u1eadt gi\u00e1 - H\u1ed3 Ch\u00ed Minh"
                        },
                        "totalPhoneCall": "6529",
                        "totalMeeting": "189",
                        "totalMeetingDistance": "0",
                        "totalTakecare": "5419",
                        "totalContract": "263"
                    },
                    "393": {
                        "company": {
                            "id": "393",
                            "name": "123dok.com"
                        }
                    },
                    "392": {
                        "company": {
                            "id": "392",
                            "name": "9houz.com"
                        }
                    },
                    "391": {
                        "company": {
                            "id": "391",
                            "name": "123job.vn"
                        },
                        "totalPhoneCall": "2",
                        "totalTakecare": "12",
                        "totalContract": "1"
                    },
                    "390": {
                        "company": {
                            "id": "390",
                            "name": "Cunghocvui.com"
                        }
                    },
                    "365": {
                        "company": {
                            "id": "365",
                            "name": "V\u1eadt gi\u00e1 - H\u1ea3i Ph\u00f2ng"
                        }
                    },
                    "389": {
                        "company": {
                            "id": "389",
                            "name": "123doc.org"
                        }
                    },
                    "387": {
                        "company": {
                            "id": "387",
                            "name": "WeSave"
                        }
                    },
                    "379": {
                        "company": {
                            "id": "379",
                            "name": "Westay"
                        }
                    },
                    "402": {
                        "company": {
                            "id": "402",
                            "name": "C\u00f4ng ty TNHH Ngu\u1ed3n Nh\u00e2n L\u1ef1c Elite Vi\u1ec7t Nam"
                        }
                    },
                    "398": {
                        "company": {
                            "id": "398",
                            "name": "WeLove"
                        }
                    },
                    "384": {
                        "company": {
                            "id": "384",
                            "name": "C\u00f4ng ty c\u1ed5 ph\u1ea7n WeHelp"
                        },
                        "totalTakecare": "2",
                        "totalContract": "6"
                    },
                    "324": {
                        "company": {
                            "id": "324",
                            "name": "C\u00f4ng ty c\u1ed5 ph\u1ea7n Nhanh.vn"
                        }
                    },
                    "321": {
                        "company": {
                            "id": "321",
                            "name": "C\u00f4ng ty c\u1ed5 ph\u1ea7n TMDT B\u1ea3o Kim"
                        }
                    },
                    "10": {
                        "company": {
                            "id": "10",
                            "name": "VNP group"
                        }
                    },
                    "2": {
                        "company": {
                            "id": "2",
                            "name": "C\u00f4ng ty c\u1ed5 ph\u1ea7n V\u1eadt Gi\u00e1 Vi\u1ec7t Nam"
                        }
                    },
                    "323": {
                        "company": {
                            "id": "323",
                            "name": "B\u1ea3o Kim - H\u1ed3 Ch\u00ed Minh"
                        }
                    },
                    "322": {
                        "company": {
                            "id": "322",
                            "name": "B\u1ea3o Kim - H\u00e0 N\u1ed9i"
                        }
                    },
                    "1": {
                        "company": {
                            "id": "1",
                            "name": "Nhanh.vn"
                        },
                        "totalPhoneCall": "6158",
                        "totalMeeting": "794",
                        "totalMeetingDistance": "0",
                        "totalTakecare": "5395",
                        "totalContract": "703"
                    },
                    "366": {
                        "company": {
                            "id": "366",
                            "name": "Nhanh.vn \u0110\u00e0 N\u1eb5ng"
                        },
                        "totalPhoneCall": "1516",
                        "totalMeeting": "35",
                        "totalMeetingDistance": "0",
                        "totalTakecare": "908",
                        "totalContract": "4"
                    },
                    "395": {
                        "company": {
                            "id": "395",
                            "name": "Nhanh.vn HCM"
                        }
                    }
                }
            }
        </script>
    </div>
</div>
    
</div>
    
@endsection

@section('js')
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/loader.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_default_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_graphics_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_ui_module.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_fw_module.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_corechart_module.js') }}"></script>

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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/jsapi') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(2)') }}"></script>
@endsection