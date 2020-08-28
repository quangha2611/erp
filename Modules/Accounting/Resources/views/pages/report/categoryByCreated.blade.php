@extends('accounting::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/accounting/report/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Báo cáo theo người tạo')

@section('content-page')

<div class="col-md-10 content-wrapper">

    <ul class="breadcrumb">
        <li>
			<a href="https://erp.nhanh.vn/accounting">
				<i class="fa fa-home"></i>
			</a>
		</li>
        <li>
			<a href="https://erp.nhanh.vn/accounting/account/index">
				Danh sách thu chi kế toán theo người tạo
			</a>
		</li>
    </ul>
    <div class="filterContainer">
        <form method="GET" name="transactionFilter" class="form-inline lolify" role="form"
            id="transactionFilter">
            <div class="col-md-10 lolify-default">

                <div class="form-group">
                    <input type="text" name="applyDate" class="form-control date-range-picker"
                        id="applyDate" value="01/07/2020 - 31/07/2020"> </div>
                <div class="form-group">
                    <input type="text" name="q" maxlength="255" placeholder="Tên hoặc mã code"
                        id="q" class="form-control" value=""> </div>
                <div class="form-group">
                    <select name="companyId" id="companyId" class="form-control">
                        <option value="">- Công ty -</option>
                        @include('accounting::pages.report.include._inc_recursiveInput',[
                            'data' => $companies,
                            'parentId' => null,
                            'note' => '--'
                        ])
                    </select> </div>
                <div class="form-group">
                    <select name="departmentId" id="departmentId" class="form-control">
                        <option value="">- Phòng ban -</option>
                        <option value="516">Phòng chăm sóc khách hàng - Online</option>
                        <option value="520">IT</option>
                        <option value="522">-- IT-Vật Giá</option>
                        <option value="1295">-- -- IT - Anh Toản</option>
                        <option value="1296">-- -- IT - Anh Tuấn</option>
                        <option value="523">-- IT-Sever</option>
                        <option value="532">Tài chính</option>
                        <option value="535">-- Tài chính - Kế toán</option>
                        <option value="548">-- Tư pháp</option>
                        <option value="538">Nhân sự</option>
                        <option value="539">-- HCNS</option>
                        <option value="541">-- Tuyển Dụng</option>
                        <option value="544">-- Đào tạo</option>
                        <option value="606">-- PR nội bộ</option>
                        <option value="613">Pub.vn</option>
                        <option value="619">123doc</option>
                        <option value="1048">Vchat</option>
                        <option value="1094">BA</option>
                        <option value="1106">Sales</option>
                        <option value="550">-- Sale Sàn</option>
                        <option value="551">-- -- Phòng KD 2</option>
                        <option value="560">-- -- Phòng KD 4</option>
                        <option value="1265">-- -- -- Phòng KD 4.1</option>
                        <option value="1266">-- -- -- Phòng KD 4.2</option>
                        <option value="1267">-- -- -- Phòng KD 4.3</option>
                        <option value="561">-- -- Phòng KD 6</option>
                        <option value="1162">-- -- -- Nhóm KD 6.1</option>
                        <option value="567">-- -- Phòng KD 9</option>
                        <option value="570">-- -- -- Nhóm KD 9.1</option>
                        <option value="1122">-- -- Phòng KD 10</option>
                        <option value="1134">-- -- Phòng KD 5</option>
                        <option value="1146">-- -- Phòng KD 7</option>
                        <option value="552">-- -- -- Nhóm KD 7.2</option>
                        <option value="572">-- -- -- Nhóm KD 7.1</option>
                        <option value="591">-- Phòng CSGH</option>
                        <option value="1111">Wesave</option>
                        <option value="1166">Nhập liệu - CSKH</option>
                        <option value="1167">Hỏi đáp - CSKH</option>
                        <option value="1303">So Sánh Nhà</option>
                        <option value="1305">Content Marketing</option>
                        <option value="1306">Dự án</option>
                        <option value="1290">-- Bizshare</option>
                        <option value="1426">Dự án VNP Software</option>
                    </select> </div>
                    <div class="form-group">
                    <input name="submit" type="submit" id="btnFilterCompanyContact"
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
                        <li><a id="exportAll"
                                href="https://erp.nhanh.vn/accounting/report/transactionbycreated#"><i
                                    class="fa fa-file-excel-o"></i> Xuất toàn bộ</a></li>
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
                    <select name="accountId" style="min-width:200px" id="accountId"
                        class="form-control" tabindex="-1"
                        aria-hidden="true">
                        <option value="">- Quỹ -</option>
                        <option value="321">Tiền chuyển khoản</option>
                        <option value="880">-- Khối KD độc lập (CK)</option>
                        <option value="878">-- Welove (Chuyển khoản)</option>
                        <option value="876">-- Nhanh HCM(Phần cứng)</option>
                        <option value="874">-- Nhanh HN(Phần cứng)</option>
                        <option value="872">-- Bizshare HCM</option>
                        <option value="870">-- WeHelp</option>
                        <option value="868">-- 9houz (HCM)</option>
                        <option value="866">-- Nhanh Đà Nẵng(CK)</option>
                        <option value="864">-- Nhanh HN 2019 (Chuyển khoản)</option>
                        <option value="856">-- Nhanh HCM 2019 (Chuyển khoản)</option>
                        <option value="854">-- 9houz</option>
                        <option value="815">-- KyNguyenSo</option>
                        <option value="813">-- Bizshare</option>
                        <option value="810">-- Wesave Hồ Chí Minh</option>
                        <option value="809">-- Vchat</option>
                        <option value="807">-- WeMarry</option>
                        <option value="804">-- IKI</option>
                        <option value="783">-- WeSave Hà Nội</option>
                        <option value="775">-- Vật Giá Đà Nẵng</option>
                        <option value="773">-- Elite</option>
                        <option value="770">-- Doanh thu phần cứng</option>
                        <option value="319">-- Vận chuyển Nhanh</option>
                        <option value="318">-- Doanh thu VC Nhanh</option>
                        <option value="309">-- Nhanh HCM</option>
                        <option value="308">-- Nhanh HN</option>
                        <option value="305">-- Cty cổ phần Vật Giá VN</option>
                        <option value="307">-- -- Vật Giá HCM</option>
                        <option value="306">-- -- Vật Giá HN</option>
                        <option value="320">Tiền mặt</option>
                        <option value="879">-- Khối KD độc lập (TM)</option>
                        <option value="877">-- Welove (Tiền mặt)</option>
                        <option value="875">-- Nhanh HCM(Phần cứng)</option>
                        <option value="873">-- Nhanh HN(Phần cứng)</option>
                        <option value="871">-- Bizshare HCM</option>
                        <option value="869">-- WeHelp</option>
                        <option value="867">-- 9houz (HCM)</option>
                        <option value="865">-- Nhanh Đà Nẵng (TM)</option>
                        <option value="863">-- Nhanh HN 2019 (Tiền mặt)</option>
                        <option value="855">-- Nhanh HCM 2019 (Tiền mặt)</option>
                        <option value="853">-- 9houz</option>
                        <option value="814">-- KyNguyenSo</option>
                        <option value="812">-- Bizshare</option>
                        <option value="811">-- Wesave Hồ Chí Minh</option>
                        <option value="808">-- Vchat</option>
                        <option value="806">-- WeMarry</option>
                        <option value="803">-- IKI</option>
                        <option value="799">-- Amall</option>
                        <option value="798">-- 123Study</option>
                        <option value="784">-- WeSave Hà Nội</option>
                        <option value="777">-- WeStay</option>
                        <option value="774">-- Vật giá Đà Nẵng</option>
                        <option value="772">-- Elite</option>
                        <option value="771">-- Doanh thu phần cứng</option>
                        <option value="769">-- Elite</option>
                        <option value="768">-- WeSave</option>
                        <option value="304">-- Nhanh HCM</option>
                        <option value="303">-- Nhanh HN</option>
                        <option value="300">-- Cty cổ phần Vật Giá VN</option>
                        <option value="302">-- -- Vật Giá HCM</option>
                        <option value="301">-- -- Vật Giá HN</option>
                        <option value="542">-- -- -- Quỹ Maketing(VG Hà Nội)</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="expenseCategoryId" style="min-width:200px"
                        id="expenseCategoryId" class="form-control" tabindex="-1" aria-hidden="true">
                        <option value="">- Khoản mục -</option>
                        @include('accounting::pages.report.include._inc_recursiveInput',[
                            'data' => $categories,
                            'parentId' => null,
                            'note' => '--'
                        ])
                    </select>
                </div>
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
                        <th style="width: 87px;">Mã code</th>
                        <th style="width: 261px;">Tên nhân viên</th>
                        <th style="width: 201px;">Công ty</th>
                        <th style="width: 336px;">Phòng ban</th>
                        <th style="width: 178px;">Số lượng phiếu thu</th>
                        <th style="width: 152px;">Giá trị thu</th>
                        <th style="width: 178px;">Số lượng phiếu chi</th>
                        <th style="width: 162px;">Giá trị chi</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 dgButtons"></div>
            <div style="clear: both;"></div><br>
        </div>
        <table id="dgTransaction" class="table table-bordered">
            <thead>
                <tr class="even">
                    <th>Mã code</th>
                    <th>Tên nhân viên</th>
                    <th>Công ty</th>
                    <th>Phòng ban</th>
                    <th>Số lượng phiếu thu</th>
                    <th>Giá trị thu</th>
                    <th>Số lượng phiếu chi</th>
                    <th>Giá trị chi</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $totalPayment=0; $totalReciever=0; $totalAmountPayment=0; $totalAmountReciever=0
                @endphp
                @foreach ($data as $item)
                    <tr class="">
                        <td>{{$item['user']->id}}</td>
                        <td>
                            <a>{{ $item['user']->name }}</a>
                        </td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Tuyển dụng</td>
                        <td class="colNumber">
                            @if($item['reciever'] != 0)
                                {{ $item['reciever'] }}
                            @endif
                        </td>
                        <td class="colNumber">
                            @if($item['amountReceiver'] != 0)
                                {{ $item['amountReceiver'] }}
                            @endif
                        </td>
                        <td class="colNumber">
                            @if($item['payment'] != 0)
                                {{ $item['payment'] }}
                            @endif
                        </td>
                        <td class="colNumber">
                            @if($item['amountPayment'] != 0)
                                {{ $item['amountPayment'] }}
                            @endif
                        </td>
                    </tr>
                    @php
                        $totalPayment        += $item['payment'];
                        $totalReciever       += $item['reciever']; 
                        $totalAmountReciever += $item['amountReceiver']; 
                        $totalAmountPayment  += $item['amountPayment']; 
                    @endphp
                @endforeach
                <tr class="rowEnd even">
                    <td colspan="4"><b>Tổng</b></td>
                    <td class="colNumber"> <b>{{ $totalReciever }}</b></td>
                    <td class="colNumber"> <b class="red">{{ $totalAmountReciever }}</b></td>
                    <td class="colNumber" colspan="1"><b>{{ $totalPayment }}</b></td>
                    <td class="colNumber" colspan="1"><b class="red">{{ $totalAmountPayment }}</b></td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6 dgButtons"></div>
        </div>
    </div>
    <style>
        #dgTransaction i.date {
            font-size: 0.85em;
        }

        b.red {
            color: #ff0000;
        }

        .rowEnd {
            background: #f1f1f1;
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
