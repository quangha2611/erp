<!DOCTYPE html>
<!-- saved from url=(0039)https://erp.nhanh.vn/asset/manage/index -->
<html lang="en"
	class=" js flexbox flexboxlegacy canvas canvastext postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script type="text/javascript">
		var newStatus = 1;
		var feedbackStatus = 2;
		var assignedStatus = 3;
		var workingStatus = 4;
		var obstructiveStatus = 5;
		var confirmStatus = 6;
		var checkedStatus = 7;
		var closeStatus = 8;
		var userId = 6702;
		var currentNhanhUserId = 6702;
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>
	<meta name="DC.language" content="scheme=utf-8 content=vi">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<link href="https://erp.nhanh.vn/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    
    @yield('css')

    <link rel="manifest" href="https://erp.nhanh.vn/manifest.json">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style></style>
	<style>
		.cke {
			visibility: hidden;
		}
	</style>
</head>

<body class="">
	<nav style="display: none;" id="mainMenuLeftMobile" class="mm-menu mm-offcanvas" aria-hidden="true">
		<div class="mm-panels">
			<div class="mm-panel mm-hasnavbar mm-opened" id="parentMenuLeftMobile">
				<div class="mm-navbar"><a class="mm-title">Menu</a></div>
				<ul class="bgParentMenuLeft mm-listview">
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-1" aria-owns="mm-1"
							aria-haspopup="true"><span class="mm-sronly">Open submenu (Công ty)</span></a><a
							href="https://erp.nhanh.vn/company" class="colorParentMenuLeft"><i class=""></i><span>Công
								ty</span></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-5" aria-owns="mm-5"
							aria-haspopup="true"><span class="mm-sronly">Open submenu (Nhân sự)</span></a><a
							href="https://erp.nhanh.vn/hrm" class="colorParentMenuLeft"><i class=""></i><span>Nhân
								sự</span></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-17" aria-owns="mm-17"
							aria-haspopup="true"><span class="mm-sronly">Open submenu (Tài sản)</span></a><a
							href="https://erp.nhanh.vn/asset" class="colorParentMenuLeft"><i class=""></i><span>Tài
								sản</span></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-19" aria-owns="mm-19"
							aria-haspopup="true"><span class="mm-sronly">Open submenu (Tài liệu)</span></a><a
							href="https://erp.nhanh.vn/document" class="colorParentMenuLeft"><i class=""></i><span>Tài
								liệu</span></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-21" aria-owns="mm-21"
							aria-haspopup="true"><span class="mm-sronly">Open submenu (Kế toán)</span></a><a
							href="https://erp.nhanh.vn/accounting" class="colorParentMenuLeft"><i class=""></i><span>Kế
								toán</span></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-24" aria-owns="mm-24"
							aria-haspopup="true"><span class="mm-sronly">Open submenu (Công việc)</span></a><a
							href="https://erp.nhanh.vn/work" class="colorParentMenuLeft"><i class=""></i><span>Công
								việc</span></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-29" aria-owns="mm-29"
							aria-haspopup="true"><span class="mm-sronly">Open submenu (Khách hàng)</span></a><a
							href="https://erp.nhanh.vn/crm" class="colorParentMenuLeft"><i class=""></i><span>Khách
								hàng</span></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-38" aria-owns="mm-38"
							aria-haspopup="true"><span class="mm-sronly">Open submenu (Cải tiến)</span></a><a
							href="https://erp.nhanh.vn/idea" class="colorParentMenuLeft"><i class=""></i><span>Cải
								tiến</span></a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-1" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile"
						aria-owns="parentMenuLeftMobile" aria-haspopup="true"><span class="mm-sronly">Close submenu
							(Công ty)</span></a><a class="mm-title"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile" aria-hidden="true">Công
						ty</a></div>
				<ul class="mm-listview">
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-2" aria-owns="mm-2"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Công ty )</span></a><a
							class="js-sub-menu-toggle" rel="/company/manage"><i class="fa fa-building-o"></i> <span
								class="text">Công ty</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-3" aria-owns="mm-3"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Thông báo )</span></a><a
							class="js-sub-menu-toggle" rel="/company"><i class="fa fa-envelope"></i> <span
								class="text">Thông báo</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-4" aria-owns="mm-4"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Phòng ban )</span></a><a
							class="js-sub-menu-toggle" rel="/company"><i class="fa fa-cogs"></i> <span
								class="text">Phòng ban</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-2" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-1"
						aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Công ty
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-1"
						aria-hidden="true"> Công ty </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/company/manage/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách công ty</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-3" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-1"
						aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Thông báo
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-1"
						aria-hidden="true"> Thông báo </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/company/announcement/index"><i class="fa fa-list"></i>
							<span class="text">Danh sách thông báo</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/company/announcement/add"><i class="fa fa-plus"></i>
							<span class="text">Thêm thông báo</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-4" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-1"
						aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Phòng ban
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-1"
						aria-hidden="true"> Phòng ban </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/company/department/index"><i class="fa fa-list"></i>
							<span class="text">Danh sách phòng ban</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/company/department/sort"><i class="fa fa-list"></i> <span
								class="text">Sắp xếp phòng ban</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/company/department/add"><i class="fa fa-plus"></i> <span
								class="text">Thêm phòng ban</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-5" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile"
						aria-owns="parentMenuLeftMobile" aria-haspopup="true"><span class="mm-sronly">Close submenu
							(Nhân sự)</span></a><a class="mm-title"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile" aria-hidden="true">Nhân
						sự</a></div>
				<ul class="mm-listview">
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-6" aria-owns="mm-6"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Nhân sự )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm/employee/index"><i class="fa fa-users"></i> <span
								class="text">Nhân sự</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-7" aria-owns="mm-7"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Chấm công )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm/attendance"><i class="fa fa-check-square"></i> <span
								class="text">Chấm công</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-8" aria-owns="mm-8"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Bảo hiểm )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm/employee/insurance"><i class="fa fa-ambulance"></i>
							<span class="text">Bảo hiểm</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-9" aria-owns="mm-9"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Tuyển dụng )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm/recruitment"><i class="fa fa-suitcase"></i> <span
								class="text">Tuyển dụng</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-10" aria-owns="mm-10"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Ứng viên )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm/candidate/index"><i class="fa fa-user"></i> <span
								class="text">Ứng viên</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-11" aria-owns="mm-11"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Hợp đồng )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm/contract/index"><i class="fa fa-book"></i> <span
								class="text">Hợp đồng</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-12" aria-owns="mm-12"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Đơn từ )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm/absence"><i class="fa fa-file"></i> <span
								class="text">Đơn từ</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-13" aria-owns="mm-13"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Đặt cơm )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm/lunch"><i class="fa fa-cutlery"></i> <span
								class="text">Đặt cơm </span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-14" aria-owns="mm-14"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Test )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm/test"><i class="fa fa-floppy-o"></i> <span
								class="text">Test </span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-15" aria-owns="mm-15"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Khảo sát )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm"><i class="fa fa-question"></i> <span class="text">Khảo
								sát</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-16" aria-owns="mm-16"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Báo cáo )</span></a><a
							class="js-sub-menu-toggle" rel="/hrm/report/index"><i class="fa fa-bar-chart"></i> <span
								class="text">Báo cáo</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-6" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Nhân sự
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Nhân sự </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/employee/index"><i class="fa fa-users"></i> <span
								class="text">Danh sách nhân sự</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/employee/end"><i class="fa fa-male"></i> <span
								class="text">Nhân sự đã nghỉ việc</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/employee/add2"><i class="fa fa-plus"></i> <span
								class="text">Thêm nhân sự</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/employee/import"><i class="fa fa-file"></i> <span
								class="text">Import nhân sự từ Excel</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-7" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Chấm công
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Chấm công </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/attendance/index"><i class="fa fa-calendar"></i>
							<span class="text">Bảng công cá nhân</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/attendance/manager"><i class="fa fa-calendar"></i>
							<span class="text">Danh sách bảng công</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/attendance/penalty"><i class="fa fa-calendar"></i>
							<span class="text">Danh sách phạt</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/attendance/earlylate"><i class="fa fa-calendar"></i>
							<span class="text">Danh sách phạt chi tiết</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/attendance/importpriority"><i
								class="fa fa-upload"></i> <span class="text">Import ưu tiên công</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-8" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Bảo hiểm
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Bảo hiểm </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/employee/insurance"><i class="fa fa-list"></i> <span
								class="text">Danh sách bảo hiểm</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/employee/nextinsurance"><i class="fa fa-list"></i>
							<span class="text">Nhân sự sắp được đóng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/employee/importinsurance"><i class="fa fa-file"></i>
							<span class="text">Import bảo hiểm từ Excel</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-9" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Tuyển dụng
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Tuyển dụng </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/recruitment/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách yêu cầu</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/recruitment/addrequirement"><i
								class="fa fa-plus"></i> <span class="text">Thêm yêu cầu</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/recruitment/candidate"><i class="fa fa-list"></i>
							<span class="text">Danh sách ứng viên (cũ)</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/recruitment/addcandidate"><i class="fa fa-plus"></i>
							<span class="text">Thêm ứng viên (cũ)</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/recruitment/addcandidateexcel"><i
								class="fa fa-file"></i> <span class="text">Thêm ứng viên từ Excel</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-10" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Ứng viên
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Ứng viên </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/candidate/index"><i class="fa fa-list"></i> <span
								class="text">Ứng viên tiềm năng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/candidate/confirm"><i class="fa fa-list"></i> <span
								class="text">Ứng viên hoàn thiện hồ sơ</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/candidate/add"><i class="fa fa-plus"></i> <span
								class="text">Thêm ứng viên tiềm năng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/candidate/import"><i class="fa fa-file-excel-o"></i>
							<span class="text">Import ứng viên</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-11" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Hợp đồng
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Hợp đồng </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/contract/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách hợp đồng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/contract/employeeexpried"><i class="fa fa-list"></i>
							<span class="text">NV chưa gia hạn HĐ</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/contract/add"><i class="fa fa-plus"></i> <span
								class="text">Thêm hợp đồng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/contract/template"><i class="fa fa-list"></i> <span
								class="text">Danh sách mẫu in</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/contract/addtemplate"><i class="fa fa-plus"></i>
							<span class="text">Thêm mẫu in</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-12" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Đơn từ
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Đơn từ </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/absence/index"><i class="fa fa-list-alt"></i> <span
								class="text">Danh sách đơn</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/absence/reason"><i class="fa fa-list-alt"></i> <span
								class="text">Lý do</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/absence/myview"><i class="fa fa-file-text"></i> <span
								class="text">Đơn của bạn</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/absence/add"><i class="fa fa-plus"></i> <span
								class="text">Tạo đơn xin nghỉ</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/absence/addabsence"><i class="fa fa-plus"></i> <span
								class="text">Tạo đơn vắng mặt</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/transfer/add"><i class="fa fa-plus"></i> <span
								class="text">Tạo đơn chuyển công tác</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/resignation/add"><i class="fa fa-plus"></i> <span
								class="text">Tạo đơn xin thôi việc</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-13" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Đặt cơm
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Đặt cơm </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/lunch/add"><i class="fa fa-cutlery"></i> <span
								class="text">Đặt cơm</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/lunch/index"><i class="fa fa-question"></i> <span
								class="text">Danh sách đặt cơm</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/lunch/employee"><i class="fa fa-list"></i> <span
								class="text">Nhân viên đã đặt cơm</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/lunch/unemployee"><i class="fa fa-list"></i> <span
								class="text">Nhân viên chưa đặt cơm</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/lunch/reportlunch"><i class="fa fa-list"></i> <span
								class="text">Báo cáo đặt cơm</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/lunch/report"><i class="fa fa-list"></i> <span
								class="text">Báo cáo theo vị trí ngồi</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-14" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Test
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Test </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/test/subject"><i class="fa fa-list-alt"></i> <span
								class="text">Bộ đề</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/test/questanswer"><i class="fa fa-question"></i>
							<span class="text">Câu hỏi</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/test/index"><i class="fa fa-plus"></i> <span
								class="text">Bài test</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/test/result"><i class="fa fa-check"></i> <span
								class="text">Kết quả</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-15" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Khảo sát
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Khảo sát </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/survey/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách khảo sát</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/survey/add"><i class="fa fa-plus"></i> <span
								class="text">Thêm khảo sát</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-16" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Báo cáo
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-5"
						aria-hidden="true"> Báo cáo </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/hrm/report/misscheckeddate"><i
								class="fa fa-hand-o-up"></i> <span class="text">Không chốt tay</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/report/absenceaprover"><i
								class="fa fa-bar-chart"></i> <span class="text">Người duyệt đơn</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/hrm/report/answersurvey"><i class="fa fa-bar-chart"></i>
							<span class="text">Báo cáo khảo sát nhân viên</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-17" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile"
						aria-owns="parentMenuLeftMobile" aria-haspopup="true"><span class="mm-sronly">Close submenu (Tài
							sản)</span></a><a class="mm-title"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile" aria-hidden="true">Tài
						sản</a></div>
				<ul class="mm-listview">
					<li class="active"><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-18"
							aria-owns="mm-18" aria-haspopup="true"><span class="mm-sronly">Open submenu ( Tài sản
								)</span></a><a class="js-sub-menu-toggle" rel="/asset/asset"><i class="fa fa-list"></i>
							<span class="text">Tài sản</span> <i class="toggle-icon fa fa-angle-down"></i></a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-18" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-17"
						aria-owns="mm-17" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Tài sản
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-17"
						aria-hidden="true"> Tài sản </a></div>
				<ul class="sub-menu open mm-listview">
					<li class="active"><a class="" href="https://erp.nhanh.vn/asset/manage/index"><i
								class="fa fa-file-o"></i> <span class="text">Danh sách tài sản</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/asset/manage/add"><i class="fa fa-plus"></i> <span
								class="text">Tạo mới tài sản</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/asset/category/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách danh mục tài sản</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/asset/category/add"><i class="fa fa-plus"></i> <span
								class="text">Tạo mới Danh mục tài sản</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-19" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile"
						aria-owns="parentMenuLeftMobile" aria-haspopup="true"><span class="mm-sronly">Close submenu (Tài
							liệu)</span></a><a class="mm-title"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile" aria-hidden="true">Tài
						liệu</a></div>
				<ul class="mm-listview">
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-20" aria-owns="mm-20"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Tài liệu công ty )</span></a><a
							class="js-sub-menu-toggle" rel="/document/document"><i class="fa fa-list"></i> <span
								class="text">Tài liệu công ty</span> <i class="toggle-icon fa fa-angle-right"></i></a>
					</li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-20" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-19"
						aria-owns="mm-19" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Tài liệu công ty
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-19"
						aria-hidden="true"> Tài liệu công ty </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/document/document/index"><i class="fa fa-file-o"></i>
							<span class="text">Danh sách tài liệu</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/document/document/add"><i class="fa fa-crosshairs"></i>
							<span class="text">Tạo mới tài liệu công ty</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/document/category/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách danh mục</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/document/category/add"><i class="fa fa-plus"></i> <span
								class="text">Tạo mới danh mục</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-21" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile"
						aria-owns="parentMenuLeftMobile" aria-haspopup="true"><span class="mm-sronly">Close submenu (Kế
							toán)</span></a><a class="mm-title"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile" aria-hidden="true">Kế
						toán</a></div>
				<ul class="mm-listview">
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-22" aria-owns="mm-22"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Thu chi )</span></a><a
							class="js-sub-menu-toggle" rel="/accounting/transaction/myindex"><i class="fa fa-list"></i>
							<span class="text">Thu chi</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-23" aria-owns="mm-23"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Khoản mục thu chi )</span></a><a
							class="js-sub-menu-toggle" rel="/accounting"><i class="fa fa-usd"></i> <span
								class="text">Khoản mục thu chi</span> <i class="toggle-icon fa fa-angle-right"></i></a>
					</li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-22" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-21"
						aria-owns="mm-21" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Thu chi
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-21"
						aria-hidden="true"> Thu chi </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/accounting/transaction/myindex"><i
								class="fa fa-list"></i> <span class="text">Phiếu thu chi của tôi</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/accounting/transaction/addpaymentsimple"><i
								class="fa fa-arrow-right"></i> <span class="text">Lập phiếu xin chi</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/accounting/transaction/addrecieversimple"><i
								class="fa fa-arrow-left"></i> <span class="text">Lập phiếu xin thu</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-23" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-21"
						aria-owns="mm-21" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Khoản mục thu chi
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-21"
						aria-hidden="true"> Khoản mục thu chi </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/accounting/expense/category"><i class="fa fa-list"></i>
							<span class="text">Danh sách khoản mục</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/accounting/expense/addcategory"><i
								class="fa fa-plus"></i> <span class="text">Thêm khoản mục</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-24" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile"
						aria-owns="parentMenuLeftMobile" aria-haspopup="true"><span class="mm-sronly">Close submenu
							(Công việc)</span></a><a class="mm-title"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile" aria-hidden="true">Công
						việc</a></div>
				<ul class="mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/work/task/myview"><i class="fa fa-home"></i> <span
								class="text">Tổng quan</span> </a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-25" aria-owns="mm-25"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Kế hoạch )</span></a><a
							class="js-sub-menu-toggle" rel="/work/plan/index"><i class="fa fa-tasks"></i> <span
								class="text">Kế hoạch</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-26" aria-owns="mm-26"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Nhiệm vụ )</span></a><a
							class="js-sub-menu-toggle" rel="/work/task/index"><i class="fa fa-list"></i> <span
								class="text">Nhiệm vụ</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-27" aria-owns="mm-27"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Lịch làm việc )</span></a><a
							class="js-sub-menu-toggle" rel="/work/calendar/index"><i class="fa fa-calendar-o"></i> <span
								class="text">Lịch làm việc</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-28" aria-owns="mm-28"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Cuộc họp )</span></a><a
							class="js-sub-menu-toggle" rel="/work/meeting/index"><i class="fa fa-comments"></i> <span
								class="text">Cuộc họp</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-25" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-24"
						aria-owns="mm-24" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Kế hoạch
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-24"
						aria-hidden="true"> Kế hoạch </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/work/plan/index"><i class="fa fa-tasks"></i> <span
								class="text">Danh sách kế hoạch</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-26" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-24"
						aria-owns="mm-24" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Nhiệm vụ
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-24"
						aria-hidden="true"> Nhiệm vụ </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/work/task/add"><i class="fa fa-plus"></i> <span
								class="text">Thêm nhiệm vụ</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/work/task/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách nhiệm vụ</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/work/task/index"><i
								class="fa fa-level-up fa-rotate-90"></i> <span class="text">Nhiệm vụ giao cho tôi xử
								lý</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/work/task/index"><i
								class="fa fa-level-up fa-rotate-90"></i> <span class="text">Nhiệm vụ do tôi đăng</span>
						</a></li>
					<li><a class="" href="https://erp.nhanh.vn/work/task/index"><i
								class="fa fa-level-up fa-rotate-90"></i> <span class="text">Nhiệm vụ tôi theo dõi</span>
						</a></li>
					<li><a class="" href="https://erp.nhanh.vn/work/task/report"><i class="fa fa-bug"></i> <span
								class="text">Báo lỗi | Cải tiến hệ thống ERP</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-27" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-24"
						aria-owns="mm-24" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Lịch làm việc
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-24"
						aria-hidden="true"> Lịch làm việc </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/work/calendar/index2"><i class="fa fa-calendar-o"></i>
							<span class="text">Lịch cá nhân</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/work/calendar/add"><i class="fa fa-plus"></i> <span
								class="text">Thêm lịch làm việc</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-28" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-24"
						aria-owns="mm-24" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Cuộc họp
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-24"
						aria-hidden="true"> Cuộc họp </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/work/meeting/index"><i class="fa fa-comments"></i> <span
								class="text">Cuộc họp bạn tham gia</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/work/meeting/add"><i class="fa fa-plus"></i> <span
								class="text">Thêm cuộc họp</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-29" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile"
						aria-owns="parentMenuLeftMobile" aria-haspopup="true"><span class="mm-sronly">Close submenu
							(Khách hàng)</span></a><a class="mm-title"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile" aria-hidden="true">Khách
						hàng</a></div>
				<ul class="mm-listview">
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-30" aria-owns="mm-30"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Lịch làm việc )</span></a><a
							class="js-sub-menu-toggle" rel="/crm/calendar/personalview"><i class="fa fa-calendar"></i>
							<span class="text">Lịch làm việc</span> <i class="toggle-icon fa fa-angle-right"></i></a>
					</li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-31" aria-owns="mm-31"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Thông tin )</span></a><a
							class="js-sub-menu-toggle" rel="/crm/lead/index"><i class="fa fa-info"></i> <span
								class="text">Thông tin</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-32" aria-owns="mm-32"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Gian hàng )</span></a><a
							class="js-sub-menu-toggle" rel="/crm/service/index"><i class="fa fa-home"></i> <span
								class="text">Gian hàng</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-33" aria-owns="mm-33"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Từ khóa )</span></a><a
							class="js-sub-menu-toggle" rel="/crm/keyword/index"><i class="fa fa-search"></i> <span
								class="text">Từ khóa</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/contact/index"><i class="fa fa-user"></i> <span
								class="text">Liên hệ</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/requirement/index"><i class="fa fa-cogs"></i> <span
								class="text">Triển khai dịch vụ</span> </a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-34" aria-owns="mm-34"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Yêu cầu )</span></a><a
							class="js-sub-menu-toggle" rel="/crm/requirement/index"><i class="fa fa-cog"></i> <span
								class="text">Yêu cầu</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-35" aria-owns="mm-35"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Hợp đồng )</span></a><a
							class="js-sub-menu-toggle" rel="/crm/contract/index"><i class="fa fa-book"></i> <span
								class="text">Hợp đồng</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-36" aria-owns="mm-36"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Chỉ tiêu )</span></a><a
							class="js-sub-menu-toggle" rel="/crm/target/index"><i class="fa fa-bullseye"></i> <span
								class="text">Chỉ tiêu</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/campaign/index"><i class="fa fa-suitcase"></i> <span
								class="text">Marketing Campaign</span> </a></li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-37" aria-owns="mm-37"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Báo cáo )</span></a><a
							class="js-sub-menu-toggle" rel="/crm/report/target"><i class="fa fa-bar-chart-o"></i> <span
								class="text">Báo cáo</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-30" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-owns="mm-29" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Lịch làm việc
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-hidden="true"> Lịch làm việc </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/crm/calendar/add"><i class="fa fa-plus"></i> <span
								class="text">Thêm sự kiện</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/calendar/personalview"><i class="fa fa-calendar"></i>
							<span class="text">Lịch làm việc cá nhân</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-31" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-owns="mm-29" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Thông tin
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-hidden="true"> Thông tin </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/crm/lead/add"><i class="fa fa-plus"></i> <span
								class="text">Nhập thông tin</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-32" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-owns="mm-29" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Gian hàng
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-hidden="true"> Gian hàng </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/crm/service/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách Gian hàng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/service/expried"><i class="fa fa-list"></i> <span
								class="text">Gian hàng sắp hết hạn</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/service/exprieddate"><i class="fa fa-list"></i> <span
								class="text">Gian hàng hết hạn</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-33" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-owns="mm-29" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Từ khóa
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-hidden="true"> Từ khóa </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/crm/keyword/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách từ khóa</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-34" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-owns="mm-29" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Yêu cầu
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-hidden="true"> Yêu cầu </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/crm/requirement/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách yêu cầu Task</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/requirementemployee"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Yêu cầu task nhân viên</span> </a>
					</li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/requirementcustomer"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Yêu cầu task khách hàng</span> </a>
					</li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-35" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-owns="mm-29" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Hợp đồng
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-hidden="true"> Hợp đồng </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/crm/contract/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách hợp đồng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/contract/transaction"><i class="fa fa-money"></i>
							<span class="text">Danh sách thanh toán</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/customer/productexpired"><i
								class="fa fa-clock-o"></i> <span class="text">Các hợp đồng hết hạn</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/contract/template"><i class="fa fa-list"></i> <span
								class="text">Danh sách mẫu in</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/contract/addtemplate"><i class="fa fa-plus"></i>
							<span class="text">Thêm mẫu in</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-36" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-owns="mm-29" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Chỉ tiêu
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-hidden="true"> Chỉ tiêu </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/crm/target/index"><i class="fa fa-list"></i> <span
								class="text">Danh sách chỉ tiêu</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/target/registtarget"><i class="fa fa-bullseye"></i>
							<span class="text">Đăng kí chỉ tiêu</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-37" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-owns="mm-29" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Báo cáo
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-29"
						aria-hidden="true"> Báo cáo </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/crm/report/target"><i class="fa fa-bar-chart-o"></i>
							<span class="text">Nhân viên VG</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/employee"><i class="fa fa-bar-chart-o"></i>
							<span class="text">Doanh thu theo nhân viên</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/department"><i class="fa fa-bar-chart-o"></i>
							<span class="text">Doanh thu theo phòng ban</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/product"><i class="fa fa-bar-chart-o"></i>
							<span class="text">Doanh thu theo sản phẩm</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/location"><i class="fa fa-bar-chart-o"></i>
							<span class="text">Doanh thu theo địa điểm</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/rank"><i class="fa fa-bar-chart-o"></i> <span
								class="text">Xếp hạng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/contractforservice"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Doanh số gian hàng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/productforemployee"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Doanh thu NV theo Sản phẩm</span> </a>
					</li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/contractrequirement"><i
								class="fa fa-bar-chart-o"></i> <span class="text">THDV theo công ty</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/revanuevg"><i class="fa fa-bar-chart-o"></i>
							<span class="text">Doanh Số VG</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/confirmrequirement"><i
								class="fa fa-bar-chart-o"></i> <span class="text">THDV theo người thực hiện</span> </a>
					</li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/carevg"><i class="fa fa-bar-chart-o"></i>
							<span class="text">Chăm sóc Gian Hàng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/rawserviceproduct"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Gian hàng - sản phẩm</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/survey"><i class="fa fa-bar-chart-o"></i>
							<span class="text">Khảo sát kinh doanh</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/vgnewcustomer"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Hợp đồng mới (VG)</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/index"><i class="fa fa-bar-chart-o"></i> <span
								class="text">Chăm sóc</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/customer"><i class="fa fa-bar-chart-o"></i>
							<span class="text">Khách hàng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/expirationcontract"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Hợp đồng hết hạn</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/serviceexpired"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Hợp đồng hết hạn trong tháng</span>
						</a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/employeecare"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Chăm sóc khách hàng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/employeecarevg"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Chăm sóc khách hàng VG</span> </a>
					</li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/comparedepartment"><i
								class="fa fa-bar-chart-o"></i> <span class="text">So sánh phòng ban tháng trước</span>
						</a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/statuscustomer"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Trạng thái khách hàng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/statusproduct"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Trạng thái KH theo Sản phẩm</span>
						</a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/customercarecompany"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Chăm sóc theo công ty</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/customercaredepartment"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Chăm sóc theo phòng ban</span> </a>
					</li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/customercaredailytarget"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Chỉ tiêu chăm sóc từng ngày</span>
						</a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/serviceexpired"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Gian hàng hết hạn</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/mettingvg"><i class="fa fa-bar-chart-o"></i>
							<span class="text">Đến gặp của NV theo từng mục đích</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/sourceaccount"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Nguồn khách hàng</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/accounttoemployee"><i
								class="fa fa-bar-chart-o"></i> <span class="text">Trạng thái khách theo nhân viên</span>
						</a></li>
					<li><a class="" href="https://erp.nhanh.vn/crm/report/bill"><i class="fa fa-bar-chart-o"></i> <span
								class="text">Xuất hóa đơn theo ngày tháng</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-38" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile"
						aria-owns="parentMenuLeftMobile" aria-haspopup="true"><span class="mm-sronly">Close submenu (Cải
							tiến)</span></a><a class="mm-title"
						href="https://erp.nhanh.vn/asset/manage/index#parentMenuLeftMobile" aria-hidden="true">Cải
						tiến</a></div>
				<ul class="mm-listview">
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-39" aria-owns="mm-39"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Danh mục cải tiến )</span></a><a
							class="js-sub-menu-toggle" rel="/idea/category"><i class="fa fa-sun-o"></i> <span
								class="text">Danh mục cải tiến</span> <i class="toggle-icon fa fa-angle-right"></i></a>
					</li>
					<li><a class="mm-next" href="https://erp.nhanh.vn/asset/manage/index#mm-40" aria-owns="mm-40"
							aria-haspopup="true"><span class="mm-sronly">Open submenu ( Cải tiến )</span></a><a
							class="js-sub-menu-toggle" rel="/idea"><i class="fa fa-graduation-cap"></i> <span
								class="text">Cải tiến</span> <i class="toggle-icon fa fa-angle-right"></i></a></li>
					<li><a class="" href="https://erp.nhanh.vn/idea"><i class="fa fa-bar-chart-o"></i> <span
								class="text">Báo cáo</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-39" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-38"
						aria-owns="mm-38" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Danh mục cải tiến
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-38"
						aria-hidden="true"> Danh mục cải tiến </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/idea/category"><i class="fa fa-list"></i> <span
								class="text">Danh mục cải tiến</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/idea/category/add"><i class="fa fa-plus"></i> <span
								class="text">Thêm danh mục cải tiến</span> </a></li>
				</ul>
			</div>
			<div class="mm-panel mm-hidden mm-hasnavbar" id="mm-40" aria-hidden="true">
				<div class="mm-navbar"><a class="mm-btn mm-prev" href="https://erp.nhanh.vn/asset/manage/index#mm-38"
						aria-owns="mm-38" aria-haspopup="true"><span class="mm-sronly">Close submenu ( Cải tiến
							)</span></a><a class="mm-title" href="https://erp.nhanh.vn/asset/manage/index#mm-38"
						aria-hidden="true"> Cải tiến </a></div>
				<ul class="sub-menu mm-listview">
					<li><a class="" href="https://erp.nhanh.vn/idea/manage"><i class="fa fa-list"></i> <span
								class="text">Danh sách cải tiến</span> </a></li>
					<li><a class="" href="https://erp.nhanh.vn/idea/manage/add"><i class="fa fa-plus"></i> <span
								class="text">Thêm cải tiến</span> </a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="mm-0" class="mm-page mm-slideout">
		<div class="wrapper">
			<header class="top-bar">
				<style>
					.top-bar .notifications .general .dropdown-menu {
						left: -250px !important
					}

					.top-bar .notifications .inbox .dropdown-menu {
						left: -250px !important
					}

					.dropdown-menu li {
						position: relative
					}

					.timestamp {
						position: absolute;
						bottom: 0px;
						right: 5px
					}
				</style>
				<div class="container">
					<div class="row">
						<!-- logo -->
						<div class="col-md-2 logo">
							<a href="https://erp.nhanh.vn/crm"> <img alt="Nhanh.vn"
									src="{{ asset('asset/images/nhanh_white.png') }}" style="height: 30px">
							</a>
							<!-- responsive top menu bar icon -->

							<!-- end responsive menu bar icon -->
							<i class="fa fa-search" id="searchFeatures" title="Tìm chức năng"></i>
						</div>
						<!-- end logo -->
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-9 topMenu">
									<ul class="nav nav-tabs">
										<li><a href="https://erp.nhanh.vn/company">Công ty</a></li>
										<li><a href="https://erp.nhanh.vn/hrm">Nhân sự</a></li>
										<li class="active"><a href="{{ route('get.asset.manage.index') }}">Tài sản</a></li>
										<li><a href="{{ route('get.document.document.index') }}">Tài liệu</a></li>
										<li><a href="https://erp.nhanh.vn/accounting">Kế toán</a></li>
										<li><a href="https://erp.nhanh.vn/work">Công việc</a></li>
										<li><a href="https://erp.nhanh.vn/crm">Khách hàng</a></li>
										<li><a href="https://erp.nhanh.vn/idea">Cải tiến</a></li>
									</ul>
								</div>
								<div class="col-md-3 topUserBar">
									<div class="top-bar-right">
										<!-- responsive menu bar icon -->
										<a style="cursor: pointer;color:#fff;float:left;font-size:24px;"
											href="https://erp.nhanh.vn/asset/manage/index#mainMenuLeftMobile"
											id="btMenuMobile" class="hidden-md hidden-lg"><i
												class="fa fa-list-ul"></i></a>
										<!-- end responsive menu bar icon -->

										<div class="notifications">
											<ul>
												<li class="notification-item general" id="nn-bell">
													<div class="btn-group">
														<a data-toggle="dropdown" class="dropdown-toggle"
															href="https://erp.nhanh.vn/asset/manage/index#"> <i
																class="fa fa-bell"></i> <span class="count"></span>
															<span class="circle"></span>
														</a>
														<ul role="menu" class="dropdown-menu">

														</ul>
													</div>
												</li>

												<li class="notification-item inbox">
													<!-- Quick access -->
													<div class="btn-group">
														<a data-toggle="dropdown" class="dropdown-toggle"
															href="https://erp.nhanh.vn/asset/manage/index#"
															aria-expanded="false">
															<i class="fa fa-plus fa-lg"></i><span class="count"></span>
															<span class="circle"></span>
														</a>
														<ul role="menu" class="dropdown-menu">
															<li class="notification-header"><em>Truy cập nhanh</em></li>
															<li>
																<a href="https://erp.nhanh.vn/profile"> <i
																		class="fa fa-user"></i> <span class="text">Thông
																		tin cá nhân</span>
																</a>
															</li>
															<li>
																<a href="https://erp.nhanh.vn/hrm/attendance/index"> <i
																		class="fa fa-calendar"></i> <span
																		class="text">Bảng công cá nhân</span>
																</a>
															</li>
															<li>
																<a href="https://erp.nhanh.vn/hrm/lunch/add"> <i
																		class="fa fa-cutlery"></i> <span
																		class="text">Đặt cơm</span>
																</a>
															</li>
															<li>
																<a
																	href="https://erp.nhanh.vn/hrm/lunch/updatesittingposition">
																	<i class="fa fa-edit"></i> <span class="text">Cập
																		nhật vị trí ngồi</span>
																</a>
															</li>
															<li>
																<a href="https://erp.nhanh.vn/hrm/absence/add"> <i
																		class="fa fa-pencil"></i> <span class="text">Tạo
																		đơn xin nghỉ</span>
																</a>
															</li>
															<li>
																<a href="https://erp.nhanh.vn/hrm/absence/addabsence">
																	<i class="fa fa-pencil"></i> <span class="text">Tạo
																		đơn vắng mặt</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<!-- end notification: general -->
											</ul>
										</div>



										<!-- logged user and the menu -->
										<div class="logged-user">
											<div class="btn-group">
												<a data-toggle="dropdown" class="btn btn-link dropdown-toggle"
													href="https://erp.nhanh.vn/asset/manage/index#">
													<!-- 									<img src="/images/nhanh_16x16.png"> -->
													<span class="name">{{ Auth::user()->name }}</span> <span class="caret"></span> </a>
												<ul role="menu" class="dropdown-menu">
													<li>
														<a href="https://erp.nhanh.vn/profile"> 
															<i class="fa fa-user"></i> 
															<span class="text">Thông tin tài khoản</span>
														</a>
													</li>
													<li>
														<a href="{{ route('logout') }}" onclick="
																event.preventDefault();
																document.getElementById('logout').submit()"> 
															<i class="fa fa-power-off"></i> 
															<span class="text">Thoát</span>
														</a>
													</li>
													<form method="POST" action="{{ route('logout') }}" style="display: none" id="logout">
														@csrf
													</form>
												</ul>
											</div>
										</div>
										<!-- end logged user and the menu -->
									</div>
									<!-- /top-bar-right -->
								</div>
							</div>

							<!-- /row -->
						</div>
					</div>
					<!-- /row -->
				</div>

			</header>