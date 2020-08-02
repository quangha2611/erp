@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo thực hiện dịch vụ')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo thực hiện dịch vụ</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="customercarecompanyFilter" class="form-inline lolify"
                role="form" id="customercarecompanyFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
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
                            <option value="1">------Nhanh.vn</option>
                            <option value="366">------Nhanh.vn Đà Nẵng</option>
                            <option value="395">------Nhanh.vn HCM</option>
                            <option value="379">---Westay</option>
                            <option value="384">---Công ty cổ phần WeHelp</option>
                            <option value="398">---WeLove</option>
                        </select> </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCrmContact"
                            class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">
                    <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                        data-placement="top" title="Chức năng, thao tác">
                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                            aria-expanded="false" data-toggle="dropdown">
                            <span class="fa fa-cog"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="https://erp.nhanh.vn/crm/report/contractrequirement#"
                                    id="exportExcel"><i class="fa fa-download fa-lg"></i> Xuất
                                    excel</a></li>
                        </ul>
                    </div>


                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1889px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 92px;">STT</th>
                            <th rowspan="2" style="width: 405px;">Công ty</th>
                            <th colspan="2" style="width: 374px;">HĐ đã có thanh toán</th>
                            <th colspan="2" style="width: 446px;">HĐ thanh toán đã có yêu cầu
                            </th>
                            <th colspan="2" style="width: 571px;">HĐ đã thanh toán nhưng chưa có
                                Y/C</th>
                        </tr>
                        <tr>
                            <th style="width: 89px;">SL</th>
                            <th style="width: 285px;">Giá trị(Đã trả)</th>
                            <th style="width: 107px;">SL</th>
                            <th style="width: 339px;">Giá trị(Đã trả)</th>
                            <th style="width: 136px;">SL</th>
                            <th style="width: 435px;">Giá trị(Đã trả)</th>
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
                        <th rowspan="2">Công ty</th>
                        <th colspan="2">HĐ đã có thanh toán</th>
                        <th colspan="2">HĐ thanh toán đã có yêu cầu</th>
                        <th colspan="2">HĐ đã thanh toán nhưng chưa có Y/C</th>
                    </tr>
                    <tr class="">
                        <th>SL</th>
                        <th>Giá trị(Đã trả)</th>
                        <th>SL</th>
                        <th>Giá trị(Đã trả)</th>
                        <th>SL</th>
                        <th>Giá trị(Đã trả)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even">
                        <td>1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=1&amp;daterangepicker=">Nhanh.vn</a>
                        </td>
                        <td>468</td>
                        <td>146.966.920.258</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=1&amp;daterangepicker=&amp;hasRequirement=-1">468</a>
                        </td>
                        <td>146.966.920.258</td>
                    </tr>
                    <tr class="">
                        <td>2</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=315&amp;daterangepicker=">Vật
                                giá - Hà Nội</a></td>
                        <td>59</td>
                        <td>678.388.000</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=315&amp;daterangepicker=&amp;hasRequirement=1">17</a>
                        </td>
                        <td>77.078.000</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=315&amp;daterangepicker=&amp;hasRequirement=-1">42</a>
                        </td>
                        <td>601.310.000</td>
                    </tr>
                    <tr class="even">
                        <td>3</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=319&amp;daterangepicker=">Vật
                                giá - Hồ Chí Minh</a></td>
                        <td>157</td>
                        <td>1.385.663.215</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=319&amp;daterangepicker=&amp;hasRequirement=1">15</a>
                        </td>
                        <td>90.590.000</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=319&amp;daterangepicker=&amp;hasRequirement=-1">142</a>
                        </td>
                        <td>1.295.073.215</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=366&amp;daterangepicker=">Nhanh.vn
                                Đà Nẵng</a></td>
                        <td>4</td>
                        <td>12.600.000</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=366&amp;daterangepicker=&amp;hasRequirement=-1">4</a>
                        </td>
                        <td>12.600.000</td>
                    </tr>
                    <tr class="even">
                        <td>5</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=383&amp;daterangepicker=">Baloonline.com</a>
                        </td>
                        <td></td>
                        <td>3.000.000</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=383&amp;daterangepicker=&amp;hasRequirement=-1">0</a>
                        </td>
                        <td>3.000.000</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=384&amp;daterangepicker=">Công
                                ty cổ phần WeHelp</a></td>
                        <td>4</td>
                        <td>42.240.000</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=384&amp;daterangepicker=&amp;hasRequirement=-1">4</a>
                        </td>
                        <td>42.240.000</td>
                    </tr>
                    <tr class="even">
                        <td>7</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=391&amp;daterangepicker=">123job.vn</a>
                        </td>
                        <td>1</td>
                        <td>1.595.000</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=391&amp;daterangepicker=&amp;hasRequirement=-1">1</a>
                        </td>
                        <td>1.595.000</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=392&amp;daterangepicker=">9houz.com</a>
                        </td>
                        <td></td>
                        <td>35.061.504</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/contractrequirementdetail?companyId=392&amp;daterangepicker=&amp;hasRequirement=-1">0</a>
                        </td>
                        <td>35.061.504</td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(3)') }}"></script>
@endsection