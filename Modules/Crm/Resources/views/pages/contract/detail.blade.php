@extends('crm::layouts.master')

@section('title','ERP-Chi tiết hợp đồng')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/contract/style.css') }}" type="text/css">
    <script type="text/javascript" src="{{ asset('js/crm/contract/config.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/crm/contract/editor.css') }}">
	<script type="text/javascript" src="{{ asset('js/crm/contract/vi.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/crm/contract/styles.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/plugin.js') }}"></script>

    {{-- Select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    {{-- Jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/contract/index">Danh sách hợp đồng</a></li>
            <li class="active">Chi tiết hợp đồng</li>
        </ul>
        <div class="main-header">
            <h2>Chi tiết hợp đồng</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
            <div style="float:right;" class="bt-group">
                <div class="dropdown" style="display: inline-block;">
                    <button class="btn btn-default dropdown-toggle" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-plus-square icon text-success"></i>
                    </button>
                    <ul class="dropdown-menu" style="right: 0 !important; left: unset !important">
                        <li>
                            <a href="https://erp.nhanh.vn/crm/contract/addscheduce?contractId=63312">
                                Thêm lịch hẹn thanh toán
                            </a>
                        </li>
                        <li>
                            <a class="share-contract-btn" href="https://erp.nhanh.vn/crm/contract/detail?id=63312#"
                                data-link="/crm/contract/detail?id=63312&amp;token=4961f246e2c5ab1b84b19dc51701b8de">
                                Lấy link chia sẻ
                            </a>
                        </li>
                    </ul>

                </div>&nbsp;
                <a href="{{ route('get.crm.contract.preview',['id'=>$contract->id]) }}"
                    data-toggle="tooltip" data-original-title="In hợp đồng" class="btn btn-default">
                    <i class="fa fa-print icon text-info"></i>
                </a>&nbsp;
                <a id="delete-item" data-id="63312" href="https://erp.nhanh.vn/crm/contract/detail?id=63312#"
                    class="btn btn-default" data-toggle="tooltip"
                    data-original-title="Hủy hợp đồng">
                    <i class="fa fa-minus-circle icon text-danger"></i>
                </a>
            </div>

        </div>
        <div id="share-link-alert" style="display:none;">
        </div>
        <div>
            <div class="form-horizontal">
                <fieldset style="width:100%;">
                    <div class="col-md-6">
                        <legend>Hợp đồng 
                            <span style="font-size: 12px;font-style: italic" class="{{$contract->is_checked == 0 ? 'text-danger' : 'text-success'}}">
                                (
                                    @if ($contract->is_checked == 0)
                                        <i class="fa fa-warning"></i> Chưa thanh toán
                                    @else 
                                        <i class="fa fa-check"></i> Đã thanh toán
                                    @endif
                                )
                            </span> 
                        </legend>
                        <div class="form-group">
                            <div class="col-xs-4">Công ty kí:</div>
                            <div class="col-xs-8">
                                <b> {{$contract->company->name}} </b>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">ID</div>
                            <div class="col-xs-8">
                                <span> 
                                    <a href="https://erp.nhanh.vn/crm/contract/detail?id=63312"> {{$contract->id}} </a>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">Trạng thái:</div>
                            <div class="col-xs-8">
                                <span>
                                    <span class="text-warning">
                                        <i class="fa fa-exclamation-triangle"></i> Mới 
                                    </span>
                                </span>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-xs-4">Loại HĐ:</div>
                            <div class="col-xs-8">
                                <span>
                                    <b>{{ $contract->type->name }} ({{ $contract->signType->name }} )</b>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">Ngành hàng:</div>
                            <div class="col-xs-8"> <b>{{ $contract->major->name }}</b></div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">Ngày kí:</div>
                            <div class="col-xs-8">
                                <span>
                                    <i class="fa fa-calendar"></i>
                                    {{ $contract->sign_date }}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">Thời hạn:</div>
                            <div class="col-xs-8">
                                @if ($contract->end_date != NULL)
                                    <b>{{ abs(strtotime($contract->end_date) - strtotime($contract->start_date)) }} tháng</b>
                                @else
                                    <b>__ tháng</b>
                                @endif
                                <span>
                                    ({{ $contract->start_date }} - <span class="text-danger"><i
                                            class="fa fa-minus-circle"></i>{{ $contract->end_date }}</span>)
                                </span>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-2">Hóa đơn:</div>
                            <div class="col-xs-10">

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <legend>
                            Khách hàng
                        </legend>
                        <div class="form-group">
                            <div class="col-xs-4">
                                Tên khách hàng:
                            </div>
                            <div class="col-xs-8">
                                <a href="https://erp.nhanh.vn/crm/lead/view?id=407346">
                                    {{ $contract->customer->name }}
                                </a>
                                <span class="text-muted">(nguồn: {{ $contract->customer->source->name }})</span> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">  Loại khách hàng: </div>
                            <div class="col-xs-8"> {{ $contract->customer->type->name }}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                Số điện thoại:
                            </div>
                            <div class="col-xs-8"> {{ $contract->customer->phone }} </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-4">
                                Địa chỉ:
                            </div>
                            <div class="col-xs-8">
                                {{ $contract->customer->address }}  </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                CMND:
                            </div>
                            <div class="col-xs-8">
                                {{ $contract->customer->identification }}  - 
                                @if ($contract->customer->identification_place != NULL) 
                                    {{ $contract->customer->identification_place }} 
                                @else
                                    Nơi cấp
                                @endif
                                -
                                @if ($contract->customer->identification_date != NULL) 
                                    {{ $contract->customer->identification_date }} 
                                @else 
                                    Ngày cấp
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                Mã số thuế:
                            </div>
                            <div class="col-xs-8">
                                {{ $contract->customer->taxcode }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                Email:
                            </div>
                            <div class="col-xs-8">
                                {{ $contract->customer->email }}
                            </div>
                        </div>


                        <div class="clearfix" style="margin: 15px 0;">
                            <a id="toggleCustomerAdditionalData" class="text-info" onclick="document.getElementById('customerAdditionalData').classList.toggle('hide')">
                                <i class="currentControle">(+)</i> Thông tin thêm
                            </a>
                        </div>

                        <div id="customerAdditionalData" class="hide clearfix">
                            <div class="form-group">
                                <div class="col-xs-4">
                                    Email đăng ký Nhanh.vn:
                                </div>
                                <div class="col-xs-8">
                                    <b></b> </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    Doanh nghiệp trên Nhanh:
                                </div>
                                <div class="col-xs-8">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    Facebook:
                                </div>
                                <div class="col-xs-8">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    Website:
                                </div>
                                <div class="col-xs-8">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-4">
                                    Fax:
                                </div>
                                <div class="col-xs-8">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-xs-4">
                                    Người đại diện (NĐD):
                                </div>
                                <div class="col-xs-8">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-4">
                                    Chức vụ NĐD:
                                </div>
                                <div class="col-xs-8">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-4">
                                    ĐT liên hệ NĐD:
                                </div>
                                <div class="col-xs-8">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-4">
                                    Email Liên hệ NĐD:
                                </div>
                                <div class="col-xs-8">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 row">
                        <div class="col-md-12">
                            <legend>Sản phẩm</legend>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Sản phẩm</th>
                                        <th class="colNb">Số lượng</th>
                                        <th class="colNb">Số tháng</th>
                                        <th class="colNb">Giá</th>
                                        <th class="colNb">VAT</th>
                                        <th colspan="2" class="">Giảm giá</th>
                                        <th class="colNb">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalAllMoney = 0;
                                    @endphp
                                    @foreach ($contract->listOfProduct as $product)
                                        @php
                                            $totalAllMoney += intval($product['amount']) * intval($product['price']) * intval($product['vat'] + 100) / 100
                                        @endphp
                                        <tr>
                                            <td>{{ $product['id'] }}</td>
                                            <td>{{$product['name']}}</td>
                                            <td class="colNb">{{ $product['amount'] }}</td>
                                            <td class="colNb"> 1 </td>
                                            <td class="colNb">{{ number_format($product['price']) }}</td>
                                            <td class="colNb">{{$product['vat']}}</td>
                                            <td class="colNb"></td>
                                            <td class="colNb"></td>
                                            <td class="colNb">{{ number_format(intval($product['amount']) * intval($product['price'] * (intval($product['vat']) + 100)/100) ) }}</td>
                                        </tr>
                                    @endforeach
                                    <tr class="">
                                        <td class="colNb" colspan="8" style="text-align: right">
                                            <b style="margin-right: -60px">Tổng: </b>
                                        </td>
                                        <td class="colNb">{{ number_format($totalAllMoney) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-12">
                            <legend>Hoa hồng</legend>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="col-align-center">ID</th>
                                        <th class="col-align-center">Nhân viên</th>
                                        <th class="col-align-center">Sản phẩm</th>
                                        <th class="col-align-center">Đứng tên</th>
                                        <th class="col-align-center">Doanh số (%)</th>
                                        <th class="col-align-center">Doanh số (VNĐ)</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contract->listOfEmployee as $employee)
                                        <tr>
                                            <td>{{ $employee['id'] }}</td>
                                            <td>{{ $employee['name'] }}</td>
                                            <td>{{ $employee['product']['name'] }}</td>
                                            <td class="col-align-center">
                                            </td>
                                            <td class="colNb">{{ number_format($employee['percent']) }}</td>
                                            <td class="colNb">{{ number_format(intval($employee['product']['amount'])
                                                                 *intval($employee['product']['price'])
                                                                 *intval($employee['percent'])
                                                                 *(intval($employee['product']['vat']) +100) / 100 / 100 ) }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <legend>Thanh toán</legend>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Loại phiếu</th>
                                    <th>Trạng thái</th>
                                    <th>Chi tiết</th>
                                    <th>Người tạo</th>
                                    <th>Ngày duyệt</th>
                                    <th>Ngày tạo</th>
                                    <th class="col-align-right">Số tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="7" style="text-align: left"><b>Giá trị hợp đồng</b></td>
                                    <td class="col-align-right">{{ number_format($totalAllMoney) }}</td>
                                </tr>
                                <tr>
                                    <td colspan="7" style="text-align: left"><b>Đã trả</b></td>
                                    @if($contract->is_checked == 1)
                                        <td class="col-align-right">{{ number_format($totalAllMoney) }}</td>
                                    @else
                                        <td class="col-align-right">0</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td colspan="7" style="text-align: left"><b>Còn lại</b></td>
                                    @if($contract->is_checked == 1)
                                        <td class="col-align-right">0</td>
                                    @else
                                        <td class="col-align-right">{{ number_format($totalAllMoney) }}</td>
                                    @endif

                                </tr>
                            </tbody>
                        </table>
                    </div>





                    <div class="col-md-12" id="upload-file-content">
                        <div class="col-md-5">
                            <button id="addFile" class="btn btn-success"><i
                                    class="fa fa-upload"></i> Upload</button>
                            <div class="description text-muted fontsize-85"><i>Upload file scan
                                    CMND, sổ thuế, giấy phép kinh doanh... ở đây</i></div>
                        </div>
                        <div class="col-md-7 alert alert-info">
                            <b>Hồ sơ đã có:</b> <input class="checkAll" type="checkbox"> <span>Chọn
                                tất cả</span>


                            <div class="clearfix"></div>
                            <div class="col-md-6">
                                <input data-type="2" class="type" type="checkbox"> <span>Chứng minh
                                    nhân dân</span>
                            </div>
                            <div class="col-md-6">
                                <input data-type="3" class="type" type="checkbox"> <span>Giấy phép
                                    kinh doanh</span>
                            </div>
                            <div class="col-md-6">
                                <input data-type="4" class="type" type="checkbox"> <span>Sổ
                                    thuế</span>
                            </div>
                            <div class="col-md-6">
                                <input data-type="5" class="type" type="checkbox"> <span>Biên bản
                                    bàn giao</span>
                            </div>
                            <div class="col-md-6">
                                <input data-type="10" class="type" type="checkbox">
                                <span>Khác</span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="alert-message text-success col-md-12">
                                <span style="display:none;cursor:pointer;" href="#"
                                    id="btn-save-type" class="btn btn-info">Xác nhận</span>

                            </div>


                        </div>

                        <div class="col-md-12">
                            <legend>Lịch sử</legend>
                        </div>
                        <div class="group-content col-md-12">
                            <div class="dgContainer widget-content table-responsive">
                                <div style="display: none; width: 1496px;" class="stickyHeader">
                                    <table class="table table-bordered" cellspacing="0"
                                        cellpadding="0">
                                        <thead>
                                            <tr class="even">
                                                <th style="width: 530px;">Thời gian</th>
                                                <th style="width: 486px;">Tạo bởi</th>
                                                <th style="width: 231px;">Loại</th>
                                                <th style="width: 248px;">Thay đổi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="even">
                                            <th>Thời gian</th>
                                            <th>Tạo bởi</th>
                                            <th>Loại</th>
                                            <th>Thay đổi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                        </tr>
                                        <tr class="even">
                                            <td>24/07/2020<span> 21:42:12</span></td>
                                            <td>Phạm Quang Minh</td>
                                            <td>Tạo HĐ</td>
                                            <td style="text-align: center"><i
                                                    class="fa fa-random showHistory"
                                                    style=" cursor: pointer;" data-toggle="tooltip"
                                                    data-historyid="300957" data-placement="top"
                                                    data-original-title="Xem thay đổi"></i></td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <legend>Ghi chú</legend>
                        </div>
                        <div class="col-md-12 group-content">
                            <span>
                                <p>{{ $contract->description }}</p>
                            </span>
                        </div>
                        <div class="col-md-12">
                            <legend>Bình luận</legend>
                        </div>
                        <div class="col-md-9" id="commentArea">

                        </div>
                        <div class="col-md-9" id="addCommentArea">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <textarea rows="8" cols="" class="basicEditor" id="commentInput"
                                    style="visibility: hidden; display: none;"></textarea>
                                <div id="cke_commentInput"
                                    class="cke_1 cke cke_reset cke_chrome cke_editor_commentInput cke_ltr cke_browser_webkit"
                                    dir="ltr" lang="vi" role="application"
                                    aria-labelledby="cke_commentInput_arialbl"><span
                                        id="cke_commentInput_arialbl" class="cke_voice_label">Bộ
                                        soạn thảo văn bản có định dạng, commentInput</span>
                                    <div class="cke_inner cke_reset" role="presentation"><span
                                            id="cke_1_top" class="cke_top cke_reset_all"
                                            role="presentation"
                                            style="height: auto; user-select: none;"><span
                                                id="cke_9" class="cke_voice_label">Thanh công
                                                cụ</span><span id="cke_1_toolbox"
                                                class="cke_toolbox" role="group"
                                                aria-labelledby="cke_9"
                                                onmousedown="return false;"><span id="cke_11"
                                                    class="cke_toolbar" role="toolbar"><span
                                                        class="cke_toolbar_start"></span><span
                                                        id="cke_10"
                                                        class="cke_combo cke_combo__fontsize  cke_combo_off"
                                                        role="presentation"><span id="cke_10_label"
                                                            class="cke_combo_label">Cỡ chữ</span><a
                                                            class="cke_combo_button"
                                                            hidefocus="true" title="Cỡ chữ"
                                                            tabindex="-1" "="" href="
                                                            javascript:void(&#39;Cỡ chữ&#39;)"
                                                            role="button"
                                                            aria-labelledby="cke_10_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(3,event,this);"
                                                            onfocus="return CKEDITOR.tools.callFunction(4,event);"
                                                            onclick="CKEDITOR.tools.callFunction(2,this);return false;"><span
                                                                id="cke_10_text"
                                                                class="cke_combo_text cke_combo_inlinelabel">Cỡ
                                                                chữ</span><span
                                                                class="cke_combo_open"><span
                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_12"
                                                            class="cke_button cke_button__textcolor cke_button_off "
                                                            href="javascript:void(&#39;Màu chữ&#39;)"
                                                            title="Màu chữ" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_12_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(5,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(6,event);"
                                                            onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span
                                                                class="cke_button_icon cke_button__textcolor_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_12_label"
                                                                class="cke_button_label cke_button__textcolor_label"
                                                                aria-hidden="false">Màu
                                                                chữ</span><span
                                                                class="cke_button_arrow"></span></a><a
                                                            id="cke_13"
                                                            class="cke_button cke_button__bgcolor cke_button_off "
                                                            href="javascript:void(&#39;Màu nền&#39;)"
                                                            title="Màu nền" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_13_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(8,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(9,event);"
                                                            onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span
                                                                class="cke_button_icon cke_button__bgcolor_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_13_label"
                                                                class="cke_button_label cke_button__bgcolor_label"
                                                                aria-hidden="false">Màu
                                                                nền</span><span
                                                                class="cke_button_arrow"></span></a><a
                                                            id="cke_14"
                                                            class="cke_button cke_button__bold  cke_button_off"
                                                            href="javascript:void(&#39;Đậm&#39;)"
                                                            title="Đậm" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_14_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(11,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(12,event);"
                                                            onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span
                                                                class="cke_button_icon cke_button__bold_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_14_label"
                                                                class="cke_button_label cke_button__bold_label"
                                                                aria-hidden="false">Đậm</span></a><a
                                                            id="cke_15"
                                                            class="cke_button cke_button__italic  cke_button_off"
                                                            href="javascript:void(&#39;Nghiêng&#39;)"
                                                            title="Nghiêng" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_15_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(14,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(15,event);"
                                                            onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span
                                                                class="cke_button_icon cke_button__italic_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_15_label"
                                                                class="cke_button_label cke_button__italic_label"
                                                                aria-hidden="false">Nghiêng</span></a><a
                                                            id="cke_16"
                                                            class="cke_button cke_button__underline  cke_button_off"
                                                            href="javascript:void(&#39;Gạch chân&#39;)"
                                                            title="Gạch chân" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_16_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(17,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(18,event);"
                                                            onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span
                                                                class="cke_button_icon cke_button__underline_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_16_label"
                                                                class="cke_button_label cke_button__underline_label"
                                                                aria-hidden="false">Gạch
                                                                chân</span></a><a id="cke_17"
                                                            class="cke_button cke_button__link  cke_button_off"
                                                            href="javascript:void(&#39;Chèn/Sửa liên kết&#39;)"
                                                            title="Chèn/Sửa liên kết" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_17_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(20,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(21,event);"
                                                            onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span
                                                                class="cke_button_icon cke_button__link_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_17_label"
                                                                class="cke_button_label cke_button__link_label"
                                                                aria-hidden="false">Chèn/Sửa liên
                                                                kết</span></a><a id="cke_18"
                                                            class="cke_button cke_button__unlink cke_button_disabled "
                                                            href="javascript:void(&#39;Xoá liên kết&#39;)"
                                                            title="Xoá liên kết" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_18_label"
                                                            aria-haspopup="false"
                                                            aria-disabled="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(23,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(24,event);"
                                                            onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span
                                                                class="cke_button_icon cke_button__unlink_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_18_label"
                                                                class="cke_button_label cke_button__unlink_label"
                                                                aria-hidden="false">Xoá liên
                                                                kết</span></a><a id="cke_19"
                                                            class="cke_button cke_button__removeformat  cke_button_off"
                                                            href="javascript:void(&#39;Xoá định dạng&#39;)"
                                                            title="Xoá định dạng" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_19_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(26,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(27,event);"
                                                            onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span
                                                                class="cke_button_icon cke_button__removeformat_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_19_label"
                                                                class="cke_button_label cke_button__removeformat_label"
                                                                aria-hidden="false">Xoá định
                                                                dạng</span></a><a id="cke_20"
                                                            class="cke_button cke_button__maximize  cke_button_off"
                                                            href="javascript:void(&#39;Phóng to tối đa&#39;)"
                                                            title="Phóng to tối đa" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_20_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(29,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(30,event);"
                                                            onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span
                                                                class="cke_button_icon cke_button__maximize_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_20_label"
                                                                class="cke_button_label cke_button__maximize_label"
                                                                aria-hidden="false">Phóng to tối
                                                                đa</span></a></span><span
                                                        class="cke_toolbar_end"></span></span></span></span>
                                        <div id="cke_1_contents" class="cke_contents cke_reset"
                                            role="presentation" style="height: 150px;"><span
                                                id="cke_24" class="cke_voice_label">Nhấn ALT + 0 để
                                                được giúp đỡ</span><iframe
                                                src="./ERP-Chi tiết hợp đồng_files/saved_resource.html"
                                                frameborder="0" class="cke_wysiwyg_frame cke_reset"
                                                style="width: 100%; height: 100%;"
                                                title="Bộ soạn thảo văn bản có định dạng, commentInput"
                                                aria-describedby="cke_24" tabindex="0"
                                                allowtransparency="true"></iframe></div><span
                                            id="cke_1_bottom" class="cke_bottom cke_reset_all"
                                            role="presentation" style="user-select: none;"><span
                                                id="cke_1_resizer"
                                                class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                title="Kéo rê để thay đổi kích cỡ"
                                                onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span
                                                id="cke_1_path_label" class="cke_voice_label">Nhãn
                                                thành phần</span><span id="cke_1_path"
                                                class="cke_path" role="group"
                                                aria-labelledby="cke_1_path_label"><span
                                                    class="cke_path_empty">&nbsp;</span></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-10" style="padding-top: 10px;">
                                <a class="btn btn-primary" id="addComment">Thêm bình luận</a>
                            </div>
                        </div>
                    </div>
                </fieldset>
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
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="alertModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- Dialog bootstrap -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary confirm">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="showhistory" tabindex="-1" role="dialog">
            <div style="min-width:600px;" class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thay đổi lịch sử</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="confirmReapproveModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="referId" value="">
                        <div class="alert alert-warning">Bạn muốn hoàn duyệt hợp đồng này?</div>
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

        <div class="modal fade" id="updateCustomerModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form id="updateCustomerForm" class="">

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary save">Cập nhật</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- /.modal -->

        <div class="modal fade" id="updateServiceModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cập nhật gian hàng cho hợp đồng</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-horizontal">
                                <div style="padding: 5px 3px;" class="service-input-area">
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Tên gian hàng:<span
                                                class="required">*</span></label>
                                        <div class="col-md-7">
                                            <input type="text" id="service-name-txt"
                                                class="form-control service-name-txt ui-autocomplete-input"
                                                placeholder="Tên gian hàng" autocomplete="off">
                                            <input type="hidden" class="form-control serviceId-txt">
                                            <div class="description text-muted fontsize-85">Chưa có
                                                gian hàng thì <a
                                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63312#"
                                                    id="createdNewService"><b
                                                        class="text-danger">Tạo mới!!!</b></a></div>
                                        </div>
                                    </div>
                                    <div style="display:none;" id="show-service-expried-area">
                                        <div class="form-group">
                                            <label class="form-label col-md-3">Ngày bắt đầu:<span
                                                    class="required">*</span></label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-calendar-o"></i></span>
                                                    <input type="text"
                                                        class="datepicker form-control  serviceFromDate">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">Ngày kết thúc:<span
                                                    class="required">*</span></label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-calendar-o"></i></span>
                                                    <input type="text"
                                                        class="datepicker form-control  serviceToDate">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">NV chăm sóc:</label>
                                        <div class="col-md-7">
                                            <input type="text"
                                                class="form-control assignToName-txt ui-autocomplete-input"
                                                placeholder="Tên NV chăm sóc" autocomplete="off">
                                            <input type="hidden"
                                                class="form-control assignToId-txt">
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div style="display:none;padding:15px 0px;"
                                    class="col-md-12 service-show-area">
                                    <label class="form-label col-md-5 ">Tên GH:</label>
                                    <p class="col-md-7 text-success showServiceName">

                                    </p>
                                    <label class="form-label col-md-5 ">Ngày bắt đầu:</label>
                                    <p class="col-md-7 showFromDate">

                                    </p>
                                    <label class="form-label col-md-5 ">Ngày kết thúc:</label>
                                    <p class="col-md-7 showToDate">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary save-update-service">Cập
                            nhật</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div id="addRequirementModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thêm yêu cầu thực hiện dịch vụ</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-horizontal">
                                <div id="requirement-infor-group">
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Công ty thực
                                            hiện:</label>
                                        <div class="col-xs-8">
                                            <select name="companyId" id="companyId"
                                                class="form-control">
                                                <option value="">- Công ty -</option>
                                                <option value="10">VNP group</option>
                                                <option value="2">--Công ty cổ phần Vật Giá Việt Nam
                                                </option>
                                                <option value="315">----Vật giá - Hà Nội</option>
                                                <option value="319">----Vật giá - Hồ Chí Minh
                                                </option>
                                                <option value="365">----Vật giá - Hải Phòng</option>
                                                <option value="387">----WeSave</option>
                                                <option value="389">----123doc.org</option>
                                                <option value="390">----Cunghocvui.com</option>
                                                <option value="391">----123job.vn</option>
                                                <option value="392">----9houz.com</option>
                                                <option value="393">----123dok.com</option>
                                                <option value="321">--Công ty cổ phần TMDT Bảo Kim
                                                </option>
                                                <option value="322">----Bảo Kim - Hà Nội</option>
                                                <option value="323">----Bảo Kim - Hồ Chí Minh
                                                </option>
                                                <option value="324">--Công ty cổ phần Nhanh.vn
                                                </option>
                                                <option value="1">----Nhanh.vn</option>
                                                <option value="366">----Nhanh.vn Đà Nẵng</option>
                                                <option value="395">----Nhanh.vn HCM</option>
                                                <option value="379">--Westay</option>
                                                <option value="384">--Công ty cổ phần WeHelp
                                                </option>
                                                <option value="398">--WeLove</option>
                                            </select> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Phòng ban thực
                                            hiện:</label>
                                        <div class="col-xs-8">
                                            <select id="departmentId" class="form-control">
                                                <option value="586">Thực hiện dịch vụ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Sản phẩm yêu cầu:</label>
                                        <div class="col-xs-8">
                                            <select id="lst-product" class="form-control">
                                                <option value="">- Danh sách sản phẩm -</option>
                                                <option value="513">Chăm sóc fanpage - Gói VIP 1
                                                </option>
                                                <option value="284">Gói Phần mềm quản lý fanpage
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Số tiền:</label>
                                        <div class="col-xs-8" style="position: relative;">
                                            <input type="text" id="requirement-price"
                                                class="form-control">
                                            <div class="icon-group"></div>
                                        </div>
                                    </div>
                                </div>
                                <input id="leadId" type="hidden" value="407346">
                                <input id="accountId" type="hidden" value="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary confirm-requiremnent">Xác
                            nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="updateRequirementModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Cập nhật yêu cầu thực hiện dịch vụ cho hợp đồng</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-horizontal">
                                <div id="requirement-id-group">
                                    <div class="form-group">
                                        <label class="form-label col-md-3">ID yêu cầu:</label>
                                        <div class="col-md-8">
                                            <input type="text" id="requirement-id"
                                                class="form-control requirement-id">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary update-requiremnent">Xác
                            nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="updateKeywordModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Cập nhật từ khóa</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-horizontal">
                                <div id="keyword-id-group">
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Từ khóa:<span
                                                class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input placeholder="Tên từ khóa" type="text"
                                                id="name-keyword-txt" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Khu vực:<span
                                                class="required">*</span></label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="cityId-keyword-select">
                                                <option value="2">Hà Nội</option>
                                                <option value="3">TP Hồ Chí Minh</option>
                                            </select> </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label col-md-3">Trạng thái:<span
                                                class="required">*</span></label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="status-keyword-select">
                                                <option value="1">Đã thanh toán</option>
                                                <option value="2">Chưa thanh toán</option>
                                            </select> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Ngày bắt đầu:</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i
                                                        class="fa fa-calendar-o"></i></span>
                                                <input type="text" id="fromDate-keyword-txt"
                                                    value="27/07/2020"
                                                    class="datepicker form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Ngày kết thúc:</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i
                                                        class="fa fa-calendar-o"></i></span>
                                                <input type="text" id="toDate-keyword-txt"
                                                    value="27/08/2020"
                                                    class="datepicker form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Mô tả thêm:</label>
                                        <div class="col-md-8">
                                            <textarea rows="8" cols="" class="form-control"
                                                id="description-keyword-area"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary update-keyword-btn">Xác
                            nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="acceptRequirementModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-hand-o-right"></i> Kích hoạt yêu cầu
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Ngày bắt đầu:</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i
                                                        class="fa fa-calendar-o"></i></span>
                                                <input type="text"
                                                    class="datepicker form-control  startedDate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Ngày kết thúc:</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i
                                                        class="fa fa-calendar-o"></i></span>
                                                <input type="text"
                                                    class="datepicker form-control  endedDate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Tài khoản nạp:</label>
                                        <div class="col-md-8">
                                            <div class="col-md-6">
                                                <input name="valueType" value="1" class="valueType"
                                                    type="radio"><span>TK chính</span>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="valueType" value="2" class="valueType"
                                                    type="radio"><span>TK Marketing</span>
                                            </div>
                                            <div class="description text-muted fontsize-85"><i>Lưu ý
                                                    chọn chính đúng tài khoản nạp để phục vụ việc
                                                    báo cáo</i></div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Số tiền thực
                                            hiện:</label>
                                        <div class="col-md-8">
                                            <input value="" type="text"
                                                class="form-control isAutonumeric confirmValue">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Phí duy trì ( hoặc phí
                                            khác ):</label>
                                        <div class="col-md-8">
                                            <input type="text"
                                                class="form-control isAutonumeric otherValue">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Khuyến mại:</label>
                                        <div class="col-md-8">
                                            <input type="text"
                                                class="form-control isAutonumeric extraValue">
                                        </div>
                                    </div>

                                    <div class="alert alert-info"><b><i class="fa fa-edit"></i> Lưu
                                            ý:</b> SỐ TIỀN THỰC HIỆN và PHÍ DUY TRÌ sẽ được tính để
                                        trừ nợ nhân viên khi có hợp đồng! KHUYẾN MẠI thì không!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary accept-requirement-btn">Xác
                            nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="uploadFileModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-upload"></i> Upload File mềm</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Loại File:</label>
                                        <div class="col-md-7">
                                            <select id="type-file" class="form-control">
                                                <option value="2">CMND</option>
                                                <option value="3">Giấy phép kinh doanh</option>
                                                <option value="4">Sổ thuế</option>
                                                <option value="10">Khác</option>
                                                <option value="1">File Đính kèm</option>
                                            </select>
                                            <div class="description text-muted fontsize-85"><i>doc,
                                                    docx, png, jpg, jpeg</i></div>
                                        </div>
                                        <div class="col-md-2">
                                            <a id="btnFile" class="btn btn-success"
                                                data-id="63312"><i class="fa fa-upload"></i></a>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input id="file" multiple="multiple" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3"></label>
                                        <div class="col-md-8">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="sharelinkModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-share-alt"></i> Chia sẻ link hợp
                            đồng</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input class="form-control" type="text"
                                                id="showlink-txt"
                                                value=" https://erp.nhanh.vn/crm/contract/detail?id=63312&amp;token=4961f246e2c5ab1b84b19dc51701b8de">
                                            <div class="description text-muted fontsize-85"><i>Bất
                                                    cứ ai đều có thể xem</i></div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="copy-btn" type="button" class="btn btn-success">Coppy</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div id="BillModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">
                            Cập nhật hóa đơn! </h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div style="display: none" class="alert alert-success"></div>
                            <div style="display: none" class="alert alert-danger"></div>
                        </div>
                        <form action="https://erp.nhanh.vn/crm/contract/detail?id=63312"
                            method="post" id="BillForm">
                            <div class="form-group clearfix">
                                <div class="col-md-6">
                                    <lable class="BillLabel">Số hóa đơn</lable>
                                    <input type="text" name="billCode" id="billCode" value=""
                                        placeholder="Mã hóa đơn" class=" form-control input-sm">
                                </div>
                                <div class="col-md-6">
                                    <lable class="BillLabel">Ngày xuất</lable>
                                    <input type="text" name="billDate" id="billDate"
                                        value="24/07/2020" placeholder="Ngày xuất hóa đơn"
                                        class=" datepicker form-control input-sm">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <lable class="BillLabel">Giá trị</lable>
                                    <input type="text" name="billValue" id="billValue" value=""
                                        placeholder="Giá trị hóa đơn"
                                        class="intAutoNumeric form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input name="billStatus" id="billStatus"
                                                type="checkbox">
                                            <span>Nợ hợp đồng (Tích chọn nếu có nợ)</span>
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <div class="col-md-12">
                                    <lable class="BillLabel">Ghi chú</lable>
                                    <textarea name="billNote" id="billNote"
                                        class="form-control placeholder input-sm" rows="4" cols="78"
                                        placeholder="Ghi chú hóa đơn"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary confirmBill">
                            Thêm hóa đơn
                        </button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="updateOriginalStatusModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">
                            Cập nhật trạng thái hợp đồng gốc
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal clearfix">
                            <div style="margin-bottom: 5px;" class="alert alert-info col-md-12">
                                Bạn vui lòng chọn 1 trong 2 trạng thái hợp đồng gốc
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input name="originalStatus" class="originalStatus"
                                            value="1" type="checkbox">
                                        <span>Còn nợ</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input name="originalStatus" class="originalStatus"
                                            value="2" type="checkbox">
                                        <span>Đã nộp</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button data-id="63312" type="button"
                            class="btn btn-primary confirmUpdateOriginalStatus">
                            Lưu
                        </button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateNhanhStoreIdModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update doanh nghiệp trên nhanh</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal inputArea">
                            <div class="form-group">
                                <label class="col-md-4 control-label required">NhanhStoreId</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control nhanhStoreId" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label
                                    class="col-md-4 control-label required">NhanhStoreName</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control nhanhStoreName" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-horizontal loadingArea"
                            style="text-align: center; font-size: 3em; display: none;">
                            <i class="fa fa-refresh"></i>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning save"
                            data-saving-text="Saving...">Lưu</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var contractId = '63312';
            var MSG_POSTING_ERROR = 'Có lỗi xảy ra trong quá trình xử lí';
            var MSG_UPDATE_CUSTOMER_FALL = 'Update khách hàng bị lỗi';
        </script>
        <style>
            .ui-widget-content {
                z-index: 1999;
            }

            legend {
                color: #31708f;
            }

            span.required {
                color: red;
            }

            .icon-group {
                position: absolute;
                right: -9px;
                top: 5px;
            }

            .has-success {
                border: 1px solid #3c763d;
            }

            .has-error {
                border: 1px solid #a94442;
            }

            .error {
                border-color: red;
                color: red;
            }

            .displayDescription {
                background-color: #eee;
                border: 1px solid #ccc;
                padding: 5px 8px;
                min-height: 70px;
            }

            .user-avatar img {
                width: 90%;
                height: 90%;
            }

            .comment {
                margin-bottom: 12px;
            }

            .comment .avatar-box {
                padding: 0px;
            }

            .comment .user-info {
                padding-left: 0px;
            }

            .comment .user-avatar {
                padding: 0px;
                text-align: center;
                border: 1px solid #ccc;
                height: 60px;
                display: block;
                font-size: 3em;
                overflow: hidden;
            }

            .comment .user-avatar image {
                width: 100%;
                height: 100%;
            }

            .comment .content-box {
                min-height: 80px;
                border: 1px solid #ccc;
                position: relative;
            }

            .comment .content-box .left-outline {
                background: none repeat scroll 0 0 #fff;
                border-bottom: 1px solid #d8d8d8;
                border-left: 1px solid #d8d8d8;
                height: 12px;
                left: -7px;
                position: absolute;
                top: 12px;
                transform: rotate(45deg);
                width: 12px;
            }

            .comment .content-box .content {
                padding: 5px;
            }

            .tableContract tbody tr td {
                border: none !important;
            }

            .comment .content-box .action {
                position: absolute;
                right: 5px;
                top: 0;
            }

            .form-group {
                padding: 7px 0 0 0;
            }

            .form-group>.col-md-4 {
                padding: 0 0 0 0;
            }

            #customerAdditionalData .form-group {
                margin-left: 0;
                margin-right: 0;
            }

            .btn-default {
                color: #333;
                background-color: #fff;
                border-color: #ccc;
            }

            .btn-default:hover,
            .btn-default:focus,
            .btn-default:active,
            .btn-default.active,
            .open .dropdown-toggle.btn-default {
                color: #333;
                background-color: #ebebeb;
                border-color: #adadad;
            }

            .btn-default:active,
            .btn-default.active,
            .open .dropdown-toggle.btn-default {
                background-image: none;
            }

            .bill {
                margin-bottom: 5px;
            }
            
            .table > tbody > tr > td, .table > thead > tr > th {
                text-align: center;
            }
        </style>
        <script>
            var today = '24/07/2020';
        </script>
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource(2)') }}"></script>
@endsection