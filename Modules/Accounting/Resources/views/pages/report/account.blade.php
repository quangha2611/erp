@extends('accounting::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/accounting/report/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Báo cáo theo tài khoản kế toán')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo tài khoản kế toán</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                role="form" id="crmReportEmployeesFilter">
                <div class="col-md-10 lolify-default">

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
                            <option value="402">--Công ty TNHH Nguồn Nhân Lực Elite Việt Nam
                            </option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCrmContact"
                            class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">
                    <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="Chức năng, thao tác">
                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                            aria-expanded="false" data-toggle="dropdown">
                            <span class="fa fa-cog"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a
                                    href="https://erp.nhanh.vn/accounting/report/account?companyId=10&amp;daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;submit=L%E1%BB%8Dc&amp;format=excel"><i
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
            <div style="width: 1556px; display: none;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 50px;">STT</th>
                            <th rowspan="2" style="width: 278px;">Mã tài khoản</th>
                            <th rowspan="2" style="width: 433px;">Tên tài khoản</th>
                            <th colspan="2" style="width: 341px;">Số dư đầu kỳ</th>
                            <th colspan="2" style="width: 293px;">Phát sinh trong kỳ</th>
                            <th colspan="1" style="width: 160px;"></th>
                        </tr>
                        <tr>
                            <th style="width: 171px;">Ghi nợ</th>
                            <th style="width: 170px;">Ghi có</th>
                            <th style="width: 146px;">Ghi nợ</th>
                            <th style="width: 147px;">Ghi có</th>
                            <th style="width: 160px;">Dư nợ cuối kỳ</th>
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
                        <th rowspan="2">STT</th>
                        <th rowspan="2">Mã tài khoản</th>
                        <th rowspan="2">Tên tài khoản</th>
                        <th colspan="2">Số dư đầu kỳ</th>
                        <th colspan="2">Phát sinh trong kỳ</th>
                        <th colspan="1"></th>
                    </tr>
                    <tr class="">
                        <th>Ghi nợ</th>
                        <th>Ghi có</th>
                        <th>Ghi nợ</th>
                        <th>Ghi có</th>
                        <th>Dư nợ cuối kỳ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even">
                        <td>1</td>
                        <td style="padding-left: 10px;">112</td>
                        <td style="padding-left: 10px;">Tiền chuyển khoản</td>
                        <td class="colNumber">327.477.030</td>
                        <td class="colNumber">1.417.298.105</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(1.089.821.075)</span></td>
                    </tr>
                    <tr class="h">
                        <td>2</td>
                        <td style="padding-left: 50px;">1123234</td>
                        <td style="padding-left: 50px;">Khối KD độc lập (CK)</td>
                        <td class="colNumber">46.685.679</td>
                        <td class="colNumber">344.123.700</td>
                        <td class="colNumber">90.960.480</td>
                        <td class="colNumber">60.737.000</td>
                        <td class="colNumber"><span class="text-danger">(267.214.541)</span></td>
                    </tr>
                    <tr class="even">
                        <td>3</td>
                        <td style="padding-left: 50px;">112234</td>
                        <td style="padding-left: 50px;">Welove (Chuyển khoản)</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success"></span></td>
                    </tr>
                    <tr class="">
                        <td>4</td>
                        <td style="padding-left: 50px;">11245</td>
                        <td style="padding-left: 50px;">Nhanh HCM(Phần cứng)</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success"></span></td>
                    </tr>
                    <tr class="even">
                        <td>5</td>
                        <td style="padding-left: 50px;">11123</td>
                        <td style="padding-left: 50px;">Nhanh HN(Phần cứng)</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">8.518.000</td>
                        <td class="colNumber">2.100.000</td>
                        <td class="colNumber">1.746.000</td>
                        <td class="colNumber"><span class="text-danger">(8.164.000)</span></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td style="padding-left: 50px;">111234</td>
                        <td style="padding-left: 50px;">Bizshare HCM</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">89.200.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">9.900.000</td>
                        <td class="colNumber"><span class="text-danger">(99.100.000)</span></td>
                    </tr>
                    <tr class="even">
                        <td>7</td>
                        <td style="padding-left: 50px;">1114</td>
                        <td style="padding-left: 50px;">WeHelp</td>
                        <td class="colNumber">19.587.987</td>
                        <td class="colNumber">809.204.482</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">64.240.000</td>
                        <td class="colNumber"><span class="text-danger">(853.856.495)</span></td>
                    </tr>
                    <tr class="">
                        <td>8</td>
                        <td style="padding-left: 50px;">112112</td>
                        <td style="padding-left: 50px;">9houz (HCM)</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">8.910.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(8.910.000)</span></td>
                    </tr>
                    <tr class="even">
                        <td>9</td>
                        <td style="padding-left: 50px;">11212</td>
                        <td style="padding-left: 50px;">Nhanh Đà Nẵng(CK)</td>
                        <td class="colNumber">28.740.730</td>
                        <td class="colNumber">147.800.000</td>
                        <td class="colNumber">2.570.779</td>
                        <td class="colNumber">5.400.000</td>
                        <td class="colNumber"><span class="text-danger">(121.888.491)</span></td>
                    </tr>
                    <tr class="">
                        <td>10</td>
                        <td style="padding-left: 50px;">11222</td>
                        <td style="padding-left: 50px;">Nhanh HN 2019 (Chuyển khoản)</td>
                        <td class="colNumber">27.231.610.879</td>
                        <td class="colNumber">17.661.836.510</td>
                        <td class="colNumber">3.275.189.625</td>
                        <td class="colNumber">2.218.810.217</td>
                        <td class="colNumber"><span class="text-success">10.626.153.777</span></td>
                    </tr>
                    <tr class="even">
                        <td>11</td>
                        <td style="padding-left: 50px;">11221</td>
                        <td style="padding-left: 50px;">Nhanh HCM 2019 (Chuyển khoản)</td>
                        <td class="colNumber">3.414.652.129</td>
                        <td class="colNumber">4.748.387.412</td>
                        <td class="colNumber">403.938.809</td>
                        <td class="colNumber">775.406.700</td>
                        <td class="colNumber"><span class="text-danger">(1.705.203.174)</span></td>
                    </tr>
                    <tr class="">
                        <td>12</td>
                        <td style="padding-left: 50px;">111219</td>
                        <td style="padding-left: 50px;">9houz</td>
                        <td class="colNumber">510.205.000</td>
                        <td class="colNumber">633.731.178</td>
                        <td class="colNumber">17.600.000</td>
                        <td class="colNumber">17.461.504</td>
                        <td class="colNumber"><span class="text-danger">(123.387.682)</span></td>
                    </tr>
                    <tr class="even">
                        <td>13</td>
                        <td style="padding-left: 50px;">11215</td>
                        <td style="padding-left: 50px;">KyNguyenSo</td>
                        <td class="colNumber">408.043.977</td>
                        <td class="colNumber">465.260.092</td>
                        <td class="colNumber">4.000.000</td>
                        <td class="colNumber">800.000</td>
                        <td class="colNumber"><span class="text-danger">(54.016.115)</span></td>
                    </tr>
                    <tr class="">
                        <td>14</td>
                        <td style="padding-left: 50px;">11218</td>
                        <td style="padding-left: 50px;">Bizshare</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">1.324.331.371</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(1.324.331.371)</span></td>
                    </tr>
                    <tr class="even">
                        <td>15</td>
                        <td style="padding-left: 50px;">1128</td>
                        <td style="padding-left: 50px;">Wesave Hồ Chí Minh</td>
                        <td class="colNumber">51.882.602</td>
                        <td class="colNumber">251.102.400</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(199.219.798)</span></td>
                    </tr>
                    <tr class="">
                        <td>16</td>
                        <td style="padding-left: 50px;">11210</td>
                        <td style="padding-left: 50px;">Vchat</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">1.450.330.600</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">81.253.000</td>
                        <td class="colNumber"><span class="text-danger">(1.531.583.600)</span></td>
                    </tr>
                    <tr class="even">
                        <td>17</td>
                        <td style="padding-left: 50px;">1129</td>
                        <td style="padding-left: 50px;">WeMarry</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">245.841.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(245.841.000)</span></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td style="padding-left: 50px;">1118</td>
                        <td style="padding-left: 50px;">IKI</td>
                        <td class="colNumber">288.639.447</td>
                        <td class="colNumber">188.640.447</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success">99.999.000</span></td>
                    </tr>
                    <tr class="even">
                        <td>19</td>
                        <td style="padding-left: 50px;">1127</td>
                        <td style="padding-left: 50px;">WeSave Hà Nội</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">2.317.017.720</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(2.317.017.720)</span></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td style="padding-left: 50px;">11121</td>
                        <td style="padding-left: 50px;">Vật Giá Đà Nẵng</td>
                        <td class="colNumber">295.616.739</td>
                        <td class="colNumber">454.034.600</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(158.417.861)</span></td>
                    </tr>
                    <tr class="even">
                        <td>21</td>
                        <td style="padding-left: 50px;">1119</td>
                        <td style="padding-left: 50px;">Elite</td>
                        <td class="colNumber">405.948.589</td>
                        <td class="colNumber">392.223.338</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">1.000.000</td>
                        <td class="colNumber"><span class="text-success">12.725.251</span></td>
                    </tr>
                    <tr class="">
                        <td>22</td>
                        <td style="padding-left: 50px;">1126</td>
                        <td style="padding-left: 50px;">Doanh thu phần cứng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">1.274.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(1.274.000)</span></td>
                    </tr>
                    <tr class="even">
                        <td>23</td>
                        <td style="padding-left: 50px;">1125</td>
                        <td style="padding-left: 50px;">Vận chuyển Nhanh</td>
                        <td class="colNumber">1.514.512.465.986</td>
                        <td class="colNumber">1.439.472.301.118</td>
                        <td class="colNumber">97.025.694.574</td>
                        <td class="colNumber">95.610.057.924</td>
                        <td class="colNumber"><span class="text-success">76.455.801.518</span></td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td style="padding-left: 50px;">1124</td>
                        <td style="padding-left: 50px;">Doanh thu VC Nhanh</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">1.266.762.453</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(1.266.762.453)</span></td>
                    </tr>
                    <tr class="even">
                        <td>25</td>
                        <td style="padding-left: 50px;">1123</td>
                        <td style="padding-left: 50px;">Nhanh HCM</td>
                        <td class="colNumber">1.188.422.562</td>
                        <td class="colNumber">9.729.522.716</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(8.541.100.154)</span></td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td style="padding-left: 50px;">1122</td>
                        <td style="padding-left: 50px;">Nhanh HN</td>
                        <td class="colNumber">882.551.302</td>
                        <td class="colNumber">25.421.987.394</td>
                        <td class="colNumber">8.980.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(24.530.456.092)</span></td>
                    </tr>
                    <tr class="even">
                        <td>27</td>
                        <td style="padding-left: 50px;">1121</td>
                        <td style="padding-left: 50px;">Cty cổ phần Vật Giá VN</td>
                        <td class="colNumber">312.801.739</td>
                        <td class="colNumber">6.419.607.200</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">21.921.000</td>
                        <td class="colNumber"><span class="text-danger">(6.128.726.461)</span></td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td style="padding-left: 100px;">11212</td>
                        <td style="padding-left: 100px;">Vật Giá HCM</td>
                        <td class="colNumber">20.569.644.013</td>
                        <td class="colNumber">21.464.926.386</td>
                        <td class="colNumber">30.967.000</td>
                        <td class="colNumber">92.800.000</td>
                        <td class="colNumber"><span class="text-danger">(957.115.373)</span></td>
                    </tr>
                    <tr class="even">
                        <td>29</td>
                        <td style="padding-left: 100px;">11211</td>
                        <td style="padding-left: 100px;">Vật Giá HN</td>
                        <td class="colNumber">12.859.373.112</td>
                        <td class="colNumber">39.052.213.689</td>
                        <td class="colNumber">542.431.396</td>
                        <td class="colNumber">475.525.000</td>
                        <td class="colNumber"><span class="text-danger">(26.125.934.181)</span></td>
                    </tr>
                    <tr class="">
                        <td>30</td>
                        <td style="padding-left: 10px;">111</td>
                        <td style="padding-left: 10px;">Tiền mặt</td>
                        <td class="colNumber">11.201.700</td>
                        <td class="colNumber">1.500.000</td>
                        <td class="colNumber">250.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success">9.951.700</span></td>
                    </tr>
                    <tr class="even">
                        <td>31</td>
                        <td style="padding-left: 50px;">111123</td>
                        <td style="padding-left: 50px;">Khối KD độc lập (TM)</td>
                        <td class="colNumber">291.563.895</td>
                        <td class="colNumber">389.265.459</td>
                        <td class="colNumber">92.937.713</td>
                        <td class="colNumber">78.241.000</td>
                        <td class="colNumber"><span class="text-danger">(83.004.851)</span></td>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td style="padding-left: 50px;">11113</td>
                        <td style="padding-left: 50px;">Welove (Tiền mặt)</td>
                        <td class="colNumber">59.550.000</td>
                        <td class="colNumber">32.900.937</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success">26.649.063</span></td>
                    </tr>
                    <tr class="even">
                        <td>33</td>
                        <td style="padding-left: 50px;">111145</td>
                        <td style="padding-left: 50px;">Nhanh HCM(Phần cứng)</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">429.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(429.000)</span></td>
                    </tr>
                    <tr>
                        <td>34</td>
                        <td style="padding-left: 50px;">1111.23</td>
                        <td style="padding-left: 50px;">Nhanh HN(Phần cứng)</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">27.480.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">13.930.000</td>
                        <td class="colNumber"><span class="text-danger">(41.410.000)</span></td>
                    </tr>
                    <tr class="even">
                        <td>35</td>
                        <td style="padding-left: 50px;">111134</td>
                        <td style="padding-left: 50px;">Bizshare HCM</td>
                        <td class="colNumber">10.011.000</td>
                        <td class="colNumber">11.100.000</td>
                        <td class="colNumber">1.089.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success"></span></td>
                    </tr>
                    <tr>
                        <td>36</td>
                        <td style="padding-left: 50px;">111.19</td>
                        <td style="padding-left: 50px;">WeHelp</td>
                        <td class="colNumber">1.840.000</td>
                        <td class="colNumber">56.653.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(54.813.000)</span></td>
                    </tr>
                    <tr class="even">
                        <td>37</td>
                        <td style="padding-left: 50px;">11112</td>
                        <td style="padding-left: 50px;">9houz (HCM)</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success"></span></td>
                    </tr>
                    <tr>
                        <td>38</td>
                        <td style="padding-left: 50px;">111121</td>
                        <td style="padding-left: 50px;">Nhanh Đà Nẵng (TM)</td>
                        <td class="colNumber">36.535.120</td>
                        <td class="colNumber">133.630.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">7.200.000</td>
                        <td class="colNumber"><span class="text-danger">(104.294.880)</span></td>
                    </tr>
                    <tr class="even">
                        <td>39</td>
                        <td style="padding-left: 50px;">11112</td>
                        <td style="padding-left: 50px;">Nhanh HN 2019 (Tiền mặt)</td>
                        <td class="colNumber">4.962.415.801</td>
                        <td class="colNumber">2.060.262.000</td>
                        <td class="colNumber">394.683.650</td>
                        <td class="colNumber">153.443.000</td>
                        <td class="colNumber"><span class="text-success">3.143.394.451</span></td>
                    </tr>
                    <tr class="">
                        <td>40</td>
                        <td style="padding-left: 50px;">11131</td>
                        <td style="padding-left: 50px;">Nhanh HCM 2019 (Tiền mặt)</td>
                        <td class="colNumber">674.355.971</td>
                        <td class="colNumber">762.417.000</td>
                        <td class="colNumber">116.867.772</td>
                        <td class="colNumber">75.134.000</td>
                        <td class="colNumber"><span class="text-danger">(46.327.257)</span></td>
                    </tr>
                    <tr class="even">
                        <td>41</td>
                        <td style="padding-left: 50px;">11119</td>
                        <td style="padding-left: 50px;">9houz</td>
                        <td class="colNumber">50.499.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success">50.499.000</span></td>
                    </tr>
                    <tr>
                        <td>42</td>
                        <td style="padding-left: 50px;">11115</td>
                        <td style="padding-left: 50px;">KyNguyenSo</td>
                        <td class="colNumber">61.973.750</td>
                        <td class="colNumber">34.293.040</td>
                        <td class="colNumber">7.500.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success">35.180.710</span></td>
                    </tr>
                    <tr class="even">
                        <td>43</td>
                        <td style="padding-left: 50px;">11118</td>
                        <td style="padding-left: 50px;">Bizshare</td>
                        <td class="colNumber">43.044.475</td>
                        <td class="colNumber">93.200.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(50.155.525)</span></td>
                    </tr>
                    <tr>
                        <td>44</td>
                        <td style="padding-left: 50px;">1116</td>
                        <td style="padding-left: 50px;">Wesave Hồ Chí Minh</td>
                        <td class="colNumber">122.300.448</td>
                        <td class="colNumber">137.032.448</td>
                        <td class="colNumber">14.732.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success"></span></td>
                    </tr>
                    <tr class="even">
                        <td>45</td>
                        <td style="padding-left: 50px;">11110</td>
                        <td style="padding-left: 50px;">Vchat</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">11.586.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(11.586.000)</span></td>
                    </tr>
                    <tr class="">
                        <td>46</td>
                        <td style="padding-left: 50px;">1119</td>
                        <td style="padding-left: 50px;">WeMarry</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">228.496.200</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(228.496.200)</span></td>
                    </tr>
                    <tr class="even">
                        <td>47</td>
                        <td style="padding-left: 50px;">1128</td>
                        <td style="padding-left: 50px;">IKI</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success"></span></td>
                    </tr>
                    <tr class="">
                        <td>48</td>
                        <td style="padding-left: 50px;">11114</td>
                        <td style="padding-left: 50px;">Amall</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success"></span></td>
                    </tr>
                    <tr class="even">
                        <td>49</td>
                        <td style="padding-left: 50px;">11113</td>
                        <td style="padding-left: 50px;">123Study</td>
                        <td class="colNumber">26.881.291</td>
                        <td class="colNumber">49.453.761</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(22.572.470)</span></td>
                    </tr>
                    <tr class="">
                        <td>50</td>
                        <td style="padding-left: 50px;">1115</td>
                        <td style="padding-left: 50px;">WeSave Hà Nội</td>
                        <td class="colNumber">4.099.900</td>
                        <td class="colNumber">2.124.890.160</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(2.120.790.260)</span></td>
                    </tr>
                    <tr class="even">
                        <td>51</td>
                        <td style="padding-left: 50px;">11234</td>
                        <td style="padding-left: 50px;">WeStay</td>
                        <td class="colNumber">7.899.103.960</td>
                        <td class="colNumber">7.477.948.590</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success">421.155.370</span></td>
                    </tr>
                    <tr class="">
                        <td>52</td>
                        <td style="padding-left: 50px;">11120</td>
                        <td style="padding-left: 50px;">Vật giá Đà Nẵng</td>
                        <td class="colNumber">64.319.000</td>
                        <td class="colNumber">501.648.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(437.329.000)</span></td>
                    </tr>
                    <tr class="even">
                        <td>53</td>
                        <td style="padding-left: 50px;">11118</td>
                        <td style="padding-left: 50px;">Elite</td>
                        <td class="colNumber">6.250.000</td>
                        <td class="colNumber">2.880.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">7.500.000</td>
                        <td class="colNumber"><span class="text-danger">(4.130.000)</span></td>
                    </tr>
                    <tr>
                        <td>54</td>
                        <td style="padding-left: 50px;">1114</td>
                        <td style="padding-left: 50px;">Doanh thu phần cứng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-success"></span></td>
                    </tr>
                    <tr class="even">
                        <td>55</td>
                        <td style="padding-left: 50px;">1113</td>
                        <td style="padding-left: 50px;">Nhanh HCM</td>
                        <td class="colNumber">2.744.458.777</td>
                        <td class="colNumber">4.296.735.150</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(1.552.276.373)</span></td>
                    </tr>
                    <tr>
                        <td>56</td>
                        <td style="padding-left: 50px;">1112</td>
                        <td style="padding-left: 50px;">Nhanh HN</td>
                        <td class="colNumber">440.065.134</td>
                        <td class="colNumber">12.472.957.128</td>
                        <td class="colNumber">6.000.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(12.026.891.994)</span></td>
                    </tr>
                    <tr class="even">
                        <td>57</td>
                        <td style="padding-left: 50px;">1111</td>
                        <td style="padding-left: 50px;">Cty cổ phần Vật Giá VN</td>
                        <td class="colNumber">3.186.500</td>
                        <td class="colNumber">7.048.409.079</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(7.045.222.579)</span></td>
                    </tr>
                    <tr>
                        <td>58</td>
                        <td style="padding-left: 100px;">11111</td>
                        <td style="padding-left: 100px;">Vật Giá HCM</td>
                        <td class="colNumber">12.814.050.778</td>
                        <td class="colNumber">43.473.170.628</td>
                        <td class="colNumber">75.500.630</td>
                        <td class="colNumber">53.444.000</td>
                        <td class="colNumber"><span class="text-danger">(30.637.063.220)</span></td>
                    </tr>
                    <tr class="even">
                        <td>59</td>
                        <td style="padding-left: 100px;">11112</td>
                        <td style="padding-left: 100px;">Vật Giá HN</td>
                        <td class="colNumber">114.245.200</td>
                        <td class="colNumber">34.445.620.168</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">8.628.000</td>
                        <td class="colNumber"><span class="text-danger">(34.340.002.968)</span></td>
                    </tr>
                    <tr>
                        <td>60</td>
                        <td style="padding-left: 150px;">111121</td>
                        <td style="padding-left: 150px;">Quỹ Maketing(VG Hà Nội)</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">17.250.000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><span class="text-danger">(17.250.000)</span></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
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
<script type="text/javascript" src="{{ asset('/js/accounting/report/saved_resource') }}"></script>
<script type="text/javascript" src="{{ asset('/js/accounting/report/getfirebaseconfig') }}"></script>
<script type="text/javascript" src="{{ asset('/js/accounting/report/app.js') }}"></script>
<script>
    CKEDITOR.env.isCompatible = true;
</script>
<script type="text/javascript" src="{{ asset('/js/accounting/report/saved_resource(1)') }}"></script>
<script type="text/javascript" src="{{ asset('/js/accounting/report/saved_resource(2)') }}"></script>
<script type="text/javascript" src="{{ asset('/js/accounting/report/saved_resource(3)') }}"></script>


@endsection
