@extends('Layout.master')

@section('title','ERP-Danh Sách Đấu Giá')

@section('css')
    <link href="{{ asset('asset/css/auction/bootstrap-multiselect.css" media="screen') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/auction/style.css') }}" type="text/css">
@endsection


@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/auction"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/auction/index">Danh sách đấu giá</a></li>
            <li class="active">Thêm đấu giá</li>
        </ul>
        <div id="page-idea-add">

            <div class="main-header">
                <h2>Thêm đấu giá</h2>
                <em>Các trường có dấu * là bắt buộc phải nhập</em>
            </div>
            <form method="post" name="categoriesIndex" id="categoriesIndex">
                <div class="form-horizontal">
                    <div class="col-md-6 ">
                        <fieldset><input type="hidden" name="companyId" id="companyId" value="391">
                            <div class="form-group"><label class="col-md-4 control-label">Phòng
                                    ban:</label>
                                <div class="col-md-8"><select name="departmentId" id="departmentId"
                                        class="form-control">
                                        <option value="">- Phòng ban -</option>
                                        <option value="1437">123Job</option>
                                        <option value="1475">Kinh doanh 123Job</option>
                                    </select></div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Danh mục: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><select name="categoryId" id="categoryId"
                                        class="form-control">
                                        <option value="">- Danh mục đấu giá -</option>
                                        <option value="5">Đấu giá số hotline</option>
                                        <option value="4">Đấu giá Vchat</option>
                                        <option value="3">Đấu giá từ khóa SEO</option>
                                        <option value="2">Đấu giá số điện thoại quảng cáo</option>
                                        <option value="1">Đấu Giá Gian hàng</option>
                                    </select></div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Ngày hết hạn: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span><input type="text"
                                            name="deadline" class="datetimepicker form-control"
                                            id="deadline" value=""></div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Giá khởi điểm: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="startingAmount"
                                        class="intAutoNumeric form-control" id="startingAmount"
                                        value=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Bước Giá thấp nhất:
                                    <span class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="slideAmount"
                                        class="intAutoNumeric form-control" id="slideAmount"
                                        value=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <div class="form-group"><label class="col-md-4 control-label">Giá thắng
                                    ngay:</label>
                                <div class="col-md-8"><input type="text" name="expectedAmount"
                                        class="intAutoNumeric form-control" id="expectedAmount"
                                        value=""></div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label
                                    class="col-md-2 control-label required">Tiêu đề: <span
                                        class="required">*</span> </label>
                                <div class="col-md-10"><textarea name="title" class="form-control "
                                        style="width: 100%;" id="title"></textarea></div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label class="col-md-2 control-label">Mô tả chi
                                    tiết:</label>
                                <div class="col-md-10"><textarea name="description"
                                        class="form-control " style="width: 100%;height:150px;"
                                        id="description"></textarea></div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label class="col-md-2 control-label">Sau khi
                                    lưu dữ liệu:</label>
                                <div class="col-md-10"><label class="radio radio-inline"><input
                                            checked="checked" type="radio"
                                            value="/crm/auction/success" name="afterSubmit">Hiện
                                        danh sách</label></div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-6">
                        <div>
                            <div class="form-group"><label class="col-md-4 control-label"></label>
                                <div class="col-md-8"><input name="submit" type="submit"
                                        id="btnSaveCrmContact" class="btn btn-primary" value="Lưu">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource(3)') }}"></script>
@endsection