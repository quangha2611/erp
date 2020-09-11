@extends('crm::layouts.master')

@section('title','ERP-Thêm sự kiện')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/calendar/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .bootstrap-tagsinput {
            border-radius: unset;
        }
    </style>
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/calendar/index">Lịch làm việc</a></li>
            <li class="active">Thêm lịch làm việc</li>
        </ul>
        <div class="main-header">
            <h2>Thêm lịch làm việc</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <form id="activityPhonecall" enctype="multipart/form-data" name="activityPhonecall"
            method="post" action="{{ route('post.crm.calendar.store') }}">
            @csrf
            <div class="form-horizontal">
                <div class="col-md-6" id="groupBasic">
                    <fieldset>
                        <legend>Thông tin sự kiện</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Công ty:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <select name="company_id" id="company_id" class="form-control" >
                                    <option value="">-Công ty-</option>
                                    @include('crm::pages.calendar.include._inc_recursiveInput',[
                                        'data' => $companies,
                                        'parentId' => null,
                                        'note' => '--',
                                        'currentItem' => ['id' => old('company_id'),]
                                    ])
                                </select> 
                                @error('company_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Tiêu đề:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="title" maxlength="255" id="title"
                                    class="form-control" value="{{ old('title') }}" > 
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="accountId" id="accountId" value=""> 
                        <input type="hidden" name="contactId" id="contactId" value=""> 
                        <input type="hidden" name="leadId" id="leadId" value="">
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Từ lúc:
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="datetime-local" name="begin_date_time" maxlength="17" id="begin_date_time" class="form-control" value="{{ old('begin_date_time') }}" > 
                                @error('begin_date_time')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Đến lúc:</label>
                            <div class="col-md-8">
                                <input type="datetime-local" name="end_date_time" maxlength="17" id="end_date_time" class="form-control" value="{{ old('end_date_time') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Thành viên:
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                {{-- <input type="text" name="calendar_userIds" style="display:none;"
                                    id="calendar_userIds" class="form-control" value="5374"> --}}
                                {{-- <div class="bootstrap-tagsinput" id="calendar_user_input"> --}}
                                <select class="js-example-basic-multiple form-control" name="joins[]" multiple>
                                    @foreach ($users as $user) 
                                        <option value="{{ $user->id }}" {{ (collect(old('joins'))->contains($user->id)) ? 'selected':'' }}> 
                                            {{ $user->name }}
                                        </option>  
                                    @endforeach
                                </select>
                                {{-- </div> --}}
                                @error('joins')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Địa điểm:
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" name="location" maxlength="255" id="location"
                                    class="form-control" value="{{ old('location') }}"> 
                                @error('location')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Ghi chú:</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control"
                                    id="description">{{ old('description') }}</textarea> </div>
                        </div>

                    </fieldset>
                </div>
                <div class="col-md-6" id="groupTargetInfor">
                    <fieldset>
                        <legend>
                            Thông tin khách hàng <i class="fa fa-exchange"></i>
                            <a class="addNewCustomer" title="" onclick="document.getElementById('is_new_customer').value = 1;
                                                                        document.getElementById('groupNewCustomer').style.display = 'block'
                                                                        document.getElementById('groupTargetInfor').style.display = 'none'
                                                                        document.getElementById('targetName').removeAttribute('required')">
                                Tạo khách hàng mới 
                            </a>
                        </legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Khách hàng:
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <div class="has-feedback">
                                    <input type="text" name="customer_id" maxlength="255"
                                        placeholder="sdt, email, hoặc website của khách hàng"
                                        id="targetName" class="form-control ui-autocomplete-input"
                                        value="{{old('customer_id')}}" autocomplete="off" required> <span
                                        class="form-control-feedback targetName-check"></span>
                                </div>
                                <div>
                                    @if(Session::has('message'))
                                        <p class="text-danger">{{ Session::get('message') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="groupContent" style="display: none;">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Loại:</label>
                                <div class="col-md-8">
                                    <span id="target-type"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">ID:</label>
                                <div class="col-md-8">
                                    <span id="target-id"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Tên:</label>
                                <div class="col-md-8">
                                    <span id="target-name"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Website:</label>
                                <div class="col-md-8">
                                    <span id="target-website"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Mobile</label>
                                <div class="col-md-8">
                                    <span id="target-mobile"> - </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone:</label>
                                <div class="col-md-8">
                                    <span id="target-phone"> - </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email:</label>
                                <div class="col-md-8">
                                    <span id="target-type"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-6" id="groupNewCustomer" style="display: none;">
                    <fieldset>
                        <legend>
                            Tạo khách hàng mới <i class="fa fa-exchange"></i>
                            <a class="backsystemCustomer" onclick="document.getElementById('is_new_customer').value = 0;
                            document.getElementById('groupNewCustomer').style.display = 'none'
                            document.getElementById('groupTargetInfor').style.display = 'block'
                            document.getElementById('targetName').setAttribute('required', 'required')">
                            Dùng khách hàng cũ 
                        </a>
                        </legend>
                        <input type="hidden" id="is_new_customer" name="is_new_customer" value="">
                        <div class="form-group">
                            <label class="col-md-4 control-label">
                                Tên người dùng / doanh nghiệp:</label>
                            <div class="col-md-8">
                                <input type="text" name="name" maxlength="255" id="name" class="form-control" value="{{ old('name') }}"> 
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label class="col-md-4 control-label">Mobile:</label>
                            <div class="col-sm-8">
                                <div class="col-md-6" style="padding-left: 0;">
                                    <div class="form-group has-feedback">
                                        <input type="text" name="lead_mobile" maxlength="15"
                                            placeholder="Mobile" id="lead_mobile"
                                            class="form-control" value=""> <span
                                            class="form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 0;">
                                    <div class="form-group has-feedback">
                                        <input type="text" name="lead_mobile2" maxlength="15"
                                            placeholder="Mobile 2" id="lead_mobile2"
                                            class="form-control" value=""> <span
                                            class="form-control-feedback"></span>
                                    </div>

                                </div>

                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone:</label>
                            <div class="col-sm-8">
                                <div class="col-md-6" style="padding-left: 0;">
                                    <div class="form-group has-feedback">
                                        <input type="text" name="phone" maxlength="15"
                                            placeholder="Phone" id="phone" class="form-control"
                                            value="{{ old('phone') }}"> 
                                        @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <span class="form-control-feedback"></span>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6" style="padding-right: 0;">
                                    <div class="form-group has-feedback">
                                        <input type="text" name="lead_phone2" maxlength="15"
                                            placeholder="Phone 2" id="lead_phone2"
                                            class="form-control" value=""> <span
                                            class="form-control-feedback"></span>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email:</label>
                            <div class="col-md-8">
                                <div class="form-group has-feedback">
                                    <input type="text" name="email" maxlength="255"
                                        id="email" class="form-control" value="{{ old('email') }}"> <span
                                        class="form-control-feedback"></span>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Website:</label>
                            <div class="col-md-8">
                                <div class="form-group has-feedback">
                                    <input type="text" name="website" maxlength="255"
                                        id="website" class="form-control" value="{{ old('website') }}"> <span
                                        class="form-control-feedback"></span>
                                </div>

                            </div>
                        </div>
                    </fieldset>
                </div>
                <div style="clear: both"></div>
                <div class="col-md-12">
                    <div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Sau khi lưu dữ liệu:</label>
                            <div class="col-md-10">
                                <label class="radio radio-inline">
                                    <input type="radio" value="continue" name="after_submit">Tiếp tục thêm sự kiện
                                </label>
                                <label class="radio radio-inline">
                                    <input checked="checked" type="radio" value="show_index" name="after_submit">Quản lí sự kiện
                                </label>
                                <label class="radio radio-inline">
                                    <input type="radio" value="show_personal" name="after_submit">
                                    Về lịch của tôi
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear: both"></div>
                <div class="col-md-6">
                    <div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-8">
                                <input name="submit" type="submit" id="btnSaveCrmContact"
                                    class="btn btn-primary" value="Lưu"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="author" id="" value="{{ Auth::user()->id }}">
        </form>
        <style>
            .form-horizontal .has-feedback .form-control-feedback {
                right: 0px;
            }

            legend a {
                cursor: pointer;
            }
        </style>
    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/saved_resource')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/getfirebaseconfig')}}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/saved_resource(1)')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/fullcalendar.js') }}"></script>
@endsection