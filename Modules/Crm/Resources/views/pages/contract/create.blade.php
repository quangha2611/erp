@extends('crm::layouts.master')

@section('title','ERP-Thêm hợp đồng')

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
            <li class="active">Thêm hợp đồng</li>
        </ul>
        <div class="main-header">
            <h2>Thêm hợp đồng</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <form id="crmContract" enctype="multipart/form-data" name="crmContract" method="post"
            action="{{ route('post.crm.contract.store') }}">
            @csrf
            <div class="form-horizontal">
                <fieldset>

                    <div class="col-md-12">
                        <legend>
                            <i class="fa fa-user fontsize-85"></i> Bên khách
                        </legend>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Tìm kiếm khách hàng
                                </label>
                                <div class="col-md-8">
                                    {{-- <div class="input-group autocomplete-with-noresult"
                                        data-toggle="tooltip"
                                        title="Nhập vào &#39;số điện thoại&#39;, &#39;email&#39;, &#39;CMND&#39; hoặc &#39;mã số thuế&#39; để lấy thông tin khách hàng trong hệ thống">
                                        <span class="input-group-addon"><i
                                                class="fa fa-search"></i></span>
                                        <input type="text" name="leadName" id="leadName"
                                            class="form-control ui-autocomplete-input" value=""
                                            autocomplete="off">
                                        <div class="empty-message" style="display: none;">No result
                                            found</div>
                                    </div>
                                    <div class="autocomplete-with-noresult">
                                    </div>
                                    <input type="hidden" name="leadId" id="leadId" value=""> <input
                                        type="hidden" name="accountId" id="accountId" value=""> --}}
                                    <select name="customer_id" class="inputRequired form-control" id="customer_id">
                                        <option value="">- Khách hàng -</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('customer_id')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Tên khách hàng: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customer_name" id="customer_name"
                                        class="inputRequired form-control" value=""> </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Loại khách hàng: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <select name="customer_type" id="customer_type"
                                        class="inputRequired form-control">
                                        <option value="">- Loại khách hàng</option>
                                        <option value="1">Công ty</option>
                                        <option value="2">Cá nhân</option>
                                    </select> </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Số điện thoại: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customer_phone" id="customer_phone"
                                        class="inputRequired form-control" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Địa chỉ: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customer_address" id="customer_address"
                                        class="inputRequired form-control" value=""> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Email:
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customer_email" id="customer_email"
                                        class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Website:</label>
                                <div class="col-md-8">
                                    <input type="text" name="customer_website" id="customer_website"
                                        class="form-control" value=""> </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    CMND: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customer_identification"
                                        id="customer_identification" class="form-control" value="">
                                    <div class="clearfix"></div>
                                    <div class="description text-muted fontsize-85">CMND là bắt buộc
                                        đối với loại khách hàng cá nhân</div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                </label>
                                <div class="col-md-8">
                                    <div class="col-md-6 row">
                                        <input type="text" name="customer_identification_place"
                                            placeholder="Nơi cấp" id="customer_identification_place"
                                            class="form-control" value=""> </div>
                                    <div class="col-md-6 row pull-right">
                                        <input type="text" name="customer_identification_date"
                                            placeholder="Ngày cấp" id="customer_identification_date"
                                            class="form-control" value=""> </div>
                                    <div class="clearfix"></div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Mã số thuế: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customer_taxcode" id="customer_taxcode"
                                        class="form-control" value="">
                                    <div class="description text-muted fontsize-85">Mã số thuế là
                                        bắt buộc đối với loại khách hàng doanh nghiệp</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Link Facebook:
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="facebook" id="facebook"
                                        class="form-control" value="">
                                    <div class="description text-muted fontsize-85">Link face của
                                        gian hàng hoặc khách hàng (không bắt buộc)</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 clearfix" style="margin-bottom: 15px;">
                            <a id="toggleCustomerAdditionalData" class="text-info" onclick="document.getElementById('customerAdditionalData').classList.toggle('hide')">
                                <i lass="currentControle">(+)</i> Thông tin thêm
                            </a>
                        </div>

                        {{-- <div id="customerAdditionalData" class="hide">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email đăng ký
                                        Nhanh.vn:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerNhanhEmail"
                                            id="customerNhanhEmail" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">NhanhStoreId:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerNhanhStoreId"
                                            id="customerNhanhStoreId" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">NhanhStoreName:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerNhanhStoreName"
                                            id="customerNhanhStoreName" class="form-control"
                                            value=""> </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Fax:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerFax" id="customerFax"
                                            class="form-control" value=""> </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Người đại diện
                                        (NĐD):</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerRepresentatorName"
                                            id="customerRepresentatorName" class="form-control"
                                            value=""> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Chức vụ NĐD:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerRepresentatorTitle"
                                            id="customerRepresentatorTitle" class="form-control"
                                            value=""> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email NĐD:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerRepresentatorEmail"
                                            id="customerRepresentatorEmail" class="form-control"
                                            value=""> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Đt NĐD:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerRepresentatorMobile"
                                            id="customerRepresentatorMobile" class="form-control"
                                            value=""> </div>
                                </div>

                            </div>

                        </div> --}}
                    </div>

                    <div class="col-md-12">
                        <legend><i class="fa fa-square fontsize-85"></i> Thông tin Hợp đồng</legend>

                        <div class="col-md-6">
                            <input type="hidden" name="company_id" id="companyId">
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Ngành hàng:
                                    <!-- <span class="required">*</span> -->
                                </label>
                                <div class="col-md-8">
                                    <select name="major_id" id="industryId"
                                        class="inputRequired form-control">
                                        <option value="">- Ngành nghề -</option>
                                        @foreach ($customerMajors as $major)
                                            <option value="{{ $major->id }}">{{ $major->name }}</option>
                                        @endforeach
                                    </select> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Ngày kí: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span>
                                        <input type="date" name="sign_date"
                                            class="inputRequired form-control"
                                            id="signedDate" value="24/07/2020"> 
                                        
                                    </div>
                                    @error('sign_date')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Ngày bắt đầu: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span>
                                        <input type="date" name="start_date"
                                            class="inputRequired form-control"
                                            id="startDate" value=""> 
                                        
                                    </div>
                                    @error('start_date')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Ngày kết thúc: </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span>
                                        <input type="date" value="" id="endDate"
                                            class="form-control" name="end_date">
                                    </div>
                                    <div class="description text-muted fontsize-85"><i>Chưa tính
                                            thời gian tặng thêm hạn sử dụng</i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Ngày hết hạn: <span class="required">*</span></label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span>
                                        <input type="date" value="" id="expiredDate"
                                            class="form-control" name="expired_date">
                                    </div>
                                    <div class="description text-muted fontsize-85"><i>Đã tính thời
                                            gian tặng thêm hạn sử dụng</i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Loại HĐ: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <select name="contract_type" id="serviceType"
                                        class="inputRequired form-control">
                                        <option value="">- Loại HĐ -</option>
                                        @foreach ($contractTypes as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select> 
                                    @error('contract_type')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Hình thức kí: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <select name="sign_type" id="type" class="form-control">
                                        <option value="">- Hình thức kí -</option>
                                        @foreach ($contractSignTypes as $signType)
                                            <option value="{{ $signType->id }}">{{ $signType->name }}</option>
                                        @endforeach
                                    </select> 
                                    @error('sign_type')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Gian hàng: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <select name="companyServiceId" id="companyServiceId"
                                        class="form-control">
                                        <option value="">- Gian hàng -</option>
                                    </select>
                                    <div class="description text-muted fontsize-85">Bắt buộc đối với
                                        hợp đồng tái ký GHĐB!</div>
                                </div>
                            </div> --}}
                        </div>
                    </div>


                    <div class="col-md-12">
                        <legend><i class="fa fa-square fontsize-85"></i> Giá trị hợp đồng <span
                                class="color-red">*</span>
                        </legend>
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                <b>Lưu ý: </b>Do chính sách mỗi công ty cung cấp là khác nhau, nên
                                sản phẩm của các công ty cung cấp khác nhau cần được tách thành các
                                hợp đồng khác nhau.
                            </div>
                            @error('contract_product')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Cty cung cấp sản phẩm </label>
                                <div class="col-md-8">
                                    <select id="supplyCompanyId"
                                        class="form-control">
                                        <option value="">- Cty cung cấp sản phẩm -</option>
                                        @include('crm::pages.contract.include._inc_recursiveInput',[
                                            'data' => $companies,
                                            'parentId' => null,
                                            'note' => '--',
                                        ])
                                    </select> 
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Sản phẩm: </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <select id="productId"
                                            class="form-control"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="">-- Sản phẩm --</option>
                                        </select>
                                        <i class="fontsize-85 text-muted">Chọn các dịch vụ, sản phẩm trong hợp đồng</i>
                                    </div>
                                    <button class="btn btn-primary" type="button" style="margin-top: 10px"; id="addProduct">Thêm</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="productList">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm, dịch vụ</th>
                                            <th>Số lượng <span class="color-red">*</span></th>
                                            <th>Số tháng <span class="color-red">*</span></th>
                                            <th>Giá <span class="color-red">*</span></th>
                                            <th>VAT (%)</th>
                                            <th>Giảm giá (VND)</th>
                                            <th colspan="2">Tặng hạn sử dụng (Tháng)</th>
                                            <th>Giá trị</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listProducts">
                                        {{-- //////////////// --}}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="colNb" colspan="8"><b>Tổng</b></td>
                                            <td class="colNb">
                                                <input type="text" readonly name="total_value" id="totalMoneyAll">
                                            </td>
                                            <td class=""></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <legend>
                            <i class="fa fa-square fontsize-85"></i> Doanh số <span
                                class="color-red">*</span>
                        </legend>
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                <b>Lưu ý: </b><br>
                                - Doanh số được tính theo từng nhân viên với từng sản phẩm.<br>
                                - Để được tính là bán được sản phẩm nào (liên quan đến tính chỉ tiêu
                                sản phẩm) bạn phải tích vào ô tính chỉ tiêu sản phẩm.<br>
                            </div>
                            @error('employee_product_product')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Nhân viên: </label>
                                <div class="col-md-8">
                                        {{-- <input type="text"
                                            class="form-control ui-autocomplete-input"
                                            id="employees" autocomplete="off"> <span
                                            class="input-group-addon"><i
                                                class="fa fa-plus"></i></span> --}}
                                    <select name="employee" id="employeeSelect" style="width: 100%">
                                        <option value="">-- Nhân viên --</option>   
                                        @foreach ($users as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>   
                                        @endforeach
                                    </select>
                                    <i class="fontsize-85 text-muted" style="display: block">
                                        Chọn các nhân viên bạn muốn chia doanh số
                                    </i>
                                    <button type="button" class="btn btn-primary" style="margin-top: 10px" id="addEmployee">
                                        Thêm
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div id="commissionList">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nhân viên</th>
                                            <th>Sản phẩm, dịch vụ <span class="color-red">*</span>
                                            </th>
                                            <th>Chỉ tiêu cho sp</th>
                                            <th>% doanh số <span class="color-red">*</span></th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listEmployees">
                                        {{-- ////////// --}}
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <legend><i class="fa fa-square fontsize-85"></i> Ghi chú &amp; đính kèm
                        </legend>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    File đính kèm: </label>
                                <div class="col-md-8">
                                    <input type="file" name="fileUpload[]" multiple="multiple"
                                        id="fileUpload"> </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Ghi chú: </label>
                                <div class="col-md-9">
                                    <textarea name="description" rows="10" cols="100" ></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </fieldset>
            </div>
            <input type="hidden" value="{{Auth::user()->id}}" name="author">
        </form>

        <table id="productTemplate" style="display: none;">
            <tbody>
                <tr>
                    <td><span class="productName" disabled=""></span> <input type="hidden"
                            class="productId" value="1"></td>
                    <td class="colNb"><input class="form-control quantity  formNb small" value="1">
                    </td>
                    <td class="colNb"><input class="form-control months  formNb small" value="1">
                    </td>
                    <td class="colNb"><input class="form-control price  formNb"></td>
                    <td class="colNb"><input class="form-control vat  formNb small"></td>
                    <td class="colNb"><input class="form-control discount  formNb"
                            placeholder="VND"></td>
                    <td class="colNb"><span class="discountPercent text-muted">0%</span></td>
                    <td class="colNb"><input class="form-control bonusMonth  formNb small"></td>
                    <td class="colNb"><span class="form-control totalProductValue disabled"
                            disabled=""></span></td>
                    <td><a class="fa fa-times remove-item"></a></td>
                </tr>
            </tbody>
        </table>

        <table id="commissionTemplate" style="display: none;">
            <tbody>
                <tr>
                    <td><span class="form-control employeeName" disabled=""></span> <input
                            type="hidden" class="employeeId" value="1"></td>
                    <td><select class="form-control productId">

                        </select></td>
                    <td class="col-align-center">
                        <input type="checkbox" class="countTarget" value="1" data-toggle="tooltip"
                            title="Tính chỉ tiêu sản phẩm cho nhân viên">
                    </td>
                    <td><input type="text" class="form-control formNb commissionPercent"
                            disabled=""></td>
                    <td><span class="form-control commissionMoney" disabled=""></span></td>

                    <td><a class="fa fa-times remove-item"></a></td>
                </tr>

            </tbody>
        </table>

        <table id="paymentTemplate" style="display: none;">
            <tbody>
                <tr>
                    <td><input type="text" class="form-control paymentDescription"></td>
                    <td><select class="form-control paymentType" style="max-width: 120px;">
                            <option value="">- Hình thức thanh toán -</option>
                            <option value="1">Tiền mặt</option>
                            <option value="2">Chuyển khoản</option>
                        </select></td>
                    <td><input type="text" class="form-control formNb paymentAmount"></td>
                    <td><span class="form-control formNb paymentPercent" disabled=""></span></td>
                    <td><a class="fa fa-times remove-item"></a></td>
                </tr>
            </tbody>
        </table>

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

        <div class="modal fade" id="updateLeadModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cập nhật thông tin!</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">Hợp đồng bắt buộc thông tin phải có thông
                            tin <b>CMND</b>! </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Cập nhật CMND:</label>
                            <div class="col-md-8">
                                <input type="text" class="identification form-control"
                                    id="identification">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="save-update-lead" type="button"
                            class="btn btn-primary">Lưu</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="updateAccountModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cập nhật thông tin Khách hàng!</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">Hợp đồng bắt buộc khách hàng có thông tin
                            <b>MÃ SỐ THUẾ</b>! </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Cập nhật CMND:</label>
                            <div class="col-md-8">
                                <input type="text" class="tax-code form-control" id="tax-code">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="save-update-account" type="button"
                            class="btn btn-primary">Lưu</button>
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
                        <h4 class="modal-title">Thông báo!</h4>
                    </div>
                    <div class="modal-body">

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
        <!-- /.modal -->

        <div class="modal fade" id="addServiceModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm nhanh Gian hàng</h4>
                    </div>
                    <div class="modal-body">
                        <form action="https://erp.nhanh.vn/crm/customer/addquick" method="post"
                            id="customerAddquickForm">
                            <div class="form-horizontal">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Công ty cung cấp:<span
                                                class="color-red">*</span></label>
                                        <div class="col-md-8">
                                            <select class="form-control customer-companyId"
                                                name="type">
                                                <option value="">- Công ty cung cấp gian hàng -
                                                </option>
                                                <option value="1">Nhanh.vn</option>
                                                <option value="2">Công ty cổ phần Vật Giá Việt Nam
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Tên khách hàng:<span
                                                class="color-red">*</span></label>
                                        <div class="col-md-8">

                                            <div class="input-group autocomplete-with-noresult"
                                                data-toggle="tooltip"
                                                title="Nhập vào &#39;số điện thoại&#39;, &#39;email&#39;, &#39;CMND&#39; hoặc &#39;mã số thuế&#39; để lấy thông tin khách hàng trong hệ thống">
                                                <span class="input-group-addon"><i
                                                        class="fa fa-search"></i></span>
                                                <input type="text" id="customer-name"
                                                    class="form-control customer-name">
                                                <div class="empty-message" style="display: none;">No
                                                    result found</div>
                                            </div>
                                            <div class="autocomplete-with-noresult">
                                                <div class="text-muted fontsize-85">Nhập vào 'số
                                                    điện thoại', 'email', 'CMND' hoặc 'mã số thuế'
                                                    để lấy thông tin khách hàng trong hệ thống. Nếu
                                                    lấy thông tin khách hàng từ hợp đồng này, <a
                                                        href="https://erp.nhanh.vn/crm/contract/add#"
                                                        class="quickAddInfor"><b>Nhấn vào
                                                            đây</b></a></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">Số điệnt
                                                thoại:</label>
                                            <div class="col-md-8">
                                                <input type="text" disabled=""
                                                    class="form-control customer-phone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">Địa chỉ:</label>
                                            <div class="col-md-8">
                                                <input type="text" disabled=""
                                                    class="form-control customer-address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">Tên Gian
                                                hàng:</label>
                                            <div class="col-md-8">
                                                <input type="text"
                                                    class="form-control customer-servicePrivateName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">ID Gian hàng:</label>
                                            <div class="col-md-8">
                                                <input type="text"
                                                    class="form-control customer-servicePrivateId">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">Đường dẫn
                                                (Link):</label>
                                            <div class="col-md-8">
                                                <input type="text"
                                                    class="form-control customer-serviceLink">
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" class="form-control customer-leadId">
                                    <input type="hidden" class="form-control customer-accountId">
                                </div>
                                <div class="clearfix"></div>

                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button"
                                class="btn btn-primary btnSaveService">Lưu</button>
                            <button type="button" class="btn btn-default"
                                data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                #customerAddquickForm {
                    position: relative;
                }

                .ui-autocomplete {
                    z-index: 2000;
                }

                .add-service {
                    cursor: pointer;
                }

                .table th {
                    text-align: left;
                }

                .formNb {
                    max-width: 120px;
                    ;
                    text-align: right;
                }

                .formNb.small {
                    max-width: 50px;
                    ;
                }

                .color-red {
                    color: red;
                }

                .error {
                    border-color: red;
                    color: red;
                }

                .warning {
                    border-color: #8a6d3b;
                    color: #8a6d3b;
                }

                .success {
                    border-color: green;
                    color: green;
                }

                .autocomplete-with-noresult {
                    position: relative;
                }

                .autocomplete-with-noresult .empty-message {
                    background: white none repeat scroll 0 0;
                    border: 1px solid #ddd;
                    border-radius: 3px;
                    bottom: -35px;
                    display: none;
                    padding: 7px;
                    position: absolute;
                    text-align: center;
                    width: 100%;
                    z-index: 10;
                    left: 0;
                }

                .table span.discountPercent {
                    line-height: 27px;
                }

                #listProducts tr td input, #listEmployees tr td input{
                    width: 100%;
                    border: none;
                }
            </style>
            <script>
                var MSG_NOPRODUCT = 'Bạn chưa nhập các sản phẩm, dịch vụ trong hợp đồng';
                var MSG_NOCOMMISSTION = 'Bạn chưa nhập người thụ hưởng doanh số';
                var TYPE_RENEW = '2';
            </script>
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/ajax.js') }}"></script>
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
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource(2)') }}"></script>
@endsection