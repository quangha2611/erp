@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title', 'ERP-Danh sách tài khoản')

@section('content-page')

    <div class="col-md-10 content-wrapper">


        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/account/index">Danh sách tài khoản kế
                    toán</a></li>
        </ul>
        <div id="page-idea-contact">
            <div class="filterContainer">
                <form method="GET" name="ideaFilter" class="form-inline" role="form"
                    id="ideaFilter">
                    <div class="form-group"><input type="text" name="id" maxlength="255"
                            placeholder="ID" id="id" class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="name" maxlength="255"
                            placeholder="Tên tài khoản" id="name" class="form-control" value="">
                    </div>
                    <div class="form-group"><select name="companyId" id="companyId"
                            class="form-control">
                            <option value="10">VNP group</option>
                            <option value="324">-- Công ty cổ phần Nhanh.vn</option>
                            <option value="1">-- -- Nhanh.vn</option>
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCompanyContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
        </div>
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Danh sách tài khoản kế toán</h3>
            </div>
            <div class="dgContainer widget-content table-responsive">
                <div style="width: 1534px; display: none;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 81px;">ID</th>
                                <th style="width: 715px;">Tên tài khoản</th>
                                <th style="width: 146px;">Mã Code</th>
                                <th class="maxw50" style="width: 45px;">Trạng thái</th>
                                <th style="width: 188px;">Tên Công ty </th>
                                <th style="width: 271px;">Người tạo</th>
                                <th style="width: 87px;"><i class="fa fa-edit"></i> </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"><a
                            href="https://erp.nhanh.vn/accounting/account/add"
                            class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm tài
                            khoản</a></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table cellspacing="0" cellpadding="0" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>ID</th>
                            <th>Tên tài khoản</th>
                            <th>Mã Code</th>
                            <th class="maxw50">Trạng thái</th>
                            <th>Tên Công ty </th>
                            <th>Người tạo</th>
                            <th><i class="fa fa-edit"></i> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>321</td>
                            <td style="padding-left: 10px;">Tiền chuyển khoản</td>
                            <td>112</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">nguyễn ngọc kiên</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="321"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>880</td>
                            <td style="padding-left: 50px;">Khối KD độc lập (CK)</td>
                            <td>1123234</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="880"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="">
                            <td>878</td>
                            <td style="padding-left: 50px;">Welove (Chuyển khoản)</td>
                            <td>112234</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="878"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>876</td>
                            <td style="padding-left: 50px;">Nhanh HCM(Phần cứng)</td>
                            <td>11245</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="876"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="">
                            <td>874</td>
                            <td style="padding-left: 50px;">Nhanh HN(Phần cứng)</td>
                            <td>11123</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="874"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>872</td>
                            <td style="padding-left: 50px;">Bizshare HCM</td>
                            <td>111234</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="872"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="">
                            <td>870</td>
                            <td style="padding-left: 50px;">WeHelp</td>
                            <td>1114</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="870"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>868</td>
                            <td style="padding-left: 50px;">9houz (HCM)</td>
                            <td>112112</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="868"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="">
                            <td>866</td>
                            <td style="padding-left: 50px;">Nhanh Đà Nẵng(CK)</td>
                            <td>11212</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="866"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>864</td>
                            <td style="padding-left: 50px;">Nhanh HN 2019 (Chuyển khoản)</td>
                            <td>11222</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="864"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>856</td>
                            <td style="padding-left: 50px;">Nhanh HCM 2019 (Chuyển khoản)</td>
                            <td>11221</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="856"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>854</td>
                            <td style="padding-left: 50px;">9houz</td>
                            <td>111219</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="854"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>815</td>
                            <td style="padding-left: 50px;">KyNguyenSo</td>
                            <td>11215</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="815"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>813</td>
                            <td style="padding-left: 50px;">Bizshare</td>
                            <td>11218</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="813"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>810</td>
                            <td style="padding-left: 50px;">Wesave Hồ Chí Minh</td>
                            <td>1128</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="{{ route('accountingAccountEdit') }}"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="810"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>809</td>
                            <td style="padding-left: 50px;">Vchat</td>
                            <td>11210</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=809"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="809"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>807</td>
                            <td style="padding-left: 50px;">WeMarry</td>
                            <td>1129</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=807"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="807"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>804</td>
                            <td style="padding-left: 50px;">IKI</td>
                            <td>1118</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=804"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="804"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>783</td>
                            <td style="padding-left: 50px;">WeSave Hà Nội</td>
                            <td>1127</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=783"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="783"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>775</td>
                            <td style="padding-left: 50px;">Vật Giá Đà Nẵng</td>
                            <td>11121</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=775"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="775"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>773</td>
                            <td style="padding-left: 50px;">Elite</td>
                            <td>1119</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=773"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="773"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>770</td>
                            <td style="padding-left: 50px;">Doanh thu phần cứng</td>
                            <td>1126</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Nguyễn Diệu Linh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=770"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="770"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>319</td>
                            <td style="padding-left: 50px;">Vận chuyển Nhanh</td>
                            <td>1125</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">nguyễn ngọc kiên</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=319"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="319"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>318</td>
                            <td style="padding-left: 50px;">Doanh thu VC Nhanh</td>
                            <td>1124</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">nguyễn ngọc kiên</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=318"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="318"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>309</td>
                            <td style="padding-left: 50px;">Nhanh HCM</td>
                            <td>1123</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">chử khánh văn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=309"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="309"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>308</td>
                            <td style="padding-left: 50px;">Nhanh HN</td>
                            <td>1122</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">chử khánh văn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=308"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="308"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>305</td>
                            <td style="padding-left: 50px;">Cty cổ phần Vật Giá VN</td>
                            <td>1121</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">chử khánh văn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=305"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="305"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>307</td>
                            <td style="padding-left: 100px;">Vật Giá HCM</td>
                            <td>11212</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">chử khánh văn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=307"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="307"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>306</td>
                            <td style="padding-left: 100px;">Vật Giá HN</td>
                            <td>11211</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">chử khánh văn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=306"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="306"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>320</td>
                            <td style="padding-left: 10px;">Tiền mặt</td>
                            <td>111</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">nguyễn ngọc kiên</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=320"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="320"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>879</td>
                            <td style="padding-left: 50px;">Khối KD độc lập (TM)</td>
                            <td>111123</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=879"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="879"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>877</td>
                            <td style="padding-left: 50px;">Welove (Tiền mặt)</td>
                            <td>11113</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=877"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="877"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>875</td>
                            <td style="padding-left: 50px;">Nhanh HCM(Phần cứng)</td>
                            <td>111145</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=875"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="875"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>873</td>
                            <td style="padding-left: 50px;">Nhanh HN(Phần cứng)</td>
                            <td>1111.23</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=873"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="873"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>871</td>
                            <td style="padding-left: 50px;">Bizshare HCM</td>
                            <td>111134</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=871"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="871"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>869</td>
                            <td style="padding-left: 50px;">WeHelp</td>
                            <td>111.19</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=869"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="869"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>867</td>
                            <td style="padding-left: 50px;">9houz (HCM)</td>
                            <td>11112</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=867"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="867"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>865</td>
                            <td style="padding-left: 50px;">Nhanh Đà Nẵng (TM)</td>
                            <td>111121</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=865"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="865"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>863</td>
                            <td style="padding-left: 50px;">Nhanh HN 2019 (Tiền mặt)</td>
                            <td>11112</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=863"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="863"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>855</td>
                            <td style="padding-left: 50px;">Nhanh HCM 2019 (Tiền mặt)</td>
                            <td>11131</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=855"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="855"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>853</td>
                            <td style="padding-left: 50px;">9houz</td>
                            <td>11119</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=853"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="853"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>814</td>
                            <td style="padding-left: 50px;">KyNguyenSo</td>
                            <td>11115</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=814"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="814"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>812</td>
                            <td style="padding-left: 50px;">Bizshare</td>
                            <td>11118</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=812"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="812"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>811</td>
                            <td style="padding-left: 50px;">Wesave Hồ Chí Minh</td>
                            <td>1116</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=811"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="811"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>808</td>
                            <td style="padding-left: 50px;">Vchat</td>
                            <td>11110</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=808"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="808"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>806</td>
                            <td style="padding-left: 50px;">WeMarry</td>
                            <td>1119</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=806"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="806"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>803</td>
                            <td style="padding-left: 50px;">IKI</td>
                            <td>1128</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=803"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="803"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>799</td>
                            <td style="padding-left: 50px;">Amall</td>
                            <td>11114</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=799"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="799"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>798</td>
                            <td style="padding-left: 50px;">123Study</td>
                            <td>11113</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=798"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="798"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>784</td>
                            <td style="padding-left: 50px;">WeSave Hà Nội</td>
                            <td>1115</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=784"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="784"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>777</td>
                            <td style="padding-left: 50px;">WeStay</td>
                            <td>11234</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=777"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="777"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>774</td>
                            <td style="padding-left: 50px;">Vật giá Đà Nẵng</td>
                            <td>11120</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=774"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="774"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>772</td>
                            <td style="padding-left: 50px;">Elite</td>
                            <td>11118</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=772"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="772"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>771</td>
                            <td style="padding-left: 50px;">Doanh thu phần cứng</td>
                            <td>1114</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Nguyễn Diệu Linh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=771"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="771"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>304</td>
                            <td style="padding-left: 50px;">Nhanh HCM</td>
                            <td>1113</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">chử khánh văn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=304"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="304"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>303</td>
                            <td style="padding-left: 50px;">Nhanh HN</td>
                            <td>1112</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">chử khánh văn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=303"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="303"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>300</td>
                            <td style="padding-left: 50px;">Cty cổ phần Vật Giá VN</td>
                            <td>1111</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">chử khánh văn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=300"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="300"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>302</td>
                            <td style="padding-left: 100px;">Vật Giá HCM</td>
                            <td>11111</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">chử khánh văn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=302"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="302"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>301</td>
                            <td style="padding-left: 100px;">Vật Giá HN</td>
                            <td>11112</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">chử khánh văn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=301"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="301"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>542</td>
                            <td style="padding-left: 150px;">Quỹ Maketing(VG Hà Nội)</td>
                            <td>111121</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/account/edit?id=542"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/account#" value="542"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                </div>
            </div>
        </div>
        <!-- Dialog bootstrap -->
        <div id="delModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info alert-dismissable">Xác nhận xóa tài khoản</div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary confirm">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="alertModal" class="modal fade">
            <div class="modal-dialog">
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
    </div>

@endsection


@section('js')

    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };

    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/del.js') }}"></script>


@endsection
