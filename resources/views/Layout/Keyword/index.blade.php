@extends('Layout.master')

@section('title','ERP-Danh Sách Từ Khóa')

@section('css')
    <link href="{{ asset('asset/css/keyword/bootstrap-multiselect.css" media="screen') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/keyword/style.css') }}" type="text/css">
@endsection


@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/hrm/employee/index">Danh sách từ khóa</a></li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="IndexFilter" class="form-inline lolify" role="form"
                id="IndexFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="keyword" maxlength="255" placeholder="Từ khóa"
                            id="keyword" class="form-control" value=""> </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnSubmit"
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
                            <li><a href="https://erp.nhanh.vn/crm/keyword/index#"
                                    id="exportExcel"><i class="fa fa-file-excel-o"></i> Xuất excel
                                    trang hiện tại</a></li>
                            <li><a href="https://erp.nhanh.vn/crm/keyword/index#" id="exportAll"
                                    class="exportCsv"><i class="fa fa-file-excel-o"></i> Xuất excel
                                    toàn bộ</a></li>
                        </ul>
                    </div>


                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="">
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái -</option>
                            <option value="1">Đã thanh toán</option>
                            <option value="2">Chưa thanh toán</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="id" maxlength="10" placeholder="ID" id="id"
                            class="form-control" value=""> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 46px;">ID</th>
                            <th style="width: 163px;">Link Hợp đồng</th>
                            <th style="width: 144px;">Link Yêu cầu</th>
                            <th style="min-width: 200px; width: 374px;">Tên từ khóa</th>
                            <th style="width: 147px;">Ngày bắt đầu</th>
                            <th style="width: 153px;">Ngày kết thúc</th>
                            <th style="width: 186px;">Khu vực</th>
                            <th style="width: 127px;">Mô tả thêm</th>
                            <th style="width: 162px;">Trạng thái</th>
                            <th style="width: 54px;"><i class="fa fa-cogs icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 42 / 42</span></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgAuction" class="table table-hover">
                <thead>
                    <tr class="even">
                        <th>ID</th>
                        <th>Link Hợp đồng</th>
                        <th>Link Yêu cầu</th>
                        <th style="min-width:200px;">Tên từ khóa</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Khu vực</th>
                        <th>Mô tả thêm</th>
                        <th>Trạng thái</th>
                        <th><i class="fa fa-cogs icon"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=42">42</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=37214">37214</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>bơm dầu</b></td>
                        <td class="col-align-center"><span class="text-success">01/06/2018</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">01/12/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=41">41</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=37214">37214</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>đồng hồ đo dầu</b></td>
                        <td class="col-align-center"><span class="text-success">01/06/2018</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">01/12/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=40">40</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=36403">36403</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>ban ghe sinh vien gap</b></td>
                        <td class="col-align-center"><span class="text-success">18/04/2018</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">18/10/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=39">39</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=36403">36403</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>ghe hoc sinh gap</b></td>
                        <td class="col-align-center"><span class="text-success">18/04/2018</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">18/10/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=38">38</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=36403">36403</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>bàn ghế gấp học sinh</b></td>
                        <td class="col-align-center"><span class="text-success">18/04/2018</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">18/10/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=37">37</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=34360">34360</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>may nen khi truc vit</b></td>
                        <td class="col-align-center"><span class="text-success">19/01/2018</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">19/07/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=36">36</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=32860">32860</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>quạt công nghiệp, quạt thông gió</b></td>
                        <td class="col-align-center"><span class="text-success">13/12/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">13/03/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td>Thu lần 1</td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=35">35</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=33173">33173</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>bơm hóa chất</b></td>
                        <td class="col-align-center"><span class="text-success">12/12/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">12/06/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=34">34</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=31452">31452</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>may doc ma vach</b></td>
                        <td class="col-align-center"><span class="text-success">31/10/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">30/04/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=33">33</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=30608">30608</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>xe golf, xe điện chở khách</b></td>
                        <td class="col-align-center"><span class="text-success">04/10/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">30/03/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=32">32</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=26865">26865</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>ghế giám đốc</b></td>
                        <td class="col-align-center"><span class="text-success">22/08/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">22/02/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=31">31</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=28687">28687</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>ổn áp robot</b></td>
                        <td class="col-align-center"><span class="text-success">05/08/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">05/02/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=30">30</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=28687">28687</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>ổn áp robot</b></td>
                        <td class="col-align-center"><span class="text-success">05/08/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">05/02/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=29">29</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=28257">28257</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>két sắt mini</b></td>
                        <td class="col-align-center"><span class="text-success">31/07/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">31/08/2017</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=28">28</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=28346">28346</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>máy hàn tig</b></td>
                        <td class="col-align-center"><span class="text-success">31/07/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">31/01/2018</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=27">27</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=28346">28346</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>máy cắt plasma</b></td>
                        <td class="col-align-center"><span class="text-success">31/07/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">31/01/2018</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=26">26</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=28001">28001</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>máy rửa xe</b></td>
                        <td class="col-align-center"><span class="text-success">27/07/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">27/08/2017</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=25">25</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=28001">28001</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>máy cắt cỏ</b></td>
                        <td class="col-align-center"><span class="text-success">27/07/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">27/08/2017</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=24">24</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=27891">27891</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>ac quy xe dap dien</b></td>
                        <td class="col-align-center"><span class="text-success">14/07/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">14/10/2017</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=23">23</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=27891">27891</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>ắc quy oto</b></td>
                        <td class="col-align-center"><span class="text-success">14/07/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">14/07/2018</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=22">22</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=26733">26733</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>máy kinh vĩ</b></td>
                        <td class="col-align-center"><span class="text-success">04/07/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">04/10/2017</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=21">21</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=26679">26679</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>mỡ bôi trơn, dầu thủy lực</b></td>
                        <td class="col-align-center"><span class="text-success">04/07/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">04/10/2017</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=20">20</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=27234">27234</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>may han tan thanh</b></td>
                        <td class="col-align-center"><span class="text-success">03/07/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">03/01/2018</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=19">19</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=26920">26920</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>giường sắt</b></td>
                        <td class="col-align-center"><span class="text-success">29/06/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">29/09/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=18">18</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=26920">26920</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>tủ hồ sơ</b></td>
                        <td class="col-align-center"><span class="text-success">26/06/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">26/12/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=17">17</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=26927">26927</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>ghế massage chân</b></td>
                        <td class="col-align-center"><span class="text-success">26/06/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">26/06/2018</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=16">16</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=26906">26906</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>mua nước hoa hồng</b></td>
                        <td class="col-align-center"><span class="text-success">24/06/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">24/07/2017</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=15">15</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=26640">26640</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>Đầu Karaoke</b></td>
                        <td class="col-align-center"><span class="text-success">19/06/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">19/08/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=14">14</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=26600">26600</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>bàn ghế cafe</b></td>
                        <td class="col-align-center"><span class="text-success">12/06/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">12/07/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=13">13</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=25554">25554</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>tranh gạch</b></td>
                        <td class="col-align-center"><span class="text-success">12/05/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">12/08/2017</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=12">12</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=24192">24192</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>van nuoc</b></td>
                        <td class="col-align-center"><span class="text-success">15/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">15/10/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=11">11</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=24296">24296</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>van buom</b></td>
                        <td class="col-align-center"><span class="text-success">17/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">17/10/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=10">10</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=24296">24296</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>van cổng</b></td>
                        <td class="col-align-center"><span class="text-success">17/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">17/10/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=9">9</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=24296">24296</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>đồng hồ nước sensus</b></td>
                        <td class="col-align-center"><span class="text-success">17/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">17/10/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=8">8</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=24296">24296</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>đồng hồ nước unik</b></td>
                        <td class="col-align-center"><span class="text-success">17/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">17/10/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=7">7</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=24296">24296</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>đồng hồ nước itron</b></td>
                        <td class="col-align-center"><span class="text-success">17/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">17/10/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=6">6</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=24388">24388</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>Hóa chất công nghiệp</b></td>
                        <td class="col-align-center"><span class="text-success">17/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">17/04/2018</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=5">5</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=23903">23903</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>tạp dề</b></td>
                        <td class="col-align-center"><span class="text-success">10/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">10/07/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=4">4</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=23679">23679</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>bình chữa cháy</b></td>
                        <td class="col-align-center"><span class="text-success">07/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">07/07/2017</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=3">3</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=23679">23679</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>thiết bị báo cháy</b></td>
                        <td class="col-align-center"><span class="text-success">07/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">07/07/2017</span>
                        </td>
                        <td class="col-align-center"><b>Hà Nội</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=2">2</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=23902">23902</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>máy cưa bàn trượt</b></td>
                        <td class="col-align-center"><span class="text-success">05/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">07/07/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/keyword/view?id=1">1</a></td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=23822">23822</a>
                        </td>
                        <td class="col-align-center"></td>
                        <td style="min-width:200px;"><b>xe tai dongfeng</b></td>
                        <td class="col-align-center"><span class="text-success">05/04/2017</span>
                        </td>
                        <td class="col-align-center"><span class="text-danger">05/07/2017</span>
                        </td>
                        <td class="col-align-center"><b>TP Hồ Chí Minh</b></td>
                        <td></td>
                        <td>Đã thanh toán</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 42 / 42</span></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="confirmReapproveModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="referId" value="">
                        <div class="alert alert-warning">Bạn muốn hoàn duyệt phiên đấu giá này?
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary btnSave">Đồng ý</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="errorModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="loadingModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div style="font-size: 3em; text-align: center;">
                            <i class="fa fa-spin fa-cog"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="loadingColorModal">
            <div class="modal-dialog" style="display: block !important;opacity: 1">
                <div class="modal-content" style="display: block !important;opacity: 1">
                    <div class="modal-body" style="display: block !important;opacity: 1">
                        <div style="font-size: 3em; text-align: center;">
                            <div class="alert alert-success">
                                <h4>Bạn vui lòng chờ trong giây lát ! <br> Dữ liệu sẽ được cập nhật
                                </h4>
                            </div>
                            <i class="fa fa-spin fa-cog"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="alertModal" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .fa-spinner {
                -webkit-animation: fa-spin .5s infinite linear;
                animation: fa-spin .5s infinite linear;
            }

            #loadingColorModal {
                display: none;
                overflow: auto;
                overflow-y: scroll;
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1040;
                background: rgba(56, 50, 50, 0.8);
            }
        </style>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/keyword/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/keyword/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/keyword/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/keyword/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/keyword/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/keyword/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/keyword/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/keyword/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/keyword/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource(3)') }}"></script>
@endsection