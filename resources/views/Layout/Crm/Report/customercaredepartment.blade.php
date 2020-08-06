@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo chăm sóc theo phòng ban')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo chăm sóc theo phòng ban</li>
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
                        <option value="10">VNP group</option>
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
                        <option value="1" selected="selected">------Nhanh.vn</option>
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
        <div class="dgContainer">
            <div style="width: 1874px; display: none;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 82px;">STT</th>
                            <th style="width: 1023px;">Phòng ban</th>
                            <th style="width: 106px;">Nhận</th>
                            <th style="width: 106px;">Gọi</th>
                            <th style="width: 83px;">Gặp</th>
                            <th style="width: 69px;">HD</th>
                            <th style="width: 147px;">Gọi/nhận</th>
                            <th style="width: 131px;">Gặp/gọi</th>
                            <th style="width: 126px;">HD/gặp</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportDepartment" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>STT</th>
                        <th>Phòng ban</th>
                        <th>Nhận</th>
                        <th>Gọi</th>
                        <th>Gặp</th>
                        <th>HD</th>
                        <th>Gọi/nhận</th>
                        <th>Gặp/gọi</th>
                        <th>HD/gặp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>1</td>
                        <td>Kinh doanh</td>
                        <td class="col-align-right">902</td>
                        <td class="col-align-right">1.504</td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">3</td>
                        <td class="col-align-right">167%</td>
                        <td class="col-align-right">0%</td>
                        <td class="col-align-right">150%</td>
                    </tr>
                    <tr class="even">
                        <td>2</td>
                        <td>Các TT Kinh doanh nội bộ <i class="fa fa-caret-right"></i> NV đã
                            nghỉ</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="">
                        <td>3</td>
                        <td>Giám đốc dự án <i class="fa fa-caret-right"></i> Phòng Dịch Vụ Khách
                            Hàng</td>
                        <td class="col-align-right">13</td>
                        <td class="col-align-right">345</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">39</td>
                        <td class="col-align-right">2654%</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td>4</td>
                        <td>Nhanh.vn Hà Nội <i class="fa fa-caret-right"></i> Nhanh HN -
                            KD1_LanNT</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">3</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="">
                        <td>5</td>
                        <td>Nhanh.vn Hà Nội <i class="fa fa-caret-right"></i> Nhanh HN -
                            KD6_LâmVN</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">10</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td>6</td>
                        <td>Nhanh.vn Hà Nội <i class="fa fa-caret-right"></i> Nhanh HN -
                            KD7_ĐiệpNH</td>
                        <td class="col-align-right">6</td>
                        <td class="col-align-right">3</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">17</td>
                        <td class="col-align-right">50%</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Nhanh.vn Hà Nội <i class="fa fa-caret-right"></i> Nhanh HN -
                            KD11_NganLTT</td>
                        <td class="col-align-right">313</td>
                        <td class="col-align-right">432</td>
                        <td class="col-align-right">68</td>
                        <td class="col-align-right">37</td>
                        <td class="col-align-right">138%</td>
                        <td class="col-align-right">16%</td>
                        <td class="col-align-right">54%</td>
                    </tr>
                    <tr class="even">
                        <td>8</td>
                        <td>Nhanh.vn Hà Nội <i class="fa fa-caret-right"></i> Nhanh HN - Phòng
                            KD5_AnhNX</td>
                        <td class="col-align-right">550</td>
                        <td class="col-align-right">962</td>
                        <td class="col-align-right">84</td>
                        <td class="col-align-right">76</td>
                        <td class="col-align-right">175%</td>
                        <td class="col-align-right">9%</td>
                        <td class="col-align-right">90%</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Nhanh.vn Hà Nội <i class="fa fa-caret-right"></i> Nhanh HN - Phòng
                            KD2_TùngNT</td>
                        <td class="col-align-right">564</td>
                        <td class="col-align-right">1.189</td>
                        <td class="col-align-right">189</td>
                        <td class="col-align-right">95</td>
                        <td class="col-align-right">211%</td>
                        <td class="col-align-right">16%</td>
                        <td class="col-align-right">50%</td>
                    </tr>
                    <tr class="even">
                        <td>10</td>
                        <td>Nhanh.vn Hà Nội <i class="fa fa-caret-right"></i> Nhanh HN - Phòng
                            KD3_HuyPV</td>
                        <td class="col-align-right">105</td>
                        <td class="col-align-right">401</td>
                        <td class="col-align-right">46</td>
                        <td class="col-align-right">48</td>
                        <td class="col-align-right">382%</td>
                        <td class="col-align-right">11%</td>
                        <td class="col-align-right">104%</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Nhanh.vn Hà Nội <i class="fa fa-caret-right"></i> Nhanh HN - Phòng
                            KD4_TrườngVV</td>
                        <td class="col-align-right">218</td>
                        <td class="col-align-right">250</td>
                        <td class="col-align-right">71</td>
                        <td class="col-align-right">51</td>
                        <td class="col-align-right">115%</td>
                        <td class="col-align-right">28%</td>
                        <td class="col-align-right">72%</td>
                    </tr>
                    <tr class="even">
                        <td>12</td>
                        <td>Nhanh HCM - Phòng KD1_NgânHTM <i class="fa fa-caret-right"></i>
                            Nhanh HCM - Nhóm KD9_ThưNTA</td>
                        <td class="col-align-right">232</td>
                        <td class="col-align-right">417</td>
                        <td class="col-align-right">16</td>
                        <td class="col-align-right">32</td>
                        <td class="col-align-right">180%</td>
                        <td class="col-align-right">4%</td>
                        <td class="col-align-right">200%</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Nhanh HCM - Phòng KD8_LâmNV <i class="fa fa-caret-right"></i> Nhanh
                            HCM - Ecome Care HCM</td>
                        <td class="col-align-right">176</td>
                        <td class="col-align-right">137</td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">78%</td>
                        <td class="col-align-right">1%</td>
                        <td class="col-align-right">100%</td>
                    </tr>
                    <tr class="even">
                        <td>14</td>
                        <td>Nhanh HCM - Nhóm KD5_LiêmNT <i class="fa fa-caret-right"></i> Nhanh
                            HCM - Nhóm KD4_ThịnhNQG</td>
                        <td class="col-align-right">750</td>
                        <td class="col-align-right">791</td>
                        <td class="col-align-right">18</td>
                        <td class="col-align-right">18</td>
                        <td class="col-align-right">105%</td>
                        <td class="col-align-right">2%</td>
                        <td class="col-align-right">100%</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Kinh doanh Nhanh.vn <i class="fa fa-caret-right"></i> Nhanh.vn Hà
                            Nội</td>
                        <td class="col-align-right">21</td>
                        <td class="col-align-right">14</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">67%</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td>16</td>
                        <td>Nhanh HCM - Nhóm KD9_ThưNTA <i class="fa fa-caret-right"></i> Nhanh
                            HCM - SEO GG MAPS</td>
                        <td class="col-align-right">97</td>
                        <td class="col-align-right">59</td>
                        <td class="col-align-right">4</td>
                        <td class="col-align-right">12</td>
                        <td class="col-align-right">61%</td>
                        <td class="col-align-right">7%</td>
                        <td class="col-align-right">300%</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Nhanh HN - Phòng KD5_AnhNX <i class="fa fa-caret-right"></i> Nhanh
                            HN - KD16_TungNH</td>
                        <td class="col-align-right">279</td>
                        <td class="col-align-right">483</td>
                        <td class="col-align-right">56</td>
                        <td class="col-align-right">35</td>
                        <td class="col-align-right">173%</td>
                        <td class="col-align-right">12%</td>
                        <td class="col-align-right">63%</td>
                    </tr>
                    <tr class="even">
                        <td>18</td>
                        <td>Nhanh HN - Phòng KD5_AnhNX <i class="fa fa-caret-right"></i> Nhanh
                            HN - ThanhTV_Phát triển đối tác</td>
                        <td class="col-align-right">121</td>
                        <td class="col-align-right">59</td>
                        <td class="col-align-right">8</td>
                        <td class="col-align-right">20</td>
                        <td class="col-align-right">49%</td>
                        <td class="col-align-right">14%</td>
                        <td class="col-align-right">250%</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Nhanh HN - Phòng KD5_AnhNX <i class="fa fa-caret-right"></i> Nhanh
                            HN - KD19 - PhoDG</td>
                        <td class="col-align-right">46</td>
                        <td class="col-align-right">59</td>
                        <td class="col-align-right">4</td>
                        <td class="col-align-right">7</td>
                        <td class="col-align-right">128%</td>
                        <td class="col-align-right">7%</td>
                        <td class="col-align-right">175%</td>
                    </tr>
                    <tr class="even">
                        <td>20</td>
                        <td>Nhanh HN - Phòng KD4_TrườngVV <i class="fa fa-caret-right"></i>
                            Nhanh HN - KD10_ThanhPT</td>
                        <td class="col-align-right">322</td>
                        <td class="col-align-right">545</td>
                        <td class="col-align-right">64</td>
                        <td class="col-align-right">23</td>
                        <td class="col-align-right">169%</td>
                        <td class="col-align-right">12%</td>
                        <td class="col-align-right">36%</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Nhanh HN - Phòng KD4_TrườngVV <i class="fa fa-caret-right"></i>
                            Nhanh HN - KD8_CôngND</td>
                        <td class="col-align-right">332</td>
                        <td class="col-align-right">283</td>
                        <td class="col-align-right">47</td>
                        <td class="col-align-right">28</td>
                        <td class="col-align-right">85%</td>
                        <td class="col-align-right">17%</td>
                        <td class="col-align-right">60%</td>
                    </tr>
                    <tr class="even">
                        <td>22</td>
                        <td>Nhanh HN - Phòng KD4_TrườngVV <i class="fa fa-caret-right"></i>
                            Nhanh HN - KD17_TùngNT</td>
                        <td class="col-align-right">92</td>
                        <td class="col-align-right">305</td>
                        <td class="col-align-right">85</td>
                        <td class="col-align-right">26</td>
                        <td class="col-align-right">332%</td>
                        <td class="col-align-right">28%</td>
                        <td class="col-align-right">31%</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Khối văn phòng <i class="fa fa-caret-right"></i> Giám đốc dự án</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td>24</td>
                        <td>Khối văn phòng <i class="fa fa-caret-right"></i> Chăm sóc đơn hàng -
                            HươngĐTM</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">10</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Khối văn phòng <i class="fa fa-caret-right"></i> Chăm sóc khách hàng
                            - UyênTL</td>
                        <td class="col-align-right">1.331</td>
                        <td class="col-align-right">33</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">46</td>
                        <td class="col-align-right">2%</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td>26</td>
                        <td>Khối văn phòng <i class="fa fa-caret-right"></i> Phòng nhân sự -
                            Nhanh.vn</td>
                        <td class="col-align-right">3</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">6</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-right">281</td>
                        <td class="col-align-right">674</td>
                        <td class="col-align-right">31</td>
                        <td class="col-align-right">33</td>
                        <td class="col-align-right">240%</td>
                        <td class="col-align-right">5%</td>
                        <td class="col-align-right">106%</td>
                    </tr>
                    <tr class="even">
                        <td>28</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD8_LâmNV</td>
                        <td class="col-align-right">450</td>
                        <td class="col-align-right">557</td>
                        <td class="col-align-right">24</td>
                        <td class="col-align-right">16</td>
                        <td class="col-align-right">124%</td>
                        <td class="col-align-right">4%</td>
                        <td class="col-align-right">67%</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD3_NgânTK</td>
                        <td class="col-align-right">811</td>
                        <td class="col-align-right">832</td>
                        <td class="col-align-right">23</td>
                        <td class="col-align-right">23</td>
                        <td class="col-align-right">103%</td>
                        <td class="col-align-right">3%</td>
                        <td class="col-align-right">100%</td>
                    </tr>
                    <tr class="even">
                        <td>30</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD5_LiêmNT</td>
                        <td class="col-align-right">403</td>
                        <td class="col-align-right">893</td>
                        <td class="col-align-right">36</td>
                        <td class="col-align-right">16</td>
                        <td class="col-align-right">222%</td>
                        <td class="col-align-right">4%</td>
                        <td class="col-align-right">44%</td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale
                            Marketing</td>
                        <td class="col-align-right">1.905</td>
                        <td class="col-align-right">1.894</td>
                        <td class="col-align-right">24</td>
                        <td class="col-align-right">25</td>
                        <td class="col-align-right">99%</td>
                        <td class="col-align-right">1%</td>
                        <td class="col-align-right">104%</td>
                    </tr>
                    <tr class="even">
                        <td>32</td>
                        <td>Khối sale dịch vụ mkt <i class="fa fa-caret-right"></i> Marketing
                        </td>
                        <td class="col-align-right">33</td>
                        <td class="col-align-right">12</td>
                        <td class="col-align-right">36</td>
                        <td class="col-align-right">9</td>
                        <td class="col-align-right">36%</td>
                        <td class="col-align-right">300%</td>
                        <td class="col-align-right">25%</td>
                    </tr>
                    <tr>
                        <td>33</td>
                        <td>Khối sale dịch vụ mkt <i class="fa fa-caret-right"></i> Sale
                            Marketing</td>
                        <td class="col-align-right">596</td>
                        <td class="col-align-right">571</td>
                        <td class="col-align-right">15</td>
                        <td class="col-align-right">25</td>
                        <td class="col-align-right">96%</td>
                        <td class="col-align-right">3%</td>
                        <td class="col-align-right">167%</td>
                    </tr>
                    <tr class="even">
                        <td>34</td>
                        <td>Khối sale dịch vụ mkt <i class="fa fa-caret-right"></i> Ecomcare
                        </td>
                        <td class="col-align-right">377</td>
                        <td class="col-align-right">198</td>
                        <td class="col-align-right">12</td>
                        <td class="col-align-right">11</td>
                        <td class="col-align-right">53%</td>
                        <td class="col-align-right">6%</td>
                        <td class="col-align-right">92%</td>
                    </tr>
                    <tr>
                        <td>35</td>
                        <td>Khối sale dịch vụ mkt <i class="fa fa-caret-right"></i> Phòng dịch
                            vụ SEO GG MAPS</td>
                        <td class="col-align-right">68</td>
                        <td class="col-align-right">14</td>
                        <td class="col-align-right">8</td>
                        <td class="col-align-right">82</td>
                        <td class="col-align-right">21%</td>
                        <td class="col-align-right">57%</td>
                        <td class="col-align-right">1025%</td>
                    </tr>
                    <tr class="even">
                        <td>36</td>
                        <td>Nhanh HCM - Sale Marketing <i class="fa fa-caret-right"></i> Nhanh
                            HCM - Nhóm KD2_DuyLQ</td>
                        <td class="col-align-right">255</td>
                        <td class="col-align-right">272</td>
                        <td class="col-align-right">9</td>
                        <td class="col-align-right">11</td>
                        <td class="col-align-right">107%</td>
                        <td class="col-align-right">3%</td>
                        <td class="col-align-right">122%</td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
    </div>
<div>
    
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