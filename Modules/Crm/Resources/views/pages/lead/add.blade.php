@extends('crm::layouts.master')

@section('title','ERP-Nhập thông tin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/lead/style.css') }}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@endsection

@section('content-page')
<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/crm/lead/index">Danh sách thông tin</a></li>
        <li class="active">Nhập thông tin</li>
    </ul>
    <div id="page-crm-contact-add">

        <div class="main-header">
            <h2>Nhập thông tin</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>

        <form id="crmLead" name="crmLead" method="post" action="{{ route('post.crm.lead.store') }}">
            @csrf
            <input type="hidden" name="author" value="{{ Auth::user()->id }}">
            <div class="form-horizontal">
                <div class="col-md-6">
                    <fieldset>
                        <legend>Thông tin chung</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Loại thông tin:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <div class="type-content content">
                                    <select name="type_id" id="type" class="type form-control">
                                        <option value="">- Loại -</option>
                                        <option value="1" {!! old('type_id') == 1 ? 'selected' : '' !!}>Cá nhân</option>
                                        <option value="2" {!! old('type_id') == 2 ? 'selected' : '' !!}>Công ty</option>
                                    </select>
                                    @error('type_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tên cá nhân đại diện:<span
                                    style="color:red;" class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="name" maxlength="255" id="name"
                                    class="form-control" value="{{ old('name') }}"> 
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone: <span
                                    class="required">*</span> </label>
                            <div class="col-md-8">
                                <div class="phone-content content">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-phone"></i></span>
                                        <input type="text" name="phone" maxlength="13"
                                            id="" class="phone form-control" value="{{ old('phone') }}">
                                    </div>
                                    @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email:<span
                                class="required">*</span> </label>
                            <div class="col-md-8">
                                <div class="email-content content">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-envelope-o"></i></span>
                                        <input type="email" name="email" maxlength="255"
                                            id="email" class="email form-control" value="{{ old('email') }}">
                                     
                                    </div>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nghành nghề: <span
                                    style="color: red;" class="required">*</span> </label>

                            <div class="col-md-8">
                                <select name="major_id" id="industrySelect"
                                    class="form-control" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="">- Ngành nghề -</option>
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}" {!! old('major_id') == $major->id ? 'selected' : '' !!}>{{ $major->name }}</option>   
                                    @endforeach
                                </select>
                                @error('major_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div id="industry-items" class="col-md-8">

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Thành phố: <span
                                    style="color: red;" class="required">*</span> </label>

                            <div class="col-md-8">
                                <select name="city_id" id="cityId"
                                    class="form-control" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="">- Thành phố -</option>
                                    @for( $i = 0; $i < count($citys); $i++)
                                        <option value="{{ $citys[$i]->Title }}">{{ $citys[$i]->Title }}</option>
                                    @endfor
                                </select>
                                @error('city_id')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label">Quận huyện:</label>
                            <div class="col-md-8">
                                <select name="district_id" id="districtId"
                                    class="form-control" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="">- Quận huyện -</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nguồn: <span
                                style="color: red;" class="required">*</span></label>
                            <div class="col-md-8">
                                <select name="source_id" id="source" class="form-control">
                                    <option value="">- Nguồn -</option>
                                    @foreach ($sources as $source)
                                        <option value="{{ $source->id }}" {!! old('source_id') == $source->id ? 'selected' : '' !!}>{{ $source->name }}</option>
                                    @endforeach
                                </select> 
                                @error('source_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Ghi chú: </label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control"
                                    id="description">{{ old('description') }}</textarea> </div>
                        </div>


                        {{-- <div class="form-group">
                            <label class="col-md-4 control-label">Yêu cầu chăm sóc gọi
                                lại:</label>
                            <div class="col-md-8">
                                <input type="hidden" name="requestPhonecall" value="0"><input
                                    type="checkbox" name="requestPhonecall"
                                    id="requestPhonecall" value="1"> </div>
                        </div>
                        <div class="form-group" style="">
                            <label class="col-md-4 control-label">Thời điểm gọi:</label>
                            <div class="col-md-8">
                                <select name="requestTimeCall" id="requestTimeCall"
                                    class="form-control">
                                    <option value="1">Trong ngày</option>
                                    <option value="2">Trong 2 ngày</option>
                                    <option value="3">Trong 3 ngày</option>
                                    <option value="7">Trong tuần</option>
                                </select> </div>
                        </div>
                        <div class="form-group" style="">
                            <label class="col-md-4 control-label required">Người gọi:</label>
                            <div class="col-md-8">
                                <input type="text" name="requestUserIds" style="display:none;"
                                    id="requestUserIds" class="form-control" value="">
                                <div class="bootstrap-tagsinput" id="calendar_user_input">
                                    <input size="1" type="text" placeholder="" id="tag-input"
                                        class="ui-autocomplete-input" autocomplete="off">
                                </div>
                            </div>
                        </div> --}}
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <legend>Thông tin xác thực</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tên doanh nghiệp:</label>
                            <div class="col-md-8">
                                <input type="text" name="company" maxlength="255"
                                    id="companyName" class="form-control" value="{{ old('company') }}">
                                <div class="description text-muted fontsize-85">Nhập <b
                                        class="text-danger">Tên Doanh nghiệp</b> là bắt buộc nếu
                                    loại thông tin là công ty</div>
                                @error('company')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Chức danh:</label>
                            <div class="col-md-8">
                                <input type="text" name="position" maxlength="255" id="title"
                                    class="form-control" value="{{ old('position') }}"> 
                                @error('position')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Phòng ban công tác:</label>
                            <div class="col-md-8">
                                <input type="text" name="department" maxlength="255"
                                    id="department" class="form-control" value="{{ old('department') }}"> 
                                @error('department')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">CMND: <span
                                style="color:red;" class="required">*</span></label>
                            <div class="col-md-8">
                                <div class="identification-content content">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-user"></i></span>
                                        <input type="text" name="identification" maxlength="45"
                                            id="identification"
                                            class="identification form-control" value="{{ old('identification') }}"> 
                                        </div>
                                    @error('identification')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-8">
                                <div class="col-md-6 row">
                                    <div class="identificationPlace-content content">
                                        <input type="text" name="identification_place"
                                            placeholder="Nơi cấp" id="identification_place"
                                            class="identificationPlace form-control pull-left"
                                            value="{{ old('identification_place') }}"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="identificationDate-content content">
                                        <input type="text" name="identification_date"
                                            class="identificationDate form-control datepicker"
                                            placeholder="Ngày cấp" id="identificationDate"
                                            value="{{ old('identification_date') }}"> </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Mã số thuế:<span style="color:red;" class="required">*</span></label>
                            <div class="col-md-8">
                                <div class="content">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-plus"></i></span>
                                        <input type="text" name="taxcode" maxlength="20"
                                            id="taxCode" class="taxCode form-control" value="{{ old('taxcode') }}">
                                    </div>
                                    @error('taxcode')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Địa chỉ: <span
                                style="color:red;" class="required">*</span></label>
                            <div class="col-md-8">
                                <div class="address-content content">
                                    <input type="text" name="address" maxlength="255"
                                        id="address" class="address form-control" value="{{ old('address') }}">
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Website doanh nghiệp:</label>
                            <div class="col-md-8">
                                <div class="website-content content">
                                    <input type="text" name="website" maxlength="255"
                                        id="website" class="website form-control" value="{{ old('website') }}">
                                </div>
                            </div>
                        </div>
            

                        <div class="form-group form-group-btn">
                            <label class="col-md-4"></label>
                            <div class="col-md-8">
                                
                            </div>
                        </div>


                    </fieldset>
                </div>
                <div class="clearfix"></div>
                <div style="clear: both"></div>
                <div class="col-md-12">
                    <div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Sau khi lưu dữ liệu:</label>
                            <div class="col-md-10">
                                <label class="radio radio-inline"><input checked="checked"
                                        type="radio" value="continue"
                                        name="afterSubmit">Tiếp tục nhập thông tin</label><label
                                    class="radio radio-inline"><input type="radio"
                                        value="show" name="afterSubmit">Hiện
                                    danh sách thông tin</label> </div>
                        </div>
                    </div>
                </div>
                <div style="clear: both"></div>
                <div class="col-md-6">
                    <div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-8">
                                <input name="btnSubmit" type="submit" id="btnSaveCrmLead"
                                    class="btn btn-primary" value="Lưu"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Dialog bootstrap -->
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
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        .form-group-btn {
            margin-top: -7px !important;
            margin-bottom: 6px !important;
        }

        .addBtn {
            padding: 2px 6px;
            float: right;
            cursor: pointer
        }

        #crmLead .content input[type="text"] {
            margin-bottom: 12px;
        }

        #crmLead .content .input-group {
            margin-bottom: 12px;
        }

        #crmLead .content .input-group:last-child {
            margin-bottom: 0px;
        }

        #crmLead .content input[type="text"]:last-child {
            margin-bottom: 0px;
        }

        .required {
            color: red;
        }

        #crmLead input[type="checkbox"] {
            margin-top: 9px;
        }

        .bootstrap-tagsinput {
            width: 100%;
        }

        .care-leadId,
        .care-account {
            cursor: pointer;
        }

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
</div>

@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };

        $(document).ready(function(){

            $('#cityId').change(function(){ 
                var city = $(this).val(); 
                if(city != '') 
                {
                    var _token = $('input[name="_token"]').val(); 
                    $.ajax({
                        url:"{{ route('get.crm.customer.listDistrict') }}", 
                        method:"GET", 
                        data:{city:city, _token:_token},
                        success:function(data){ 
                            // console.log(data);
                            innerDistrict = "<option value=\"\">- Quận huyện -</option>";
                            for(var i=0; i<data.length; i++) {
                                innerDistrict = innerDistrict + "<option value=\"" + data[i].ID + "\">- " + data[i].Title + "-</option>";
                            }
                            $('#districtId').html(innerDistrict);
                        }
                    });
                }
            });
        })
    </script>

    <script type="text/javascript" src="{{ asset('js/crm/lead/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/indexvg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/lead/saved_resource(2)') }}"></script>
@endsection