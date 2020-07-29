@extends('Layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/customer/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh sách khách hàng')

@section('content-page')
			
	<div class="col-md-10 content-wrapper">
		<ul class="breadcrumb">
			<li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
			<li><a href="https://erp.nhanh.vn/crm/account/index">Danh sách khách hàng</a></li>
		</ul>
		<div id="page-crm-contact">
			<div class="filterContainer">
				<form method="GET" name="crmAccountFilter" class="form-inline" role="form"
					id="crmAccountFilter"><input type="hidden" name="companyId" id="companyId"
						class="form-control" value="391">
					<div class="form-group"><select name="supplyCompanyId" id="supplyCompanyId"
							class="form-control">
							<option value="">- Cty cung cấp sp -</option>
							<option value="1">Nhanh.vn</option>
							<option value="10">VNP group</option>
							<option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
							<option value="315">------Vật giá - Hà Nội</option>
							<option value="391">------123job.vn</option>
							<option value="14">---Easycare.vn</option>
							<option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
							<option value="384">---Công ty cổ phần WeHelp</option>
						</select></div>
					<div class="form-group"><input type="text" name="id" maxlength="255"
							placeholder="ID" id="id" class="form-control" value=""></div>
					<div class="form-group"><input type="text" name="name" maxlength="255"
							placeholder="Họ tên" id="name" class="form-control" value=""></div>
					<div class="form-group"><input type="text" name="contractValue" maxlength="255"
							placeholder="Giá trị" id="contractValue" class="form-control" value="">
					</div> <input type="hidden" name="contract_type" id="contract_type"
						class="form-control" value="">
					<div class="form-group"><input type="text" name="mobile" maxlength="11"
							placeholder="Mobile" id="mobile" class="form-control" value=""></div>
					<div class="form-group"><select name="status" id="status" class="form-control">
							<option value="">- Trạng thái -</option>
							<option value="-1">Chưa có trạng thái</option>
							<option value="1">Chưa sử dụng</option>
							<option value="2">Đang triển khai</option>
							<option value="3">Cần hỗ trợ, tư vấn</option>
							<option value="4">Đang sử dụng</option>
							<option value="5">Ngừng sử dụng</option>
							<option value="6">Dùng thử</option>
						</select></div>
					<div class="form-group"><select name="assignType" id="assignType"
							class="form-control">
							<option value="">- phụ trách -</option>
							<option value="4">Không có người phụ trách</option>
							<option value="5">Không có nhân viên kỹ thuật</option>
							<option value="1">Nhân viên kinh doanh</option>
							<option value="2">Nhân viên chăm sóc</option>
							<option value="3">Nhân viên hỗ trợ</option>
						</select></div> <input type="hidden" name="assignedToId" id="assignedToId"
						class="form-control" value="">
					<div class="form-group"><input type="text" name="assignedToIdSuggest"
							class="form-control erp-form-userIdSuggest ui-autocomplete-input"
							data-lookup="assignedToId" placeholder="Người phụ trách"
							id="assignedToIdSuggest" value="" autocomplete="off"></div>
					<div class="form-group"><select name="cityId" id="cityId" class="form-control">
							<option value="">- Thành phố -</option>
							<option value="2">Hà Nội</option>
							<option value="3">Hồ Chí Minh</option>
							<option value="4">An Giang</option>
							<option value="5">Bà Rịa - Vũng Tàu</option>
							<option value="6">Bắc Ninh</option>
							<option value="7">Bắc Giang</option>
							<option value="8">Bình Dương</option>
							<option value="9">Bình Định</option>
							<option value="10">Bình Phước</option>
							<option value="11">Bình Thuận</option>
							<option value="13">Bến Tre</option>
							<option value="14">Bắc Cạn</option>
							<option value="15">Cần Thơ</option>
							<option value="17">Khánh Hòa</option>
							<option value="19">Thừa Thiên Huế</option>
							<option value="20">Lào Cai</option>
							<option value="21">Quảng Ninh</option>
							<option value="22">Đồng Nai</option>
							<option value="23">Nam Định</option>
							<option value="24">Cà Mau</option>
							<option value="25">Cao Bằng</option>
							<option value="26">Gia Lai</option>
							<option value="27">Hà Giang</option>
							<option value="28">Hà Nam</option>
							<option value="30">Hà Tĩnh</option>
							<option value="31">Hải Dương</option>
							<option value="32">Hải Phòng</option>
							<option value="33">Hoà Bình</option>
							<option value="34">Hưng Yên</option>
							<option value="35">Kiên Giang</option>
							<option value="36">Kon Tum</option>
							<option value="37">Lai Châu</option>
							<option value="38">Lâm Đồng</option>
							<option value="39">Lạng Sơn</option>
							<option value="40">Long An</option>
							<option value="41">Nghệ An</option>
							<option value="42">Ninh Bình</option>
							<option value="43">Ninh Thuận</option>
							<option value="44">Phú Thọ</option>
							<option value="45">Phú Yên</option>
							<option value="46">Quảng Bình</option>
							<option value="47">Quảng Nam</option>
							<option value="48">Quảng Ngãi</option>
							<option value="49">Quảng Trị</option>
							<option value="50">Sóc Trăng</option>
							<option value="51">Sơn La</option>
							<option value="52">Tây Ninh</option>
							<option value="53">Thái Bình</option>
							<option value="54">Thái Nguyên</option>
							<option value="55">Thanh Hoá</option>
							<option value="56">Tiền Giang</option>
							<option value="57">Trà Vinh</option>
							<option value="58">Tuyên Quang</option>
							<option value="59">Vĩnh Long</option>
							<option value="60">Vĩnh Phúc</option>
							<option value="61">Yên Bái</option>
							<option value="62">Đắc Lắc</option>
							<option value="64">Đồng Tháp</option>
							<option value="65">Đà Nẵng</option>
							<option value="66">Buôn Mê Thuột</option>
							<option value="67">Đắc Nông</option>
							<option value="68">Hậu Giang</option>
							<option value="70">Bạc Liêu</option>
							<option value="71">Điện Biên</option>
						</select></div>
					<div class="form-group"><select name="districtId" id="districtId"
							class="form-control">
							<option value="">- Quận huyện -</option>
						</select></div>
					<div class="form-group"><select name="numberOfEmployees" id="numberOfEmployees"
							class="form-control">
							<option value="">- Số nhân viên -</option>
							<option value="1">Dưới 10</option>
							<option value="2">10-50</option>
							<option value="3">50-100</option>
							<option value="4">100-200</option>
							<option value="5">200-500</option>
							<option value="6">Trên 500</option>
						</select></div>
					<div class="form-group"><input type="text" name="numberOfBranchs" maxlength="11"
							placeholder="Số chi nhánh" id="numberOfBranchs" class="form-control"
							value=""></div>
					<div class="form-group"><select name="haveContract" id="haveContract"
							class="form-control">
							<option value="">- Hợp đồng -</option>
							<option value="1">Có</option>
							<option value="2">Không</option>
						</select></div>
					<div class="form-group"><select name="paidStatus" id="paidStatus"
							class="form-control">
							<option value="">- TT thanh toán -</option>
							<option value="1">Đã thanh toán</option>
							<option value="2">Thanh toán 1 phần</option>
							<option value="3">Chưa thanh toán</option>
						</select></div>
					<div class="form-group"><input type="text" name="storeNhanh" maxlength="11"
							placeholder="Id hoặc tên gian hàng Nhanh" style="min-width: 200px;"
							id="storeNhanh" class="form-control" value=""></div>
					<div class="form-group"><select name="hardnhanhStoreId" id="hardnhanhStoreId"
							class="form-control">
							<option value="">- Gian hàng trên Nhanh -</option>
							<option value="1">Có</option>
							<option value="-1">Không</option>
						</select></div>
					<div class="form-group"><input type="text" name="daterangepicker"
							class="form-control date-range-picker"
							placeholder="Ngày cập nhật trạng thái" id="daterangepicker" value="">
					</div>
					<div class="form-group"><select name="expriedContract" id="expriedContract"
							class="form-control">
							<option value="">- Hạn hợp đồng -</option>
							<option value="1">Đã hết hạn</option>
							<option value="-1">Chưa hết hạn</option>
						</select></div>
					<div class="form-group"><select name="emailStatus" id="emailStatus"
							class="form-control">
							<option value="">- Trạng thái Email-</option>
							<option value="-1">Chưa có email</option>
							<option value="1">Đã có email</option>
						</select></div>
					<div class="form-group"><input type="text" name="applyTransactionDateRange"
							maxlength="225" placeholder="Ngày duyệt phiếu thu"
							class="form-control date-range-picker" id="applyTransactionDateRange"
							value=""></div>
					<div class="form-group"><input type="text" name="lastCareDaterangepicker"
							class="form-control date-range-picker"
							placeholder="Ngày chăm sóc cuối cùng" id="lastCareDaterangepicker"
							value=""></div>
					<div class="form-group"><select name="saleStage" id="saleStage"
							class="form-control">
							<option value="">- Level Khách hàng -</option>
							<option value="20">L0 - Cần xử lý</option>
							<option value="22">L1B - Thông tin sai</option>
							<option value="23">L2A - Có nhu cầu</option>
							<option value="24">L2B1 - Không có nhu cầu</option>
							<option value="34">L2B2 - Đã dùng PM khác</option>
							<option value="25">L3A - Đã hẹn</option>
							<option value="26">L4A - Đã gặp</option>
							<option value="27">L5A1 - Dùng thử</option>
							<option value="28">L5A2 - Có yêu cầu</option>
							<option value="29">L6A - Đã ký hợp đồng</option>
							<option value="30">L6B1 - Từ chối, giá đắt</option>
							<option value="35">L6B2 - PM không phù hợp</option>
							<option value="36">L6B3 - Không phản hồi</option>
							<option value="31">L7A - Đã triển khai</option>
							<option value="32">L8A - Đã bán chéo</option>
							<option value="33">L9A - Đã tái ký</option>
							<option value="37">L9B1 - Ngừng kinh doanh</option>
							<option value="38">L9B2 - Dùng PM khác</option>
						</select></div>
					<div class="form-group"><input name="submit" type="submit"
							id="btnFilterCrmContact" class="form-control btn btn-primary"
							value="Lọc"></div>
				</form>
			</div>
			<div>
				<div class="page-overview">
					<div style="margin-bottom: 20px;" class="btn-group btn-group-justified">
						<a href="https://erp.nhanh.vn/crm/account/index"
							class="btn col-sm-6 active">Tất cả</a>
						<a href="https://erp.nhanh.vn/crm/account/index?contract_type=new"
							class="btn col-sm-6 "><i class="fa fa-user-plus"></i>Khách hàng mới ký
							hợp đồng</a>
						<a href="https://erp.nhanh.vn/crm/account/index?contract_type=action"
							class="btn col-sm-6 ">Khách hàng thực hiện hợp đồng</a>
						<a href="https://erp.nhanh.vn/crm/account/index?contract_type=accept"
							class="btn col-sm-6 ">Khách hàng đã nghiệm thu</a>
					</div>
				</div>


			</div>


			<div class="dgContainer">
				<div style="display: none; width: 1569px;" class="stickyHeader">
					<table class="table table-bordered" cellspacing="0" cellpadding="0">
						<thead>
							<tr class="even">
								<th class="colCheckbox" style="width: 36px;"><input type="checkbox"
										class="cb" id=""></th>
								<th style="width: 70px;">ID</th>
								<th style="width: 72px;">Tác vụ</th>
								<th style="width: 296px;">Khách hàng</th>
								<th style="width: 203px;">Phụ trách</th>
								<th style="width: 586px;">Lịch sử chăm sóc</th>
								<th style="width: 57px;"><a
										href="https://erp.nhanh.vn/crm/account/index?sort=contractNumber&amp;dir=asc"><i
											class="fa fa-sort"></i> HD</a></th>
								<th style="width: 101px;"><a
										href="https://erp.nhanh.vn/crm/account/index?sort=contractValue&amp;dir=asc"><i
											class="fa fa-sort"></i> Giá trị</a></th>
								<th style="width: 101px;"><a
										href="https://erp.nhanh.vn/crm/account/index?sort=contractPaid&amp;dir=asc"><i
											class="fa fa-sort"></i> Đã trả</a></th>
								<th class="col-align-left" title="Thao tác" style="width: 46px;"><i
										class="fa fa-cogs icon"></i></th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="row">
					<div class="col-md-6 dgButtons">
						<div class="btn-group lolify-features" data-toggle="tooltip"
							data-placement="top" title="Xuất excel" style="margin-left: 5px">
							<button class="btn btn-primary btn-sm dropdown-toggle" type="button"
								aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
								<span class="fa fa-book" style="margin-right:5px"></span>Xuất Excel
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href="https://erp.nhanh.vn/crm/account/index#"
										id="exportExcel"><i class="fa fa-book"></i> Xuất excel trang
										hiện tại</a>
								</li>
								<li>
									<a href="https://erp.nhanh.vn/crm/account/index#"
										id="exportAll"><i class="fa fa-book"></i> Xuất excel toàn bộ
										các trang</a>
								</li>
							</ul>
						</div>&nbsp;<div class="btn-group lolify-features" data-toggle="tooltip"
							data-placement="top" title="" style="margin-left: 5px"
							data-original-title="Hành động">
							<button class="btn btn-primary btn-sm dropdown-toggle" type="button"
								aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
								<span class="fa fa-cogs" style="margin-right:5px"></span>Hành động
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="javascript:;" id="updateLevelCustomerBtn"><i
											class="fa fa-refresh"></i> Cập nhật level khách hàng</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 paginatorItem">
						<div class="paginator"><span class="labelPages">1 - 1 / 1</span></div>
					</div>
					<div style="clear: both;"></div><br>
				</div>
				<table id="dgCrmLead" class="table table-bordered">
					<thead>
						<tr class="even">
							<th class="colCheckbox"><input type="checkbox" class="cb"
									id="cbCheckAll"></th>
							<th>ID</th>
							<th>Tác vụ</th>
							<th>Khách hàng</th>
							<th>Phụ trách</th>
							<th>Lịch sử chăm sóc</th>
							<th><a
									href="https://erp.nhanh.vn/crm/account/index?sort=contractNumber&amp;dir=asc"><i
										class="fa fa-sort"></i> HD</a></th>
							<th><a
									href="https://erp.nhanh.vn/crm/account/index?sort=contractValue&amp;dir=asc"><i
										class="fa fa-sort"></i> Giá trị</a></th>
							<th><a
									href="https://erp.nhanh.vn/crm/account/index?sort=contractPaid&amp;dir=asc"><i
										class="fa fa-sort"></i> Đã trả</a></th>
							<th class="col-align-left" title="Thao tác"><i
									class="fa fa-cogs icon"></i></th>
						</tr>
					</thead>
					<tbody>
						<tr class="">
							<td class="colCheckbox"><input data-leadid="405449" class="cb leadCb"
									type="checkbox"></td>
							<td><a title="xem chi tiết"
									href="https://erp.nhanh.vn/crm/account/view?id=21810">21810</a>
							</td>
							<td class="colControls">
								<div class="dropdown">
									<a data-toggle="dropdown"
										href="https://erp.nhanh.vn/crm/account/index#"
										class="fa fa-plus-circle icon"></a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
										<li>
											<a class=""
												href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=21810">
												<i class="fa fa-users"></i> Thêm cuộc gặp
											</a>
										</li>
										<li>
											<a class=""
												href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=21810">
												<i class="fa fa-phone"></i> Thêm cuộc gọi
											</a>
										</li>
										<li>
											<a class=""
												href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=21810">
												<i class="fa fa-calendar"></i> Đặt lịch
											</a>
										</li>
										<li>
											<a class=""
												href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=21810">
												<i class="fa fa-phone-square"></i> Yêu cầu gọi
											</a>
										</li>
										<li>
											<a class=""
												href="https://erp.nhanh.vn/crm/activity/adddeploy?accountId=21810">
												<i class="fa fa-cogs"></i> Triển khai hợp đồng
											</a>
										</li>
										<li>
											<a class=""
												href="https://erp.nhanh.vn/crm/contract/add?accountId=21810">
												<i class="fa fa-paste"></i> Thêm hợp đồng
											</a>
										</li>

										<li>
											<a class=""
												href="https://erp.nhanh.vn/crm/requirement/add?accountId=21810">
												<i class="fa fa-cog"></i> Thêm yêu cầu
											</a>
										</li>
										<li>
											<a class="editDescription" data-leadid="405449"
												data-description="" href="javascript:;">
												<i class="fa fa-edit"></i> Sửa ghi chú
											</a>
										</li>
									</ul>
								</div><br><a class="fa fa-users assignLead"
									title="Quản lí người phụ trách" data-leadid="405449"></a><br><a
									class="fa  fa-thumb-tack discard" title="Hủy chăm sóc"
									data-leadid="405449"></a><br><span data-id="405449"
									data-toggle="tooltip" data-title="Cập nhật Level khách hàng"
									style="cursor:pointer"
									class="updateOpportunityStatus icon fa fa-refresh"></span>
							</td>
							<td class="">
								<div class="item-block">
									<div class="item-icon"><i class="fa fa-building-o"></i></div>
									<div class="item-infor"><a title="xem chi tiết"
											href="https://erp.nhanh.vn/crm/account/view?id=21810">CÔNG
											TY TNHH AUCO</a></div>
								</div>
								<div class="item-block">
									<div class="item-icon"><i class="fa fa-check-square userStatus"
											data-toggle="tooltip" data-placement="top"
											data-original-title="Trạng thái khách hàng"></i></div>
									<div class="item-infor">
										<span class="userStatus">Dùng thử</span>
									</div>
								</div>
								<div class="item-block opportunityStatus21810" data-toggle="tooltip"
									data-title="Cấp độ khách hàng" data-original-title="" title="">
									<div class="item-icon"><i
											class="fa fa-level-up text-success"></i></div>
									<div class="item-infor"><span class="text text-success">L6A - Đã
											ký hợp đồng <i style="cursor:pointer;" data-status="29"
												data-accountid="21810"
												class="fa fa-times text-danger removeOpportunityStatus"></i></span>
									</div>
								</div>
								<div class="line-break"></div>
							</td>
							<td class="col-assignedTo">
								<div title="Kinh doanh"><i class="fa fa-flag-o"></i> Đỗ Thị Thanh
									Nhàn</div>
								<div title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Văn Hưng
								</div>
							</td>
							<td class="">
								<ul class="td-history">
									<li class="last"><a class="text-info"
											href="https://erp.nhanh.vn/crm/activity/history?accountId=21810">Xem
											chi tiết 15 hành động</a></li>
								</ul>
							</td>
							<td class=""><a
									href="https://erp.nhanh.vn/crm/contract?accountName=C%C3%94NG%20TY%20TNHH%20AUCO&amp;accountId=21810">1</a>
							</td>
							<td class=""><a
									href="https://erp.nhanh.vn/crm/contract/index?accountId=21810">1.595.000</a>
							</td>
							<td class=""><a
									href="https://erp.nhanh.vn/crm/contract/transaction?accountId=21810">1.595.000</a><br>(100%)
							</td>
							<td>
								<div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
										data-toggle="dropdown"></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a
												href="https://erp.nhanh.vn/crm/account/edit?id=21810">Sửa</a>
										</li>
										<li><a data-id="21810" class="addTag updateNhanhStoreId">Cập
												nhật doanh nghiệp trên Nhanh</a></li>
									</ul>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="row">
					<div class="col-md-6 dgButtons"></div>
					<div class="col-md-6 paginatorItem">
						<div class="paginator"><span class="labelPages">1 - 1 / 1</span></div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="errorModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Lỗi</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger alert-dismissable">

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default"
							data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Xác nhận</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning alert-dismissable">

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning save"
							data-saving-text="Saving...">Có</button>
						<button type="button" class="btn btn-default"
							data-dismiss="modal">Không</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="confirmFreeModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Xác nhận giải phóng</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning alert-dismissable">
							Bạn muốn thả nổi các thông tin này ?
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning save"
							data-saving-text="Saving...">Có</button>
						<button type="button" class="btn btn-default"
							data-dismiss="modal">Không</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="selfAssignModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Nhận chăm sóc</h4>
					</div>
					<div class="modal-body">
						<div>
							<div class="col-md-2"><label>Vị trí: </label></div>
							<div class="col-md-9">
								<select class="lead_user_type form-control">
									<option value="1">Nhân viên kinh doanh</option>
									<option value="2">Nhân viên chăm sóc</option>
									<option value="3">Nhân viên hỗ trợ</option>
								</select>
							</div>
							<div style="clear: both;"></div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary save"
							data-saving-text="saving...">Lưu</button>
						<button type="button" class="btn btn-default"
							data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->

		<div class="modal fade" id="assignModal" tabindex="-1" role="dialog" aria-hidden="true"
			style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">×</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="myModalLabel">Danh sách bàn giao</h4>
					</div>
					<div class="modal-body" data-backdrop="false">
						<div class="loading fa fa-repeat fa-spin" style="display: none;"></div>
						<div class="formAssignt" style="display: block;">
							<div class="col-md-4">
								<fieldset>
									<legend>Kinh doanh</legend>
									<div class="bootstrap-tagsinput" id="saleAssign">
										<span class="tag label label-info" data-userid="8627">Đỗ Thị
											Thanh Nhàn<span class="removeTag"
												data-role="remove"></span></span><span
											class="tag label label-info" data-userid="5374">Nguyễn
											Văn Hưng<span class="removeTag"
												data-role="remove"></span></span><input size="1"
											type="text"
											class="userAssignSuggest ui-autocomplete-input"
											placeholder="" autocomplete="off">

									</div>
								</fieldset>
							</div>
							<div class="col-md-4">
								<fieldset>
									<legend>Telesale</legend>
									<div class="bootstrap-tagsinput" id="telesaleAssign">
										<input size="1" type="text"
											class="userAssignSuggest ui-autocomplete-input"
											placeholder="" autocomplete="off">
									</div>
								</fieldset>
							</div>
							<div class="col-md-4">
								<fieldset>
									<legend>Support</legend>
									<div class="bootstrap-tagsinput" id="supportAssign">
										<input size="1" type="text"
											class="userAssignSuggest ui-autocomplete-input"
											placeholder="" autocomplete="off">

									</div>

								</fieldset>
							</div>
							<div style="clear: both;"></div>
						</div>

						<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
							id="ui-id-1" tabindex="0" style="display: none;"></ul>
						<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
							id="ui-id-2" tabindex="0" style="display: none;"></ul>
						<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
							id="ui-id-3" tabindex="0" style="display: none;"></ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary saveMultiple"
							style="display:none;" data-loading-text="loading...">Lưu</button>
						<button type="button" class="btn btn-primary save"
							data-loading-text="loading..." data-leadid="405449">Lưu</button>
						<button type="button" class="btn btn-default"
							data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="updateNhanhStoreIdModal" tabindex="-1" role="dialog"
			aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Update doanh nghiệp trên nhanh</h4>
					</div>
					<div class="modal-body">
						<div class="form-horizontal inputArea" style="display: block;">
							<input type="hidden" class="form-control leadId" value="">
							<input type="hidden" class="form-control accountId" value="21810">
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
		<div class="modal fade" id="updateContactModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Cập nhật thông tin người liên hệ</h4>
					</div>
					<div class="modal-body">
						<div class="form-horizontal">
							<div class="form-group">
								<label class="form-label col-md-3">Tên người liên hệ:<span
										style="color:red;" class="required">*</span></label>
								<div class="col-md-8">
									<input type="text" id="name-contact-txt" class="form-control ">
								</div>
							</div>

							<div class="form-group">
								<label class="form-label col-md-3">Giới tính:<span
										style="color:red;" class="required">*</span></label>
								<div class="col-md-8">
									<select id="genderContact" class="form-control">
										<option value="1">Nam</option>
										<option value="2">Nữ</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label col-md-3">Số điện thoai:<span
										style="color:red;" class="required">*</span></label>
								<div class="col-md-8">
									<input type="text" id="mobile-contact-txt" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label col-md-3">Phòng ban:</label>
								<div class="col-md-8">
									<input type="text" id="department-contact-txt"
										class="form-control ">
								</div>
							</div>

							<div class="form-group">
								<label class="form-label col-md-3">Email:</label>
								<div class="col-md-8">
									<input type="text" id="email-contact-txt" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label col-md-3">Địa chỉ:</label>
								<div class="col-md-8">
									<input type="text" id="address-contact-txt"
										class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success save-contact">Lưu</button>
						<button type="button" class="btn btn-default"
							data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="updateOpportunityModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Cập nhật Level khách hàng</h4>
					</div>
					<div class="modal-body">
						<div class="form-horizontal">
							<div class="col-md-12">
								<div class="levelCustomerArea">
									<div class="clearfix"></div>
									<div class="col-md-2"><b>LEVEL 0</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="20">L0 - Cần xử lý</label>
									</div>

									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 1</b></div>
									<div class="col-md-5"></div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="22">L1B - Thông tin
											sai</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 2</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="23">L2A - Có nhu cầu</label>
									</div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="24">L2B1 - Không có
											nhu cầu</label>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-5"></div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="34">L2B2 - Đã dùng PM
											khác</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 3</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="25">L3A - Đã hẹn</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 4</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="26">L4A - Đã gặp</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 5</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="27">L5A1 - Dùng thử</label>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-2"></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="28">L5A2 - Có yêu cầu</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 6</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="29">L6A - Đã ký HĐ</label>
									</div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="30">L6B1 - Từ chối,
											giá đắt</label>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-5"></div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="35">L6B2 - PM không
											phù hợp</label>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-5"></div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="36">L6B3 - Không phản
											hồi</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 7</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="31">L7A - Đã triển khai</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 8</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="32">L8A - Đã bán chéo</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 9</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="33">L9A - Đã tái ký</label>
									</div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="37">L9B1 - Ngừng kinh
											doanh</label>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-5"></div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="38">L9B2 - Dùng PM
											khác</label>
									</div>
									<div class="clearfix"></div>
									<hr>
								</div>
							</div>

						</div>
					</div>
					<div style="border: none;" class="modal-footer">
						<button type="button" class="btn btn-info save-update-opportunity"
							data-saving-text="saving...">Cập nhật</button>
						<button type="button" class="btn btn-default"
							data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="updateMultiOpportunityModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Cập nhật Level khách hàng</h4>
					</div>
					<div class="modal-body">
						<div class="form-horizontal">
							<div class="col-md-12">
								<div class="levelCustomerArea">
									<div class="clearfix"></div>
									<div class="col-md-2"><b>LEVEL 0</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="20">L0 - Cần xử lý</label>
									</div>

									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 1</b></div>
									<div class="col-md-5"></div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="22">L1B - Thông tin
											sai</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 2</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="23">L2A - Có nhu cầu</label>
									</div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="24">L2B1 - Không có
											nhu cầu</label>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-5"></div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="34">L2B2 - Đã dùng PM
											khác</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 3</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="25">L3A - Đã hẹn</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 4</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="26">L4A - Đã gặp</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 5</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="27">L5A1 - Dùng thử</label>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-2"></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="28">L5A2 - Có yêu cầu</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 6</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="29">L6A - Đã ký HĐ</label>
									</div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="30">L6B1 - Từ chối,
											giá đắt</label>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-5"></div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="35">L6B2 - PM không
											phù hợp</label>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-5"></div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="36">L6B3 - Không phản
											hồi</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 7</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="31">L7A - Đã triển khai</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 8</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="32">L8A - Đã bán chéo</label>
									</div>
									<div class="clearfix"></div>
									<hr>
									<div class="col-md-2"><b>LEVEL 9</b></div>
									<div class="col-md-5">
										<label><input type="radio" name="levelSaleStage"
												class="levelSaleStageRadio" style="margin:0px 5px;"
												value="33">L9A - Đã tái ký</label>
									</div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="37">L9B1 - Ngừng kinh
											doanh</label>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-5"></div>
									<div class="col-md-5">
										<label class="text-danger"><input type="radio"
												name="levelSaleStage" class="levelSaleStageRadio"
												style="margin:0px 5px;" value="38">L9B2 - Dùng PM
											khác</label>
									</div>
									<div class="clearfix"></div>
									<hr>
								</div>
							</div>

						</div>
					</div>
					<div style="border: none;" class="modal-footer">
						<input type="hidden" id="leadIds" value="">
						<button type="button" class="btn btn-info save-multi-update-opportunity"
							data-saving-text="saving...">Cập nhật</button>
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
						<h4 class="modal-title">Thông báo!</h4>
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
		<div id="updateDescription" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-hidden="true">×</button>
						<h4 class="modal-title">Cập nhật thông tin ghi chú</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 form-horizontal">
								<div class="form-group">
									<div class="col-md-12">
										<textarea placeholder="Ghi chú" class="form-control"
											style="min-height: 90px;"
											id="description-txt"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" id="leadIdDescription">
						<button type="button"
							class="btn btn-success editDescriptionBtn">Lưu</button>
						<button type="button" class="btn btn-default"
							data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>
		<style>
			.active {
				background: #1b809e;
				color: #fff !important;
				border-radius: 5px 5px 0 0 !important;
			}

			.active:hover {
				color: #fff;

			}

			.page-overview a.btn {
				color: #1b809e;
				border-bottom: 1px solid #1b809e;
			}

			.userStatus {
				color: green;
			}

			#assignModal .modal-dialog {
				width: 900px;
			}

			#assignModal .bootstrap-tagsinput {
				width: 100%;
			}

			.modal .loading {
				font-size: 2em;
				display: block;
				margin: auto;
				width: 30px;
				height: 30px;
				text-align: center;
				padding: 0;
			}

			.bootstrap-tagsinput .label {
				display: inline-block;
			}

			i.description {
				font-size: 0.8em;
			}

			.dropdown-menu>li>a {
				text-align: left;
			}

			.item-block {
				width: 196px;
				padding: 0;
				border: none;
			}

			.item-icon {
				margin-right: 3px;
				display: inline-block;
				vertical-align: top;
			}

			.item-infor {
				width: 180px;
				display: inline-block;
			}

			.line-break {
				width: 100%;
				border-bottom: 1px dashed gray;
				margin: auto;
				margin-top: 3px;
				margin-bottom: 3px;
			}

			.td-history {
				margin: 0;
				padding: 0;
				min-width: 400px;
			}

			.col-assignedTo>div {
				min-width: 110px;
				margin: 5px 0;
			}

			.td-history li {
				margin: 5px;
				border-bottom: 1px dashed gray;
				padding: 0;
				list-style: none;
			}

			.td-history li.last {
				border-bottom: none;
			}

			.td-history .head-activity {
				font-size: 1.1em;
				font-weight: bold;
			}

			.td-history .infor-activity {
				padding-left: 20px;
			}

			.colControls .dropdown-menu {
				top: 0;
				left: 20px;
			}
		</style>
		<script>
			var noLeadSelectdMsg = 'Bạn phải chọn thông tin để bàn giao';
			var leadUserTypeSale = '1';
			var leadUserTypeTeleSale = '2';
			var leadUserTypeSupport = '3';
			var discardLeadMsg = 'Bạn không muốn chăm sóc khách hàng này nữa?';
		</script>
	</div>
				
@endsection

@section('js')

	<script type="text/javascript">
		var usrCnf = {
			language: 'vi'
		};
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/customer/saved_resource(2)') }}"></script>

@endsection
			