@extends('crm::layouts.master')

@section('title','ERP-Chi tiết thanh toán')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/crm/contract/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crm/contract/style.css') }}" type="text/css">
@endsection

@section('content-page')
    
<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/crm/contract/index">Danh sách hợp đồng</a></li>
        <li><a href="https://erp.nhanh.vn/crm/contract/transaction">Danh sách thanh toán</a>
        </li>
        <li class="active">Chi tiết thanh toán</li>
    </ul>

    <div class="main-header">
        <h2>Chi tiết thanh toán</h2>
        <em>Các trường có dấu * là bắt buộc phải nhập</em>
        <div style="float:right;" class="bt-group">

            @if($contractTransaction->is_checked == 0)
                <a href="#" data-toggle="tooltip" data-original-title="Duyệt phiếu thu" class="btn btn-warning"  onclick="event.preventDefault() ,document.getElementById('checkTransaction').click()">
                    <i class="fa fa-check"></i>
                </a>
                <form action="{{ route('post.crm.contract.checktransaction', ['id' => $contractTransaction->id]) }}" method="POST" onsubmit="return confirm('Sure?')" style="display: none">
                    @csrf
                    <input type="hidden" name="checker_id" value="{{Auth::user()->id}}"/>
                    <input type="hidden" name="checker_time" value="{{ date("Y-m-d H:i:s") }}"/>
                    <input type="hidden" name="is_checked" value="1"/>
                    <input type="hidden" name="contract_id" value="{{$contractTransaction->contract_id}}">
                    <input type="submit" id="checkTransaction"/>
                </form>
            @endif
            <a href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76816"
                data-toggle="tooltip" data-original-title="Sửa phiếu thu"
                class="btn btn-warning"><i class="fa fa-edit"></i></a>
        </div>
    </div>

    <form id="crmContractPayment" name="crmContractPayment" method="post"
        action="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76816">
        <div class="form-horizontal">
            <fieldset style="width:100%;">
                <input type="hidden" name="status" value="" id="status">

                <div class="col-md-6">
                    <legend>Thanh toán</legend>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Ngày tính doanh số: </label>
                        <div class="col-md-8">
                            <b class=""> <i class="fa fa-calendar"></i> </b>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 ">Loại phiếu: </label>
                        <div class="col-md-8">
                            <span class=" ">
                                Phiếu thu 
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Hình thức thanh toán: </label>
                        <div class="col-md-8">
                            <span class=" ">
                                @if($contractTransaction->type_id == 0)
                                    {{ 'Tiền mặt' }}
                                @else
                                    {{ 'Chuyển khoản' }}
                                @endif
                            </span>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label class="col-md-4 col-xs-4">Quỹ: </label>
                        <div class="col-md-8">
                            <span class=" ">
                                Nhanh HCM 2019 (Chuyển khoản) </span>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Số tiền: </label>
                        <div class="col-md-8">
                            <span class=" ">
                                <b>{{ number_format($contractTransaction->contract->total_value) }}</b>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4"> Mô tả: </label>
                        <div class="col-md-8">
                            <div rows="4" cols="" name="description" class=" -refixheight ">{{ $contractTransaction->description }}</div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <legend>
                        Khách hàng
                    </legend>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">
                            Tên khách hàng:
                        </label>
                        <div class="col-md-8">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=404816">{{ $contractTransaction->contract->customer->name }}</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">
                            Loại khách hàng:
                        </label>
                        <div class="col-md-8">{{ $contractTransaction->contract->customer->type->name }}</div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">
                            Số điện thoại:
                        </label>
                        <div class="col-md-8">{{ $contractTransaction->contract->customer->phone }}</div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">
                            Email:
                        </label>
                        <div class="col-md-8">{{ $contractTransaction->contract->customer->email }}</div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">
                            Địa chỉ:
                        </label>
                        <div class="col-md-8 ">{{ $contractTransaction->contract->customer->address }} </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">
                            CMND:
                        </label>
                        <div class="col-md-8">{{ $contractTransaction->contract->customer->identification }}</div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">
                            Mã số thuế:
                        </label>
                        <div class="col-md-8">{{ $contractTransaction->contract->customer->type->taxcode }}</div>
                    </div>
                </div>

                <div class="clearfix"></div>


                <div class="col-md-6">
                    <legend>Hợp đồng
                        (<a href="https://erp.nhanh.vn/crm/contract/detail?id=63135">{{ $contractTransaction->contract->id }}</a>)
                    </legend>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Giá trị:</label>
                        <div class="col-md-8">
                            <a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63135">
                                {{ number_format($contractTransaction->contract->total_value) }} </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Loại HĐ:</label>
                        <div class="col-md-8">
                            <span class=" ">{{ $contractTransaction->contract->type->name }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Hình thức kí:</label>
                        <div class="col-md-8">
                            <span class=" ">{{ $contractTransaction->contract->signType->name }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Ngày bắt đầu:</label>
                        <div class="col-md-8">
                            <span class=" ">{{ $contractTransaction->contract->start_date }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Ngày kết thúc:</label>
                        <div class="col-md-8">
                            <span class=" ">{{ $contractTransaction->contract->end_date }}</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <legend>Tình trạng duyệt</legend>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Người duyệt/ hủy: </label>
                        <div class="col-md-8">
                            <span class="text-info">
                                @if ($contractTransaction->checker_id != null)
                                    {{ $contractTransaction->checker->name }}
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Người tạo: </label>
                        <div class="col-md-8">
                            <span class="">
                                <b>{{ $contractTransaction->user->name }}</b></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-xs-4">Ngày duyệt/ hủy: </label>
                        <div class="col-md-8">
                            <span class="">
                                @if ($contractTransaction->checker_time != null)
                                    {{ $contractTransaction->checker_time }}
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="col-md-12">
                    <legend>Tỷ lệ hưởng doanh số phiếu thu </legend>
                </div>
                <div class="col-md-12">
                    <div class="dgContainer">
                        <div style="display:none" class="stickyHeader">
                            <table class="table table-bordered" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr class="even">
                                        <th rowspan="2">Sản phẩm</th>
                                        <th rowspan="2">Giá trị</th>
                                        <th rowspan="2">GT SP/HD</th>
                                    </tr>
                                    <tr></tr>
                                </thead>
                            </table>
                        </div>
                        <div style="display:none" class="stickyHeader">
                            <table class="table table-bordered" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr class="even">
                                        <th rowspan="2">Sản phẩm</th>
                                        <th rowspan="2">Thu tiền</th>
                                        <th rowspan="2">GT SP/HD</th>
                                    </tr>
                                    <tr></tr>
                                </thead>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 dgButtons"></div>
                            <div style="clear: both;"></div><br>
                        </div>
                        <table class="table table table-hover table-bordered">
                            <thead>
                                <tr class="even">
                                    <th rowspan="2">Sản phẩm</th>
                                    <th rowspan="2">Thu tiền</th>
                                    <th rowspan="2">GT SP/HD</th>
                                </tr>
                                <tr></tr>
                            </thead>
                            <tbody>
                                @foreach ($contractTransaction->contract['listOfProduct'] as $product)
                                    <tr class="even">
                                        <td>{{ $product['name'] }}</td>
                                        <td class="col-align-right">{{ number_format(intval($product['price']) * intval($product['amount']) * (intval($product['vat'])+100) / 100) }}</td>
                                        <td class="col-align-right">{{ round((intval($product['price']) * intval($product['amount']) * (intval($product['vat'])+100) / 100) 
                                                                        *100 / intval($contractTransaction->contract->total_value)).'%' }}</td>
                                    </tr>
                                @endforeach
                                <tr class="success">
                                    <td><b>Tổng</b></td>
                                    <td class="col-align-right ">{{ number_format($contractTransaction->contract->total_value) }}</td>
                                    <td class="col-align-right ">100%</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6 dgButtons"></div>
                        </div>
                    </div>
                </div>

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
                                <th class="colNb">Giảm giá</th>
                                <th class="colNb">Tháng cộng thêm</th>
                                <th class="colNb">Tổng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contractTransaction->contract['listOfProduct'] as $product)
                                <tr>
                                    <td>{{ $product['id'] }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td class="colNb">{{ $product['amount'] }}</td>
                                    <td class="colNb">12</td>
                                    <td class="colNb">{{ number_format($product['price']) }}</td>
                                    <td class="colNb">{{ $product['vat'] }}</td>
                                    <td class="colNb"></td>
                                    <td class="colNb"></td>
                                    <td class="colNb">{{ number_format(intval($product['price']) * intval($product['amount']) * (intval($product['vat'])+100) / 100) }}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <legend>Tỉ lệ hoa hồng theo hợp đồng</legend>
                </div>
                <div class="col-md-12">
                    <div class="dgContainer">
                        <div style="display: none; width: 1526px;" class="stickyHeader">
                            <table class="table table-bordered" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr class="even">
                                        <th rowspan="2" style="width: 751px;">Sản phẩm</th>
                                        <th rowspan="2" style="width: 392px;">Giá trị</th>
                                        <th rowspan="2" style="width: 382px;">GT SP/HD</th>
                                    </tr>
                                    <tr></tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 1526px; display: none;" class="stickyHeader">
                            <table class="table table-bordered" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr class="even">
                                        <th rowspan="2" style="width: 751px;">Sản phẩm</th>
                                        <th rowspan="2" style="width: 392px;">Thu tiền</th>
                                        <th rowspan="2" style="width: 382px;">GT SP/HD</th>
                                    </tr>
                                    <tr></tr>
                                </thead>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 dgButtons"></div>
                            <div style="clear: both;"></div><br>
                        </div>
                        <table class="table table table-hover table-bordered">
                            <thead>
                                <tr class="even">
                                    <th rowspan="2">Sản phẩm</th>
                                    <th rowspan="2">Giá trị</th>
                                    <th rowspan="2">GT SP/HD</th>
                                </tr>
                                <tr></tr>
                            </thead>
                            <tbody>
                                @foreach ($contractTransaction->contract['listOfProduct'] as $product)
                                    <tr class="even">
                                        <td>{{ $product['name'] }}</td>
                                        <td class="col-align-right">{{ number_format(intval($product['price']) * intval($product['amount']) * (intval($product['vat'])+100) / 100) }}</td>
                                        <td class="col-align-right">{{ round((intval($product['price']) * intval($product['amount']) * (intval($product['vat'])+100) / 100) 
                                                                        *100 / intval($contractTransaction->contract->total_value)).'%' }}</td>
                                    </tr>
                                @endforeach
                                <tr class="success">
                                    <td><b>Tổng</b></td>
                                    <td class="col-align-right ">{{ number_format($contractTransaction->contract->total_value) }}</td>
                                    <td class="col-align-right ">100%</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6 dgButtons"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <legend>Bình luận</legend>
                </div>
                <div class="col-md-9" id="commentArea">
                    <div class="comment clearfix">
                        <div class="avatar-box col-md-2">
                            <div class="col-md-12 user-info">
                                <div>
                                    <span class="userName">
                                        Bùi Thị Ngân </span>
                                </div>
                                <div class="fontsize-90 commentDate text-muted">
                                    24/07/2020 </div>
                                <div class="fontsize-90 commentTime text-muted">
                                    12:02:04 </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="content-box ">
                                <div class="left-outline"></div>
                                <div class="content">
                                    <p>Đã đóng 2 bản HĐ</p>
                                </div>
                                <div class="action">
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

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
                                id="cke_commentInput_arialbl" class="cke_voice_label">Bộ soạn
                                thảo văn bản có định dạng, commentInput</span>
                            <div class="cke_inner cke_reset" role="presentation"><span
                                    id="cke_1_top" class="cke_top cke_reset_all"
                                    role="presentation"
                                    style="height: auto; user-select: none;"><span id="cke_9"
                                        class="cke_voice_label">Thanh công cụ</span><span
                                        id="cke_1_toolbox" class="cke_toolbox" role="group"
                                        aria-labelledby="cke_9"
                                        onmousedown="return false;"><span id="cke_11"
                                            class="cke_toolbar" role="toolbar"><span
                                                class="cke_toolbar_start"></span><span
                                                id="cke_10"
                                                class="cke_combo cke_combo__fontsize  cke_combo_off"
                                                role="presentation"><span id="cke_10_label"
                                                    class="cke_combo_label">Cỡ chữ</span><a
                                                    class="cke_combo_button" hidefocus="true"
                                                    title="Cỡ chữ" tabindex="-1" "="" href="
                                                    javascript:void(&#39;Cỡ chữ&#39;)"
                                                    role="button" aria-labelledby="cke_10_label"
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
                                                        aria-hidden="false">Màu chữ</span><span
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
                                                        aria-hidden="false">Màu nền</span><span
                                                        class="cke_button_arrow"></span></a><a
                                                    id="cke_14"
                                                    class="cke_button cke_button__bold  cke_button_off"
                                                    href="javascript:void(&#39;Đậm&#39;)"
                                                    title="Đậm" tabindex="-1" hidefocus="true"
                                                    role="button" aria-labelledby="cke_14_label"
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
                                                    aria-haspopup="false" aria-disabled="true"
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
                                    role="presentation" style="height: 150px;"><span id="cke_24"
                                        class="cke_voice_label">Nhấn ALT + 0 để được giúp
                                        đỡ</span><iframe
                                        src="./ERP-Chi tiết thanh toán_files/saved_resource.html"
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
                                        id="cke_1_path_label" class="cke_voice_label">Nhãn thành
                                        phần</span><span id="cke_1_path" class="cke_path"
                                        role="group" aria-labelledby="cke_1_path_label"><span
                                            class="cke_path_empty">&nbsp;</span></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-10" style="padding-top: 10px;">
                        <a class="btn btn-primary" id="addComment">Thêm bình luận</a>
                    </div>
                </div>

            </fieldset>
        </div>
    </form>
    {{-- <div class="modal fade" id="errorModal">
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

    <div id="modalCheck" class="modal">
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

    <div id="reapproveModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×</button>
                    <h4 class="modal-title">Xác nhận hoàn duyệt phiếu thu</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 form-horizontal">
                            <div class="form-group">
                                <label class="form-label col-md-3">Lý do:<span
                                        style="color: red;" class="required">*</span></label>
                                <div class="col-md-8">
                                    <textarea class="form-control" style="min-height: 90px;"
                                        id="reason"></textarea>
                                    <div class="description text-muted fontsize-85"><b>Bắt
                                            buộc</b> nhập lý do hoàn duyệt!</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary save-approve">Xác nhận</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <div id="addRequirementModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×</button>
                    <h4 class="modal-title">Thêm yêu cầu thực hiện dịch vụ</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info"><b>Lưu ý:</b> Muốn tạo yêu cầu mới, bạn vui
                        lòng chọn mục <b style="color:red;"> TẠO MỚI</b>. Nếu đã tạo yêu cầu từ
                        trước, bạn vui lòng chọn mục <b style="color:red;">ĐÃ CÓ</b> và thêm ID
                        yêu cầu.Cảm ơn!</div>
                    <div class="row">

                        <div class="col-md-12 form-horizontal">
                            <div class="form-group">
                                <label class="form-label col-md-3"></label>
                                <div class="col-md-8">
                                    <label style="margin-top:0px;" class="radio radio-inline">
                                        <input checked="checked" type="radio" value="1"
                                            name="selectRequirement">Đã có
                                    </label>
                                    <label class="radio radio-inline">
                                        <input checked="checked" type="radio" value="2"
                                            name="selectRequirement">Tạo mới
                                    </label>
                                </div>
                            </div>
                            <div id="requirement-id-group" style="display: none;">
                                <div class="form-group">
                                    <label class="form-label col-md-3">ID yêu cầu:</label>
                                    <div class="col-md-8">
                                        <input type="text" id="requirement-id"
                                            class="form-control requirement-id">
                                    </div>
                                </div>
                            </div>
                            <div id="requirement-infor-group">
                                <div class="form-group">
                                    <label class="form-label col-md-3">Công ty thực
                                        hiện:</label>
                                    <div class="col-md-8">
                                        <select name="companyId">
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
                                    <div class="col-md-8">
                                        <select id="departmentId" class="form-control">
                                            <option value="">- Phòng ban -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label col-md-3">Sản phẩm yêu cầu:</label>
                                    <div class="col-md-8">
                                        <select id="lst-product" class="form-control">
                                            <option value="">- Danh sách sản phẩm -</option>
                                            <option value="253">Gói Premium - QLBH</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label col-md-3">Số tiền:</label>
                                    <div class="col-md-8">
                                        <input type="text" id="requirement-price"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <input id="transactionId" type="hidden" value="76816">
                            <input id="leadId" type="hidden" value="404816">
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
    <!-- /.modal -->

    <div id="show_added"> </div>

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
                    <form action="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76816"
                        method="post" id="BillForm">
                        <div class="form-group clearfix">
                            <div class="col-md-6">
                                <lable class="BillLabel">Số hóa đơn</lable>
                                <input type="text" name="billCode" id="billCode" value=""
                                    placeholder="Mã hóa đơn" class=" form-control input-sm">
                                <input type="hidden" id="billId" value="">
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
                                <input type="text" name="billValue" readonly="" id="billValue"
                                    value="6000000" placeholder="Giá trị hóa đơn"
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
                        Thêm hóa đơn </button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div> --}}

    <script>
        var contractId = '63135';
        var MSG_POSTING_ERROR = 'Có lỗi xảy ra trong quá trình xử lí'
    </script>
    <style>
        .BillLabel {
            font-weight: bold;
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

        .comment .content-box .action {
            position: absolute;
            right: 5px;
            top: 0;
        }

        #billValue {
            pointer-events: none;
            cursor: default;
        }

        #show_added {
            position: fixed;
            text-align: center;
            top: 20px;
            right: 20px;
            z-index: 999999999999999999999
        }

        #show_added .alert-success {
            position: absolute;
            right: 40px;
            top: 30px;
            padding: 10px;
            min-width: 250px;
        }
        .table-bordered > tbody > tr > td, .table > tbody > tr > td, .table > thead > tr > th {
            text-align: center !important;
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
    <script type="text/javascript" src="{{ asset('js/crm/contract/viewtransaction.js') }}"></script>
@endsection