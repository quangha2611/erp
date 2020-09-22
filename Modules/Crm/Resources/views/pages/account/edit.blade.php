@extends('crm::layouts.master')

@section('title','ERP-Sửa khách hàng')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/account/style.css') }}" type="text/css">
@endsection

@section('content-page')

<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/crm/account/index">Danh sách khách hàng</a></li>
        <li class="active">Sửa khách hàng</li>
    </ul>
    <div class="main-header">
        <h2>Sửa khách hàng</h2>
        <em>Các trường có dấu * là bắt buộc phải nhập</em>
    </div>
    <div class="dl-horizontal">
        <div class="col-md-9" id="infor"></div>
        <div id="basic-infor">

        </div>
    </div>

    <div class="clearfix"></div>
    <form id="crmAccount" name="crmAccount" method="post" action="{{ route('post.crm.account.update', ['id' => $customer->id]) }}">
        @csrf
        <input type="hidden" name="id" value="{{ $customer->id }}">
        <div class="form-horizontal">
            <fieldset>

                <div class="col-md-12">
                    <legend></legend>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Tên Doanh nghiệp: </label>
                            <div class="col-md-8">
                                <input type="text" name="company" maxlength="255" id="companyName" class="form-control" value="{{ old('company') == null ? $customer->company : old('company') }}">
                                <div class="description text-muted fontsize-85">
                                    Nhập <b class="text-danger">Tên Doanh nghiệp</b> 
                                    là bắt buộc nếu loại thông tin là công ty
                                </div>
                                @error('company')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Tên khách hàng: <span class="required">*</span> </label>
                            <div class="col-md-8">
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name') == null ? $customer->name : old('name') }}"> 
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Loại: <span class="required">*</span> </label>
                            <div class="col-md-8">
                                <select name="type_id" id="type" class="form-control">
                                    <option value="">- Loại khách hàng -</option>
                                    <option value="1" {!! $customer->type_id == 1 && old('type_id') == null ? 'selected' : '' !!} {!! old('type_id') == 1 ? 'selected' : '' !!}>Cá nhân</option>
                                    <option value="2" {!! $customer->type_id == 2 && old('type_id') == null ? 'selected' : '' !!} {!! old('type_id') == 2 ? 'selected' : '' !!}>Công ty</option>
                                </select> 
                                @error('type_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Địa chỉ: <span class="required">*</span> </label>
                            <div class="col-md-8">
                                <input type="text" name="address" maxlength="255" id="address"
                                    class="form-control"
                                    value="{{ old('address') == null ? $customer->address : old('address') }}">
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nghành nghề: <span class="required" style="color: red">*</span></label>

                            <div class="col-md-8">
                                <select name="major_id" id="industrySelect"
                                    class="form-control">
                                    <option value="">- Ngành nghề -</option>
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}" {!! $major->id == $customer->major_id ? 'selected' : '' !!}>{{ $major->name }}</option>
                                    @endforeach
                                </select> 
                                @error('major_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Mã số thuế </label>
                            <div class="col-md-8">
                                <input type="text" name="taxcode" id="tax" class="form-control"
                                    value="{{ old('taxcode') == null ? $customer->taxcode : old('taxcode') }}"> <span class="text-muted fontsize-85">Bắt
                                    buộc đối với khách hàng là doanh nghiệp</span>
                                @error('taxcode')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Số CMND: <span class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="identification" id="identification"
                                    class="form-control" value="{{ $customer->identification }}"> <span
                                    class="text-muted fontsize-85">Bắt buộc đối với khách hàng
                                    là cá nhân</span>
                                @error('identification')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror  
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Nơi cấp: </label>
                            <div class="col-md-8">
                                <input type="text" name="identification_place"
                                    id="identificationPlace" class="form-control" value="{{ old('identification_place') == null ? $customer->identification_place : old('identification_place') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Ngày cấp: </label>
                            <div class="col-md-8">
                                <input type="text" name="identification_date"
                                    class="datepicker form-control" id="identificationDate"
                                    value="{{ old('identification_date') == null ? $customer->identification_date : old('identification_date') }}"> 
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 clearfix">
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Số điện thoại: <span class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control inputer" name="phone" value="{{ old('phone') == null ? $customer->phone : old('phone') }}">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Email: <span class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="email" class="form-control inputer" name="email" value="{{ old('email') == null ? $customer->email : old('email') }}">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Website
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control inputer" name="website" value="{{ old('website') == null ? $customer->website : old('website') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nguồn: </label>
                            <div class="col-md-8">
                                <select name="source_id" id="source" class="form-control">
                                    <option value="">- Nguồn -</option>
                                    @foreach ($sources as $source)
                                        <option value="{{$source->id}}" {!! $source->id == $customer->source_id ? 'selected' : '' !!}> {{ $source->name }}</option>
                                    @endforeach
                                </select>
                                @error('source_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary" id="btnSave">Lưu</button>
                    </div>
                </div>

            </fieldset>
        </div>

            <div class="infomationTempale fade">
                <div class="information">
                    <span class="information-content col-md-10"></span>
                    <input type="hidden" class="submitData" value="">
                    <a class="information-remove fa fa-times pull-left"></a>
                </div>
            </div>


            <div class="modal fade" id="loadingModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div style="text-align: center;font-size: 3em;">
                                <i class="fa fa-spin fa-cog"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .title {
                    background-color: #eee;
                    padding: 8px 15px;
                    margin-bottom: 15px;
                }

                .title a {
                    text-decoration: none;
                    font-weight: bold;
                    color: rgb(171, 28, 30);
                    font-size: 1.18em;
                }

                .informationArea .information {
                    margin: 5px 0px;
                }

                .inputer {
                    clear: both;
                    ;
                    margin-bottom: 5px;
                }

                .error {
                    color: red;
                    border-color: red;
                }

                .dl-horizontal dl {
                    margin-bottom: 10px;
                }

                .dl-horizontal dt {
                    width: 120px;
                }

                .dl-horizontal dd {
                    margin-left: 140px;
                    ;
                }

                .data-row {
                    margin-bottom: 10px;
                }

                #infor .data-row {
                    border-bottom: 1px solid #eee;
                }

                #basic-infor .data-row:last-child {
                    border-bottom: 0px;
                }

                #contact-infor .data-row:last-child {
                    border-bottom: 0px;
                }

                .data-row .data-value {
                    min-height: 2em;
                }

                .data-row .data-value {
                    padding: 0px !important;
                }

                .delete-industry,
                .removeItem {
                    cursor: pointer;
                    margin-left: 3px;
                }

                .industry-item {
                    float: left;
                    margin-right: 3px;
                    margin-bottom: 3px;
                }
            </style>
            <script>
                var accountId = '21810';
            </script>
        </i>
    </form>
</div>

@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };

        var deletedId = 0;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/account/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/account/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/account/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/account/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/account/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/account/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/account/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/account/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/account/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/account/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/account/edit2.js') }}"></script>
@endsection