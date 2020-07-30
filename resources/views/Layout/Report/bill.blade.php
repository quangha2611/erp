@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo xuất quản lý xuất hóa đơn theo ngày tháng')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo quản lý xuất hóa đơn theo ngày tháng</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportMettingVgFilter" class="form-inline lolify"
                role="form" id="crmReportMettingVgFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty nhân viên -</option>
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
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="q" placeholder="Tên hoặc mã người xuất" id="q"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCrmContact"
                            class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">


                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div><a style="float: right;" id="exportExcel"
            href="https://erp.nhanh.vn/crm/report/bill#"><button
                class="btn btn-primary btn-sm "><i class="fa fa-download fa-lg"></i>Xuất
                excel</button></a>
        <div class="tab-content col-md-12">
            <div class="dgContainer">
                <div style="display: none; width: 1874px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th rowspan="2" style="width: 325px;">Ngày xuất</th>
                                <th colspan="2" style="width: 712px;">Tổng số lượng hóa đơn</th>
                                <th colspan="2" style="width: 836px;">Tổng số Giá trị</th>
                            </tr>
                            <tr>
                                <th style="width: 283px;">Cá nhân</th>
                                <th style="width: 429px;">Doanh nghiệp</th>
                                <th style="width: 406px;">Cá nhân</th>
                                <th style="width: 430px;">Doanh nghiệp</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmReportBill" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th rowspan="2">Ngày xuất</th>
                            <th colspan="2">Tổng số lượng hóa đơn</th>
                            <th colspan="2">Tổng số Giá trị</th>
                        </tr>
                        <tr class="">
                            <th>Cá nhân</th>
                            <th>Doanh nghiệp</th>
                            <th>Cá nhân</th>
                            <th>Doanh nghiệp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even">
                            <td class="colNumber"><b>01/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="">
                            <td class="colNumber"><b>02/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=02%2F07%2F2020%20-%2002%2F07%2F2020&amp;companyId=">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=02%2F07%2F2020%20-%2002%2F07%2F2020&amp;companyId=">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=02%2F07%2F2020%20-%2002%2F07%2F2020&amp;companyId=">37,429,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=02%2F07%2F2020%20-%2002%2F07%2F2020&amp;companyId=">19,800,000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>03/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=03%2F07%2F2020%20-%2003%2F07%2F2020&amp;companyId=">20</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=03%2F07%2F2020%20-%2003%2F07%2F2020&amp;companyId=">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=03%2F07%2F2020%20-%2003%2F07%2F2020&amp;companyId=">79,975,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=03%2F07%2F2020%20-%2003%2F07%2F2020&amp;companyId=">31,200,000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>04/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=04%2F07%2F2020%20-%2004%2F07%2F2020&amp;companyId=">6</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=04%2F07%2F2020%20-%2004%2F07%2F2020&amp;companyId=">144,750</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>05/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>06/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=06%2F07%2F2020%20-%2006%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=06%2F07%2F2020%20-%2006%2F07%2F2020&amp;companyId=">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=06%2F07%2F2020%20-%2006%2F07%2F2020&amp;companyId=">3,600,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=06%2F07%2F2020%20-%2006%2F07%2F2020&amp;companyId=">8,360,000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>07/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=07%2F07%2F2020%20-%2007%2F07%2F2020&amp;companyId=">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=07%2F07%2F2020%20-%2007%2F07%2F2020&amp;companyId=">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=07%2F07%2F2020%20-%2007%2F07%2F2020&amp;companyId=">49,050,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=07%2F07%2F2020%20-%2007%2F07%2F2020&amp;companyId=">95,510,000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>08/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=08%2F07%2F2020%20-%2008%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=08%2F07%2F2020%20-%2008%2F07%2F2020&amp;companyId=">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=08%2F07%2F2020%20-%2008%2F07%2F2020&amp;companyId=">3,000,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=08%2F07%2F2020%20-%2008%2F07%2F2020&amp;companyId=">28,600,000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>09/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=09%2F07%2F2020%20-%2009%2F07%2F2020&amp;companyId=">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=09%2F07%2F2020%20-%2009%2F07%2F2020&amp;companyId=">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=09%2F07%2F2020%20-%2009%2F07%2F2020&amp;companyId=">700,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=09%2F07%2F2020%20-%2009%2F07%2F2020&amp;companyId=">45,936,000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>10/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=10%2F07%2F2020%20-%2010%2F07%2F2020&amp;companyId=">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=10%2F07%2F2020%20-%2010%2F07%2F2020&amp;companyId=">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=10%2F07%2F2020%20-%2010%2F07%2F2020&amp;companyId=">42,650,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=10%2F07%2F2020%20-%2010%2F07%2F2020&amp;companyId=">57,147,800</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>11/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=11%2F07%2F2020%20-%2011%2F07%2F2020&amp;companyId=">8</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=11%2F07%2F2020%20-%2011%2F07%2F2020&amp;companyId=">180,000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>12/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>13/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=13%2F07%2F2020%20-%2013%2F07%2F2020&amp;companyId=">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=13%2F07%2F2020%20-%2013%2F07%2F2020&amp;companyId=">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=13%2F07%2F2020%20-%2013%2F07%2F2020&amp;companyId=">4,910,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=13%2F07%2F2020%20-%2013%2F07%2F2020&amp;companyId=">66,332,000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>14/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=14%2F07%2F2020%20-%2014%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=14%2F07%2F2020%20-%2014%2F07%2F2020&amp;companyId=">9,900,000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>15/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=15%2F07%2F2020%20-%2015%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=15%2F07%2F2020%20-%2015%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=15%2F07%2F2020%20-%2015%2F07%2F2020&amp;companyId=">5,500,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=15%2F07%2F2020%20-%2015%2F07%2F2020&amp;companyId=">1,595,000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>16/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=16%2F07%2F2020%20-%2016%2F07%2F2020&amp;companyId=">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=16%2F07%2F2020%20-%2016%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=16%2F07%2F2020%20-%2016%2F07%2F2020&amp;companyId=">400,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=16%2F07%2F2020%20-%2016%2F07%2F2020&amp;companyId=">4,000,000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>17/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=17%2F07%2F2020%20-%2017%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=17%2F07%2F2020%20-%2017%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=17%2F07%2F2020%20-%2017%2F07%2F2020&amp;companyId=">300,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=17%2F07%2F2020%20-%2017%2F07%2F2020&amp;companyId=">3,960,000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>18/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=18%2F07%2F2020%20-%2018%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=18%2F07%2F2020%20-%2018%2F07%2F2020&amp;companyId=">26,250</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>19/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>20/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=20%2F07%2F2020%20-%2020%2F07%2F2020&amp;companyId=">4</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=20%2F07%2F2020%20-%2020%2F07%2F2020&amp;companyId=">23,310,000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>21/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=21%2F07%2F2020%20-%2021%2F07%2F2020&amp;companyId=">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=21%2F07%2F2020%20-%2021%2F07%2F2020&amp;companyId=">21,684,000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>22/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=22%2F07%2F2020%20-%2022%2F07%2F2020&amp;companyId=">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=22%2F07%2F2020%20-%2022%2F07%2F2020&amp;companyId=">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=22%2F07%2F2020%20-%2022%2F07%2F2020&amp;companyId=">10,800,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=22%2F07%2F2020%20-%2022%2F07%2F2020&amp;companyId=">11,880,000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>23/07</b></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=23%2F07%2F2020%20-%2023%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=23%2F07%2F2020%20-%2023%2F07%2F2020&amp;companyId=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=2&amp;applyDate=23%2F07%2F2020%20-%2023%2F07%2F2020&amp;companyId=">3,960,000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/bill/index?accountType=1&amp;applyDate=23%2F07%2F2020%20-%2023%2F07%2F2020&amp;companyId=">7,920,000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>24/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>25/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>26/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>27/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>28/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>29/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td class="colNumber"><b>30/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td class="colNumber"><b>31/07</b></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="rowSum">
                            <td><b>Tổng</b></td>
                            <td><b>80</b></td>
                            <td><b>56</b></td>
                            <td><b>242,625,000</b></td>
                            <td><b>437,134,800</b></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                </div>
            </div>
        </div>

        <style>
            #exportExcel {
                color: #fff;
                background-color: #3276b1;
                border-color: #285e8e;
                text-decoration: none
            }
        </style>
    </div>
</div>

@endsection

@section('js')
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
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource(3)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource(4)') }}"></script>

@endsection