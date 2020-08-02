@extends('Layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/crm/target/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh sách khách hàng')

@section('content-page')
			
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Đăng kí chỉ tiêu</li>
        </ul>
        <div class="main-header">
            <h2>Đăng kí chỉ tiêu</h2>
            <em>Bấm nút đăng kí để đăng kí chỉ tiêu theo các đợt</em>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1569px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th class="col-align-left" style="width: 71px;">ID</th>
                            <th class="col-align-left" style="width: 566px;">Đợt chỉ tiêu</th>
                            <th class="col-align-left" style="width: 297px;">Công ty</th>
                            <th style="width: 187px;">Ngày bắt đầu</th>
                            <th style="width: 193px;">Ngày kết thúc</th>
                            <th style="width: 255px;"></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgTargetGroup" class="table table table-hover">
                <thead>
                    <tr class="even">
                        <th class="col-align-left">ID</th>
                        <th class="col-align-left">Đợt chỉ tiêu</th>
                        <th class="col-align-left">Công ty</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>113</td>
                        <td>Chỉ tiêu VNP HCM 07-2020</td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td class="col-align-center">01/07/2020</td>
                        <td class="col-align-center">31/07/2020</td>
                        <td class="col-align-right"><a class="btn btn-xs btn-primary"
                                href="{{ route('targetAdd') }}"><i
                                    class="fa fa-plus"></i> Đăng kí chỉ tiêu</a></td>
                    </tr>
                    <tr class="even">
                        <td>112</td>
                        <td>CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td class="col-align-center">01/07/2020</td>
                        <td class="col-align-center">31/07/2020</td>
                        <td class="col-align-right"><a class="btn btn-xs btn-primary"
                                href="{{ route('targetAdd') }}"><i
                                    class="fa fa-plus"></i> Đăng kí chỉ tiêu</a></td>
                    </tr>
                    <tr>
                        <td>111</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>VNP group</td>
                        <td class="col-align-center">01/07/2020</td>
                        <td class="col-align-center">31/07/2020</td>
                        <td class="col-align-right"><a class="btn btn-xs btn-primary"
                                href="{{ route('targetAdd') }}"><i
                                    class="fa fa-plus"></i> Đăng kí chỉ tiêu</a></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
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
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/target/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/index.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/saved_resource(2)') }}"></script>

@endsection
			