@extends('accounting::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/accounting/transaction/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Danh sách phiếu thu chi')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/transaction/index">thu chi</a></li>
            <li class="active">Thêm phiếu thu</li>
        </ul>
        <div class="main-header">
            <h2>
                @if($currentTransaction->type == 1)
                    <span class="text-danger">
                        <i class="fa fa-arrow-right"></i> 
                        Lập phiếu yêu cầu chi
                    </span>
                    <input type="hidden" name="type" value="1">

                @else 
                    <span class="text-info">
                        <i class="fa fa-arrow-left"></i> 
                        Lập phiếu yêu cầu thu
                    </span>
                    <input type="hidden" name="type" value="2">
                @endif
            </h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <form method="post" name="fTransaction" enctype="multipart/form-data" id="fTransaction" action="{{ route('post.accounting.transaction.update') }}">
            @csrf
            <div class="form-horizontal">
                <div class="col-md-6 ">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Công ty yêu cầu: 
                                <span class="required">*</span> 
                            </label>
                            <div class="col-md-8">
                                <select name="companyId" id="companyId" class="form-control" >
                                    <option value="">- Công ty yêu cầu -</option>
                                    @include('accounting::pages.transaction.include._inc_recursiveInput',[
                                        'data' => $companies,
                                        'parentId' => null,
                                        'note' => '--',
                                        'currentItem' => $currentCompany
                                    ])
                                </select>
                                @error('companyId')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Phòng ban yêu cầu: 
                                <span class="required">*</span> 
                            </label>
                            <div class="col-md-8">
                                <select name="departmentId" id="departmentId" class="form-control" >
                                    <option value="">- Phòng ban -</option>
                                    <option value="388">Giám đốc</option>
                                    <option value="1">Kế toán</option>
                                    <option value="943">Nhân sự</option>
                                    <option value="1043">Trợ Lý</option>
                                    <option value="1055">Kiểm soát nội bộ</option>
                                    <option value="1112">YPP</option>
                                    <option value="1123">BNC Group</option>
                                    <option value="1145">Quà trực tuyến</option>
                                    <option value="1204">Công ty TNHH Nguồn Nhân Lực Elite Việt Nam</option>
                                    <option value="1205">-- Tuyển dụng ngoại bộ</option>
                                    <option value="1206">-- Đào tạo ngoại bộ Westart</option>
                                    <option value="1272">Dự Án Westay</option>
                                </select>
                                @error('departmentId')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Ngày hạch toán: 
                                <span class="required">*</span> 
                            </label>
                            <div class="col-md-8">
                                <input type="date" name="applyDate" class="form-control" id="applyDate" value="{{ $currentTransaction->applyDate }}">
                                @error('applyDate')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Quỹ thu: 
                                <span class="required">*</span> 
                            </label>
                            <div class="col-md-8">
                                <select name="accountId" id="accountId" class="form-control" tabindex="-1" aria-hidden="true" >
                                    <option value="">- Quỹ -</option>
                                    @include('accounting::pages.transaction.include._inc_recursiveInput',[
                                        'data' => $funds,
                                        'parentId' => null,
                                        'note' => '--',
                                        'currentItem' => $currentFund
                                    ])
                                </select>
                                @error('accountId')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Khoản mục: 
                                <span class="required">*</span> 
                            </label>
                            <div class="col-md-8">
                                <select name="expenseCategoryId" id="expenseCategoryId" class="form-control" tabindex="-1" aria-hidden="true" >
                                    <option value="">- Khoản mục -</option>
                                    @include('accounting::pages.transaction.include._inc_recursiveInput',[
                                        'data' => $categories,
                                        'parentId' => null,
                                        'note' => '--',
                                        'currentItem' => $currentCategories
                                    ])
                                </select>
                                @error('accountId')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Số tiền 
                                <span class="required">*</span> 
                            </label>
                            <div class="col-md-8">
                                <input type="text" name="amount" class="intAutoNumeric form-control" id="amount" value="{{ $currentTransaction->amount }}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Link Đối Soát:</label>
                            <div class="col-md-8">
                                <textarea name="link" class="form-control" id="link">{{ $currentTransaction->link }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nội dung/ Ghi chú:</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" id="description">{{ $currentTransaction->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">File upload:</label>
                            <div class="col-md-8">
                                <input type="file" name="fileUpload[]" multiple="multiple" id="fileUpload">
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div style="clear:both"></div>
                <div class="col-md-6">
                    <div>
                        <div class="form-group"><label class="col-md-4 control-label"></label>
                            <div class="col-md-8"><input name="btnSubmit" type="submit" id="btnSave"
                                    class="btn btn-primary" value="Lưu"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <input type="hidden" name="id" value="{{ $currentTransaction->id }}">
            <input type="hidden" name="author" value="{{ Auth::user()->id }}">
        </form>
    </div>

@endsection


@section('js')

	<script type="text/javascript">
		var usrCnf = {
			language: 'vi'
		};
    </script>
    <script type="text/javascript" src="{{ asset('/js/accounting/transaction/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/accounting/transaction/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/accounting/transaction/app.js') }}"></script>
	<script>
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/js/accounting/transaction/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/accounting/transaction/saved_resource(2)') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/accounting/transaction/saved_resource(3)') }}"></script>
    

@endsection
