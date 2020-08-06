@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/accounting/expense/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Khoản mục chi phí')

@section('content-page')

    <div class="col-md-10 content-wrapper">


        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/expense/category">Danh sách khoản mục chi
                    phí</a></li>
        </ul>
        <div id="page-idea-contact">
            <div class="filterContainer">
                <form method="GET" name="ideaFilter" class="form-inline" role="form"
                    id="ideaFilter">
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
                            <option value="1">------Nhanh.vn</option>
                            <option value="366">------Nhanh.vn Đà Nẵng</option>
                            <option value="395">------Nhanh.vn HCM</option>
                            <option value="379">---Westay</option>
                            <option value="384">---Công ty cổ phần WeHelp</option>
                            <option value="398">---WeLove</option>
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCompanyContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
        </div>
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Danh mục khoản mục chi phí</h3>
            </div>
            <div class="dgContainer widget-content table-responsive">
                <div style="display: none; width: 1534px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 52px;">ID</th>
                                <th style="width: 468px;">Tên tài khoản</th>
                                <th style="width: 234px;">Mã code</th>
                                <th class="maxw50" style="width: 45px;">Trạng thái</th>
                                <th style="width: 492px;">Tên Công ty </th>
                                <th style="width: 198px;">Người tạo</th>
                                <th style="width: 44px;"><i class="fa fa-edit"></i> </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"><a
                            href="https://erp.nhanh.vn/accounting/expense/addcategory"
                            class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm khoản
                            mục</a></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table cellspacing="0" cellpadding="0" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>ID</th>
                            <th>Tên tài khoản</th>
                            <th>Mã code</th>
                            <th class="maxw50">Trạng thái</th>
                            <th>Tên Công ty </th>
                            <th>Người tạo</th>
                            <th><i class="fa fa-edit"></i> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="h">
                            <td>164</td>
                            <td style="padding-left: 10px;">Tiền đầu kỳ</td>
                            <td>001</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Baloonline.com</td>
                            <td style="position: relative">Phan Văn Thanh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=164"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="164"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>165</td>
                            <td style="padding-left: 10px;">Tiền thu trong kỳ</td>
                            <td>002</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Baloonline.com</td>
                            <td style="position: relative">Phan Văn Thanh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=165"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="165"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="">
                            <td>166</td>
                            <td style="padding-left: 10px;">Tiền chi trong kỳ</td>
                            <td>003</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Baloonline.com</td>
                            <td style="position: relative">Phan Văn Thanh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=166"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="166"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>167</td>
                            <td style="padding-left: 10px;">Tiền cuối kỳ</td>
                            <td>004</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Baloonline.com</td>
                            <td style="position: relative">Phan Văn Thanh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=167"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="167"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>157</td>
                            <td style="padding-left: 10px;">Shop Độc 110 Phố Nhổn</td>
                            <td>Shop Độc 110 Phố Nhổn</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Công ty NP</td>
                            <td style="position: relative">Lê Thiên Bình</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=157"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="157"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>158</td>
                            <td style="padding-left: 10px;">42 Chùa Bộc</td>
                            <td>42</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Công ty NP</td>
                            <td style="position: relative">Lê Thiên Bình</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=158"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="158"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>159</td>
                            <td style="padding-left: 10px;">Chi Cho Xưởng Sản Xuất</td>
                            <td>111</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Xưởng Buôn Mezina</td>
                            <td style="position: relative">Nguyễn Văn Toàn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=159"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="159"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>160</td>
                            <td style="padding-left: 10px;">Chi Cho Xưởng Thiết Kế</td>
                            <td>112</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Xưởng Buôn Mezina</td>
                            <td style="position: relative">Nguyễn Văn Toàn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=160"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="160"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>161</td>
                            <td style="padding-left: 10px;">Chi Cho Văn Phòng</td>
                            <td>113</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Xưởng Buôn Mezina</td>
                            <td style="position: relative">Nguyễn Văn Toàn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=161"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="161"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>162</td>
                            <td style="padding-left: 10px;">Thu Tiền Từ Cửa Hàng</td>
                            <td>114</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Xưởng Buôn Mezina</td>
                            <td style="position: relative">Nguyễn Văn Toàn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=162"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="162"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>163</td>
                            <td style="padding-left: 10px;">Thu Tiền Từ Giám Đốc</td>
                            <td>115</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Xưởng Buôn Mezina</td>
                            <td style="position: relative">Nguyễn Văn Toàn</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=163"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="163"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>168</td>
                            <td style="padding-left: 10px;">Chi cho shop</td>
                            <td>116</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Xưởng Buôn Mezina</td>
                            <td style="position: relative">Hoàng Thị Thủy</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=168"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="168"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>138</td>
                            <td style="padding-left: 10px;">Mua nguyên vật liệu</td>
                            <td>01</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>BEGO GROUP</td>
                            <td style="position: relative">Ngô Hữu Hiệp</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=138"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="138"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>139</td>
                            <td style="padding-left: 10px;">Chi phí tiếp khách</td>
                            <td>02</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>BEGO GROUP</td>
                            <td style="position: relative">Ngô Hữu Hiệp</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=139"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="139"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>140</td>
                            <td style="padding-left: 10px;">Vay công ty tiêu dùng cá nhân</td>
                            <td>03</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>BEGO GROUP</td>
                            <td style="position: relative">Ngô Hữu Hiệp</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=140"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="140"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>141</td>
                            <td style="padding-left: 10px;">Thu từ Shoppee</td>
                            <td>04</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>BEGO GROUP</td>
                            <td style="position: relative">Ngô Hữu Hiệp</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=141"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="141"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>142</td>
                            <td style="padding-left: 10px;">Thu từ bán hàng trực tiếp</td>
                            <td>05</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>BEGO GROUP</td>
                            <td style="position: relative">Ngô Hữu Hiệp</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=142"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="142"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>81</td>
                            <td style="padding-left: 10px;">Facebook ads</td>
                            <td>2000</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">DOLL EYES</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=81"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="81"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>82</td>
                            <td style="padding-left: 10px;">CP Marketing</td>
                            <td>2001</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">DOLL EYES</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=82"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="82"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>83</td>
                            <td style="padding-left: 10px;">CP tiền lương nhân viên</td>
                            <td>2002</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">DOLL EYES</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=83"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="83"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>84</td>
                            <td style="padding-left: 10px;">Doanh thu (Phát gửi)</td>
                            <td>2004</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">DOLL EYES</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=84"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="84"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>85</td>
                            <td style="padding-left: 10px;">Doanh thu DE LVS + LHK (Ms.Thảo gửi định
                                kì)</td>
                            <td>2005</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">DOLL EYES</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=85"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="85"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>86</td>
                            <td style="padding-left: 10px;">CP Đầu Tư</td>
                            <td>123456</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">DOLL EYES</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=86"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="86"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>87</td>
                            <td style="padding-left: 10px;">CP In Ấn</td>
                            <td>2412</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">DOLL EYES</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=87"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="87"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>88</td>
                            <td style="padding-left: 10px;">CP Mua hàng</td>
                            <td>2512</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">DOLL EYES</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=88"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="88"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>89</td>
                            <td style="padding-left: 10px;">CP Cố Định</td>
                            <td>2612</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">DOLL EYES</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=89"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="89"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>90</td>
                            <td style="padding-left: 10px;">CP Khác</td>
                            <td>2712</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">DOLL EYES</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=90"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="90"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>93</td>
                            <td style="padding-left: 10px;">Trang HN gửi</td>
                            <td>2912</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>COSTA</td>
                            <td style="position: relative">Võ Thị Thanh Phúc</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=93"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="93"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>144</td>
                            <td style="padding-left: 10px;">chuyển khoản</td>
                            <td>010</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Quốc Duy Auto</td>
                            <td style="position: relative">Lê Duy Tân</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=144"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="144"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>92</td>
                            <td style="padding-left: 10px;">Chi Văn phòng</td>
                            <td>00001</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Nhanh.vn Đà Nẵng</td>
                            <td style="position: relative">Trần Thị Hằng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=92"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="92"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>116</td>
                            <td style="padding-left: 10px;">Chi lương nhân viên</td>
                            <td>CL</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Nhanh.vn Đà Nẵng</td>
                            <td style="position: relative">Trần Thị Hằng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=116"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="116"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>118</td>
                            <td style="padding-left: 10px;">Đóng thuế</td>
                            <td>THUE</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Nhanh.vn Đà Nẵng</td>
                            <td style="position: relative">Trần Thị Hằng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=118"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="118"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>119</td>
                            <td style="padding-left: 10px;">Chi quảng cáo</td>
                            <td>Quảng cáo</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Nhanh.vn Đà Nẵng</td>
                            <td style="position: relative">Trần Thị Hằng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=119"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="119"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>54</td>
                            <td style="padding-left: 10px;">DUY TRÌ WEB</td>
                            <td>02</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>CÔNG TY TNHH TM DV XNK ĐẦU TƯ THANH LONG</td>
                            <td style="position: relative">Nguyễn Văn Thắm</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=54"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="54"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>55</td>
                            <td style="padding-left: 10px;">TIỀN CỌC</td>
                            <td>03</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>CÔNG TY TNHH TM DV XNK ĐẦU TƯ THANH LONG</td>
                            <td style="position: relative">Nguyễn Văn Thắm</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=55"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="55"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>125</td>
                            <td style="padding-left: 10px;">CHI - ĐÓNG GÓI HÀNG HOÁ</td>
                            <td>CHI-A</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=125"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="125"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td style="padding-left: 50px;">Chi bong bóng, mút gói hàng</td>
                            <td>C-4</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=61"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="61"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>62</td>
                            <td style="padding-left: 50px;">Chi Thùng hộp / bao bì</td>
                            <td>C-5</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=62"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="62"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td style="padding-left: 50px;">Chi Giấy in, mực in</td>
                            <td>C-7</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=64"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="64"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>94</td>
                            <td style="padding-left: 50px;">Chi băng keo</td>
                            <td>C-16</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=94"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="94"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>124</td>
                            <td style="padding-left: 50px;">Chi Dụng cụ đóng gói</td>
                            <td>C-31</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=124"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="124"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>126</td>
                            <td style="padding-left: 10px;">THU - DOANH SỐ BÁN HÀNG</td>
                            <td>THU-A</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=126"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="126"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td style="padding-left: 50px;">Thu bán hàng Tiki</td>
                            <td>T-4</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=58"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="58"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>74</td>
                            <td style="padding-left: 50px;">Thu bán hàng (Cửa hàng)</td>
                            <td>T-1</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=74"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="74"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>75</td>
                            <td style="padding-left: 50px;">Thu bán hàng Lazada</td>
                            <td>T-2</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=75"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="75"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>98</td>
                            <td style="padding-left: 50px;">Thu bán hàng tại kho</td>
                            <td>T-5</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=98"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="98"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>99</td>
                            <td style="padding-left: 50px;">Thu bán hàng Lotte</td>
                            <td>T-6</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=99"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="99"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>100</td>
                            <td style="padding-left: 50px;">Thu bán hàng Sendo</td>
                            <td>T-7</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=100"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="100"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>101</td>
                            <td style="padding-left: 50px;">Thu bán hàng Shopee</td>
                            <td>T-8</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=101"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="101"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>102</td>
                            <td style="padding-left: 50px;">Thu bán hàng adayroi</td>
                            <td>T-9</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=102"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="102"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td style="padding-left: 50px;">Thu bán hàng Inside</td>
                            <td>T-10</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=103"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="103"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>104</td>
                            <td style="padding-left: 50px;">Thu bán hàng Akulaku</td>
                            <td>T-11</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=104"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="104"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>105</td>
                            <td style="padding-left: 50px;">Thu bán hàng Yes24</td>
                            <td>T-12</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=105"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="105"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>120</td>
                            <td style="padding-left: 50px;">Thu bán hàng Website</td>
                            <td>T-16</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=120"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="120"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td style="padding-left: 50px;">Thu Doanh số khác</td>
                            <td>T-18</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=123"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="123"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>145</td>
                            <td style="padding-left: 50px;">Thu tiền AEON</td>
                            <td>T-19</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=145"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="145"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>146</td>
                            <td style="padding-left: 50px;">Thu tiền 7Elevent</td>
                            <td>T-20</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=146"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="146"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>127</td>
                            <td style="padding-left: 10px;">THU - VỐN</td>
                            <td>THU-B</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=127"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="127"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>76</td>
                            <td style="padding-left: 50px;">Thu Vay vốn</td>
                            <td>T-3</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=76"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="76"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>117</td>
                            <td style="padding-left: 50px;">Thu góp vốn</td>
                            <td>T-15</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=117"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="117"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>128</td>
                            <td style="padding-left: 10px;">CHI - LƯƠNG THƯỞNG, PHÚC LỢI</td>
                            <td>CHI-B</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=128"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="128"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>65</td>
                            <td style="padding-left: 50px;">Chi Lương nhân viên</td>
                            <td>C-8</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=65"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="65"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td style="padding-left: 50px;">Chi tạm ứng lương</td>
                            <td>C-9</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=66"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="66"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>96</td>
                            <td style="padding-left: 50px;">Chi nước uống / hỗ trợ ăn</td>
                            <td>C-18</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=96"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="96"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>106</td>
                            <td style="padding-left: 50px;">Chi Phúc lợi nhân viên</td>
                            <td>C-22</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=106"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="106"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>115</td>
                            <td style="padding-left: 50px;">Chi Vay công ty</td>
                            <td>C-29</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=115"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="115"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>129</td>
                            <td style="padding-left: 10px;">CHI - VẬN CHUYỂN</td>
                            <td>CHI-C</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=129"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="129"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>59</td>
                            <td style="padding-left: 50px;">Chi Chuyển phát nhanh / bưu điện</td>
                            <td>C-2</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=59"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="59"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td style="padding-left: 50px;">Chi Xe Giao hàng</td>
                            <td>C-3</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=60"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="60"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>130</td>
                            <td style="padding-left: 10px;">CHI PHÍ KHO BÃI - VĂN PHÒNG</td>
                            <td>CHI-D</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=130"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="130"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>67</td>
                            <td style="padding-left: 50px;">Chi Tiền điện, nước, rác (Kho)</td>
                            <td>C-10</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=67"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="67"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>68</td>
                            <td style="padding-left: 50px;">Chi Tiền thuê nhà / thuê kho</td>
                            <td>C-11</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=68"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="68"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>69</td>
                            <td style="padding-left: 50px;">Chi Cơ sở vật chất (trừ VPP)</td>
                            <td>C-12</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=69"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="69"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>95</td>
                            <td style="padding-left: 50px;">Chi mua VPP</td>
                            <td>C-17</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=95"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="95"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>97</td>
                            <td style="padding-left: 50px;">Chi Internet, điện thoại</td>
                            <td>C-19</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=97"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="97"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>107</td>
                            <td style="padding-left: 50px;">Chi Tiền điện, nước, rác (407 NTT)</td>
                            <td>C-23</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=107"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="107"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>131</td>
                            <td style="padding-left: 10px;">THU CÁC KHOẢN KHÁC</td>
                            <td>THU-C</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=131"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="131"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>112</td>
                            <td style="padding-left: 50px;">Thu khác</td>
                            <td>T-14</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=112"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="112"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>122</td>
                            <td style="padding-left: 50px;">Nhân viên mua hàng</td>
                            <td>T-17</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=122"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="122"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>132</td>
                            <td style="padding-left: 10px;">CHUYỂN TIỀN QUA LẠI</td>
                            <td>THUCHI</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=132"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="132"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>108</td>
                            <td style="padding-left: 50px;">Thu nhập Quỹ tiền mặt (từ Tài khoản NH)
                            </td>
                            <td>T-13</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=108"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="108"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>109</td>
                            <td style="padding-left: 50px;">Chi rút tài khoản (chuyển tiền mặt)</td>
                            <td>C-24</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=109"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="109"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>133</td>
                            <td style="padding-left: 10px;">CHI CÁC KHOẢN KHÁC</td>
                            <td>CHI-E</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=133"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="133"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>110</td>
                            <td style="padding-left: 50px;">Chi tiền phí ngân hàng</td>
                            <td>C-25</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=110"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="110"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>113</td>
                            <td style="padding-left: 50px;">Chi khác</td>
                            <td>C-27</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=113"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="113"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>114</td>
                            <td style="padding-left: 50px;">Chi tạm ứng mua đồ (Hoàn lại tiền)</td>
                            <td>C-28</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=114"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="114"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>153</td>
                            <td style="padding-left: 50px;">Chi tự mua hàng đánh giá</td>
                            <td>C-DG</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=153"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="153"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>154</td>
                            <td style="padding-left: 50px;">Chi hoa hồng đối tác</td>
                            <td>C-HH</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=154"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="154"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>134</td>
                            <td style="padding-left: 10px;">CHI - CÔNG NỢ ; TRẢ NỢ</td>
                            <td>CHI-F</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=134"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="134"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>71</td>
                            <td style="padding-left: 50px;">Chi công nợ / TT tiền hàng NCC</td>
                            <td>C-14</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=71"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="71"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>73</td>
                            <td style="padding-left: 50px;">Chi thanh toán lãi</td>
                            <td>C-20</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=73"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="73"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>78</td>
                            <td style="padding-left: 50px;">Chi thanh toán nợ</td>
                            <td>C-21</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=78"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="78"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>135</td>
                            <td style="padding-left: 10px;">CHI - SỰ CỐ ĐƠN HÀNG</td>
                            <td>CHI-G</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=135"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="135"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>111</td>
                            <td style="padding-left: 50px;">Chi hoàn tiền đơn hàng</td>
                            <td>C-26</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=111"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="111"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>121</td>
                            <td style="padding-left: 50px;">Chi truy thu / phí chuyển hoàn / Đền bù
                            </td>
                            <td>C-30</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=121"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="121"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>136</td>
                            <td style="padding-left: 10px;">CHI - THUẾ; CA; QLTT</td>
                            <td>CHI-H</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=136"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="136"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td style="padding-left: 50px;">Chi tiền Quản lý thị trường, Công An,
                                PCCC</td>
                            <td>C-6</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=63"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="63"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>70</td>
                            <td style="padding-left: 50px;">Chi Tiền thuế / hoá đơn VAT</td>
                            <td>C-13</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=70"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="70"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>137</td>
                            <td style="padding-left: 10px;">CHI - MARKETING</td>
                            <td>CHI-I</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=137"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="137"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>72</td>
                            <td style="padding-left: 50px;">Chi Quảng cáo, website, chụp ảnh</td>
                            <td>C-15</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Sportslink Việt Nam</td>
                            <td style="position: relative">Nguyễn Nhật Nam</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=72"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="72"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td style="padding-left: 10px;">Thu tiền mua vận dụng công ty</td>
                            <td>1</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Công ty TNHH LaVie</td>
                            <td style="position: relative">tkgiamdoc</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=52"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="52"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>26</td>
                            <td style="padding-left: 10px;">Chi tiền cộng dịch vụ</td>
                            <td>0009</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=26"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="26"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td style="padding-left: 10px;">Chi lương</td>
                            <td>0001</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=38"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="38"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>39</td>
                            <td style="padding-left: 10px;">Chi nộp thuế TNDN</td>
                            <td>0002</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=39"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="39"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td style="padding-left: 10px;">Chi thưởng tuần</td>
                            <td>0004</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=40"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="40"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>41</td>
                            <td style="padding-left: 10px;">Chi nop thuế GTGT</td>
                            <td>0005</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=41"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="41"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td style="padding-left: 10px;">Chi Khác</td>
                            <td>0006</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=42"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="42"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>43</td>
                            <td style="padding-left: 10px;">Chi Thanh Lý</td>
                            <td>0007</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=43"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="43"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td style="padding-left: 10px;">Chi bảo hiểm</td>
                            <td>00010</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=45"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="45"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>46</td>
                            <td style="padding-left: 10px;">Chi VPP</td>
                            <td>0012</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=46"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="46"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td style="padding-left: 10px;">Chi mực in</td>
                            <td>0013</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=47"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="47"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>48</td>
                            <td style="padding-left: 10px;">Chi nước uống VP</td>
                            <td>0014</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=48"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="48"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td style="padding-left: 10px;">Chi tiền gửi xe</td>
                            <td>0015</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=49"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="49"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>50</td>
                            <td style="padding-left: 10px;">Tạm ứng</td>
                            <td>1411</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=50"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="50"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td style="padding-left: 10px;">Vay quỹ chi nhánh</td>
                            <td>088</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=51"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="51"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>53</td>
                            <td style="padding-left: 10px;">Nộp thuế TNCN</td>
                            <td>3335</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=53"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="53"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td style="padding-left: 10px;">Chi MKT</td>
                            <td>0016</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=56"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="56"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>57</td>
                            <td style="padding-left: 10px;">Thu MKT</td>
                            <td>0017</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=57"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="57"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>77</td>
                            <td style="padding-left: 10px;">Mua tài sản công ty</td>
                            <td>0211</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=77"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="77"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>79</td>
                            <td style="padding-left: 10px;">Thu tiền đấu giá</td>
                            <td>0129</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=79"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="79"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>80</td>
                            <td style="padding-left: 10px;">CHI PHÚC LỢI</td>
                            <td>0018</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lưu Thị Ngọc Bích</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=80"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="80"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>143</td>
                            <td style="padding-left: 10px;">Chi thuê văn phòng</td>
                            <td>111111</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=143"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="143"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>152</td>
                            <td style="padding-left: 10px;">Thu tiền bảo hiểm</td>
                            <td>11123</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=152"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="152"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>155</td>
                            <td style="padding-left: 10px;">Chi nộp các loại thuế khác</td>
                            <td>3338</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lê Quỳnh Thủy Tiên</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=155"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="155"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>156</td>
                            <td style="padding-left: 10px;">Chi chuyển quỹ HN</td>
                            <td>1361</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lê Quỳnh Thủy Tiên</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=156"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="156"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>169</td>
                            <td style="padding-left: 10px;">Chi tiền cước điện thoại, internet</td>
                            <td>11219</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lê Quỳnh Thủy Tiên</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=169"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="169"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>170</td>
                            <td style="padding-left: 10px;">Chi trả tiền bằng nhân viên</td>
                            <td>11118</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lê Quỳnh Thủy Tiên</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=170"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="170"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>171</td>
                            <td style="padding-left: 10px;">Chi chuyển quỹ</td>
                            <td>1112</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td style="position: relative">Lê Quỳnh Thủy Tiên</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=171"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="171"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td style="padding-left: 10px;">Xin mua tài sản</td>
                            <td>01</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hà Nội</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=25"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="25"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>27</td>
                            <td style="padding-left: 10px;">Khoản giữ lại MKT</td>
                            <td>0001</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hà Nội</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=27"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="27"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td style="padding-left: 10px;">Chi khác</td>
                            <td>0008</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Vật giá - Hà Nội</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=44"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="44"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>28</td>
                            <td style="padding-left: 10px;">Thu khác</td>
                            <td></td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Hoàng Thị Xuân Mai</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=28"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="28"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>149</td>
                            <td style="padding-left: 10px;">Chi khác</td>
                            <td>1112</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>VNP group</td>
                            <td style="position: relative">Phạm Xuân Hùng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=149"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="149"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>147</td>
                            <td style="padding-left: 10px;">Thuê văn phòng chi nhánh Đà Nẵng</td>
                            <td>001</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Nhanh.vn</td>
                            <td style="position: relative">Trần Thị Hằng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=147"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="147"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>148</td>
                            <td style="padding-left: 10px;">Chi tiền internet</td>
                            <td>002</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Nhanh.vn</td>
                            <td style="position: relative">Trần Thị Hằng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=148"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="148"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr class="even">
                            <td>150</td>
                            <td style="padding-left: 10px;">Chi tiền mặt</td>
                            <td>003</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Nhanh.vn</td>
                            <td style="position: relative">Trần Thị Hằng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=150"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="150"
                                    class="fa fa-trash-o deleteAccount del_Item mgleft5"></a></td>
                        </tr>
                        <tr>
                            <td>151</td>
                            <td style="padding-left: 10px;">Chi tiền điện</td>
                            <td>004</td>
                            <td style="width:30px;"><i style="color:green;font-size:14px;"
                                    class="fa fa-check-circle"></i></td>
                            <td>Nhanh.vn</td>
                            <td style="position: relative">Trần Thị Hằng</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/accounting/expense/editcategory?id=151"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/accounting/expense/category#"
                                    value="151"
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
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/expense/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/expense/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/expense/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/expense/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/expense/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/expense/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/expense/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/expense/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/expense/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/expense/saved_resource(1)') }}"></script>
	

@endsection
