@extends('Layout.master5')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/idea/manage/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Cải tiến')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <style>
            .widget .widget-header h3 {
                width: 100%;
            }
        </style>
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/idea"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/idea/manage">Danh sách cải tiến</a></li>
        </ul>
        <div id="page-idea-contact">
            <div class="filterContainer">
                <form method="GET" name="ideaFilter" class="form-inline lolify" role="form"
                    id="ideaFilter">
                    <div class="col-md-10 lolify-default">

                        <div class="form-group">
                            <input type="text" name="daterangepicker"
                                class="form-control date-range-picker" placeholder="Ngày/Tháng/Năm"
                                id="daterangepicker" value=""> </div>
                        <div class="form-group">
                            <select name="companyId" id="companyId" class="form-control">
                                <option value="">- Công ty -</option>
                                <option value="10">VNP group</option>
                                <option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
                                <option value="315">------Vật giá - Hà Nội</option>
                                <option value="319">------Vật giá - Hồ Chí Minh</option>
                                <option value="365">------Vật giá - Hải Phòng</option>
                                <option value="387">------WeSave</option>
                                <option value="389">------123doc.org</option>
                                <option value="390">------Cunghocvui.com</option>
                                <option value="391">------123job.vn</option>
                                <option value="392">------9houz.com</option>
                                <option value="393">------123dok.com</option>
                                <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                                <option value="322">------Bảo Kim - Hà Nội</option>
                                <option value="323">------Bảo Kim - Hồ Chí Minh</option>
                                <option value="324">---Công ty cổ phần Nhanh.vn</option>
                                <option value="1">------Nhanh.vn</option>
                                <option value="366">------Nhanh.vn Đà Nẵng</option>
                                <option value="395">------Nhanh.vn HCM</option>
                                <option value="379">---Westay</option>
                                <option value="384">---Công ty cổ phần WeHelp</option>
                                <option value="398">---WeLove</option>
                            </select> </div>
                        <div class="form-group">
                            <select name="departmentId" id="departmentId" class="form-control">
                                <option value="">- Phòng ban -</option>
                                <option value="1270">Kinh doanh Nhanh.vn</option>
                                <option value="950">-- Nhanh.vn Hà Nội</option>
                                <option value="1072">-- -- Nhanh HN - KD1_LanNT</option>
                                <option value="1133">-- -- Nhanh HN - KD6_LâmVN</option>
                                <option value="1157">-- -- Nhanh HN - KD7_ĐiệpNH</option>
                                <option value="1248">-- -- Nhanh HN - KD11_NganLTT</option>
                                <option value="1269">-- -- CTV Kinh doanh</option>
                                <option value="1317">-- -- Nhanh HN - Phòng KD5_AnhNX</option>
                                <option value="1284">-- -- -- Nhanh HN - KD16_TungNH</option>
                                <option value="1285">-- -- -- Nhanh HN - ThanhTV_Phát triển đối tác
                                </option>
                                <option value="1318">-- -- Nhanh HN - Phòng KD2_TùngNT</option>
                                <option value="1319">-- -- Nhanh HN - Phòng KD3_HuyPV</option>
                                <option value="1320">-- -- Nhanh HN - Phòng KD4_TrườngVV</option>
                                <option value="1241">-- -- -- Nhanh HN - KD10_ThanhPT</option>
                                <option value="1263">-- -- -- Nhanh HN - KD8_CôngND</option>
                                <option value="1313">-- -- -- Nhanh HN - KD17_TùngNT</option>
                                <option value="1292">-- Nhanh Nghệ An</option>
                                <option value="1439">-- Phòng đại lý</option>
                                <option value="1440">-- -- HN - Đại lý - KD5_AnhNX</option>
                                <option value="1445">-- -- HN - Đại lý - KD18_ThanhNT</option>
                                <option value="1452">-- -- Đại lý công ty</option>
                                <option value="1453">Khối văn phòng</option>
                                <option value="300">-- Phòng IT</option>
                                <option value="452">-- -- IT admin</option>
                                <option value="453">-- -- IT ERP</option>
                                <option value="454">-- -- IT giao diện</option>
                                <option value="849">-- -- Tester</option>
                                <option value="313">-- Phòng kế toán</option>
                                <option value="840">-- Giám đốc dự án</option>
                                <option value="829">-- -- Trợ lý</option>
                                <option value="1282">-- -- Phòng Dịch Vụ Khách Hàng</option>
                                <option value="843">-- Chăm sóc đơn hàng - HươngĐTM</option>
                                <option value="1147">-- Chăm sóc khách hàng - UyênTL</option>
                                <option value="1209">-- Support văn phòng</option>
                                <option value="1387">-- Phòng nhân sự - Nhanh.vn</option>
                                <option value="1459">Khối sale dịch vụ mkt</option>
                                <option value="845">-- Marketing</option>
                                <option value="1386">-- Sale Marketing</option>
                                <option value="1419">-- Ecomcare</option>
                                <option value="1457">-- Phòng dịch vụ SEO GG MAPS</option>
                            </select> </div>
                        <div class="form-group">
                            <input type="text" name="id" placeholder="ID" id="id"
                                class="form-control" value=""> </div>
                        <div class="form-group">
                            <input type="text" name="name" maxlength="255"
                                placeholder="Tên cải tiến" id="name" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <select name="categoryId" id="categoryId" class="form-control">
                                <option value="">- Chọn danh mục cải tiến -</option>
                                <option value="11">Cải tiến Admin</option>
                                <option value="22">-- bynlllng</option>
                                <option value="12">Cải tiến Store</option>
                                <option value="23">-- jvyxetkx</option>
                                <option value="13">Cải tiến trong ERP</option>
                                <option value="14">Cải tiến nhahang</option>
                                <option value="15">Cải tiến Phần Mềm bán hàng</option>
                                <option value="20">Cải tiến tính năng</option>
                                <option value="21">Bất tiện cho người sử dụng</option>
                                <option value="24">Cải thiện môi trường làm việc</option>
                                <option value="25">Tăng doanh số</option>
                            </select> </div>
                        <div class="form-group">
                            <select name="approve" id="approve" class="form-control">
                                <option value="">- Phê Duyệt -</option>
                                <option value="1">Đã Duyệt</option>
                                <option value="-1">Chưa Duyệt</option>
                            </select> </div>
                        <input type="hidden" name="approvedById" id="approvedById"
                            class="form-control" value=""> <input type="hidden" name="createdById"
                            id="createdById" class="form-control" value=""> <input type="hidden"
                            name="status" id="status" class="form-control" value="">
                        <div class="form-group">
                            <input name="submit" type="submit" id="btnFilterCompanyContact"
                                class="form-control btn btn-primary" value="Lọc"> </div>

                    </div>
                    <div class="col-md-2 lolify-control">
                        <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Chức năng, thao tác">
                            <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                                aria-expanded="false" data-toggle="dropdown">
                                <span class="fa fa-cog"></span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="https://erp.nhanh.vn/idea/manage/add"><i
                                            class="fa fa-plus"></i> Thêm cải tiến</a>
                                    <a href="https://erp.nhanh.vn/idea/manage#" id="exportExcel"><i
                                            class="fa fa-book"></i> Xuất excel trang hiện tại</a>
                                    <a href="https://erp.nhanh.vn/idea/manage#" id="exportAll"><i
                                            class="fa fa-book"></i> Xuất excel toàn bộ các trang</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </form>
                <div class="clearfix"></div>
                <div class="lolify-left-menu" style="display: none;">
                </div>
            </div>
            <div class="dgContainer">
                <div style="display: none; width: 1556px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 65px;">ID</th>
                                <th style="width: 558px;">Tên</th>
                                <th style="width: 449px;">Góp ý cho</th>
                                <th style="width: 111px;">Tình trạng</th>
                                <th style="width: 152px;">Thực hiện</th>
                                <th style="width: 180px;">Thưởng/ Đánh giá</th>
                                <th class="colControls" title="Sửa" style="width: 40px;"><i
                                        class="fa fa-edit"></i></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 10 / 132</span><span
                                class="disabled fa fa-step-backward"></span><span
                                class="disabled fa fa-backward"></span><a class="fa fa-forward"
                                href="https://erp.nhanh.vn/idea/manage?page=2"
                                title="Trang sau"></a> <a class="fa fa-step-forward"
                                href="https://erp.nhanh.vn/idea/manage?page=14"
                                title="Trang cuối"></a></div>
                    </div>
                    <div style="clear: both;"></div><br>
                </div>
                <table cellspacing="0" cellpadding="0" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Góp ý cho</th>
                            <th>Tình trạng</th>
                            <th>Thực hiện</th>
                            <th>Thưởng/ Đánh giá</th>
                            <th class="colControls" title="Sửa"><i class="fa fa-edit"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="h">
                            <td>3411</td>
                            <td style="position: relative"><a class="textBlack"
                                    href="https://erp.nhanh.vn/idea/index/view?id=3411">Hiển thị số
                                    tồn CTB cho Sản Phẩm Combo</a>
                                <div><i style="font-size:0.85em">(8773 - Lê Quang Hùng - 15:40
                                        11/03)</i></div>
                            </td>
                            <td>Nhanh.vn | IT admin</td>
                            <td class="colControls"><span class="text-primary">Mới</span></td>
                            <td class="col-align-center">Chưa áp dụng</td>
                            <td class="col-align-right"></td>
                            <td class="colControls"></td>
                        </tr>
                        <tr class="even">
                            <td>3410</td>
                            <td style="position: relative"><a class="textBlack"
                                    href="https://erp.nhanh.vn/idea/index/view?id=3410">Giảm bớt
                                    thao tác trên PM QLBH</a>
                                <div><i style="font-size:0.85em">(9362 - Nguyễn Khánh Vinh - 14:59
                                        31/07/2019)</i></div>
                            </td>
                            <td>Nhanh.vn | Phòng IT</td>
                            <td class="colControls"><span class="text-primary">Mới</span></td>
                            <td class="col-align-center">Chưa áp dụng</td>
                            <td class="col-align-right"></td>
                            <td class="colControls"></td>
                        </tr>
                        <tr class="">
                            <td>3409</td>
                            <td style="position: relative"><a class="textBlack"
                                    href="https://erp.nhanh.vn/idea/index/view?id=3409">Cải tiến khu
                                    vực Upload ảnh sản phẩm</a>
                                <div><i style="font-size:0.85em">(8599 - Phan Tôn Nam Sơn - 17:32
                                        22/07/2019)</i></div>
                            </td>
                            <td>Nhanh.vn | IT admin</td>
                            <td class="colControls"><span class="text-primary">Mới</span></td>
                            <td class="col-align-center">Chưa áp dụng</td>
                            <td class="col-align-right"></td>
                            <td class="colControls"></td>
                        </tr>
                        <tr class="even">
                            <td>3408</td>
                            <td style="position: relative"><a class="textBlack"
                                    href="https://erp.nhanh.vn/idea/index/view?id=3408">Cải tiến
                                    giảm bớt thao tác trên Vpage</a>
                                <div><i style="font-size:0.85em">(9362 - Nguyễn Khánh Vinh - 13:54
                                        04/07/2019)</i></div>
                            </td>
                            <td>Nhanh.vn | Nhanh HN - Phòng KD4_TrườngVV</td>
                            <td class="colControls"><span class="text-primary">Mới</span></td>
                            <td class="col-align-center">Chưa áp dụng</td>
                            <td class="col-align-right"></td>
                            <td class="colControls"></td>
                        </tr>
                        <tr>
                            <td>3407</td>
                            <td style="position: relative"><a class="textBlack"
                                    href="https://erp.nhanh.vn/idea/index/view?id=3407">Cải tiến Sản
                                    phẩm tồn kho / Thêm tùy chọn hiển thị cột Ảnh</a>
                                <div><i style="font-size:0.85em">(8599 - Phan Tôn Nam Sơn - 10:44
                                        27/11/2018)</i></div>
                            </td>
                            <td>Nhanh.vn | IT admin</td>
                            <td class="colControls"><span class="text-primary">Mới</span></td>
                            <td class="col-align-center">Chưa áp dụng</td>
                            <td class="col-align-right"></td>
                            <td class="colControls"></td>
                        </tr>
                        <tr class="even">
                            <td>3380</td>
                            <td style="position: relative"><a class="textBlack"
                                    href="https://erp.nhanh.vn/idea/index/view?id=3380">Thêm giá gốc
                                    cho các sản phẩm lỗi</a>
                                <div><i style="font-size:0.85em">(7291 - Phạm Thị Thủy - 09:50
                                        06/02/2018)</i></div>
                            </td>
                            <td>Nhanh.vn | Nhanh HN - KD3_HuyPV</td>
                            <td class="colControls"><span class="text-primary">Mới</span></td>
                            <td class="col-align-center">Chưa áp dụng</td>
                            <td class="col-align-right"></td>
                            <td class="colControls"></td>
                        </tr>
                        <tr>
                            <td>3368</td>
                            <td style="position: relative"><a class="textBlack"
                                    href="https://erp.nhanh.vn/idea/index/view?id=3368">Sửa lỗi nhận
                                    diện email khách hàng</a>
                                <div><i style="font-size:0.85em">(8117 - Nguyễn Sơn Hà - 11:10
                                        19/01/2018)</i></div>
                            </td>
                            <td>Nhanh.vn | Phòng IT</td>
                            <td class="colControls"><span class="text-primary">Mới</span></td>
                            <td class="col-align-center">Chưa áp dụng</td>
                            <td class="col-align-right"></td>
                            <td class="colControls"></td>
                        </tr>
                        <tr class="even">
                            <td>3367</td>
                            <td style="position: relative"><a class="textBlack"
                                    href="https://erp.nhanh.vn/idea/index/view?id=3367">Bổ sung tính
                                    năng tạo kế hoạch cho inbox CRM</a>
                                <div><i style="font-size:0.85em">(8117 - Nguyễn Sơn Hà - 10:51
                                        16/01/2018)</i></div>
                            </td>
                            <td>Nhanh.vn | Phòng IT</td>
                            <td class="colControls"><span class="text-primary">Mới</span></td>
                            <td class="col-align-center">Chưa áp dụng</td>
                            <td class="col-align-right"></td>
                            <td class="colControls"></td>
                        </tr>
                        <tr>
                            <td>3366</td>
                            <td style="position: relative"><a class="textBlack"
                                    href="https://erp.nhanh.vn/idea/index/view?id=3366">Cập nhật
                                    thông tin các cá nhân đại diện của doanh nghiệp</a>
                                <div><i style="font-size:0.85em">(8117 - Nguyễn Sơn Hà - 09:39
                                        16/01/2018)</i></div>
                            </td>
                            <td>Nhanh.vn | IT ERP</td>
                            <td class="colControls"><span class="text-primary">Mới</span></td>
                            <td class="col-align-center">Chưa áp dụng</td>
                            <td class="col-align-right"></td>
                            <td class="colControls"></td>
                        </tr>
                        <tr class="even">
                            <td>3365</td>
                            <td style="position: relative"><a class="textBlack"
                                    href="https://erp.nhanh.vn/idea/index/view?id=3365">Tìm kiếm
                                    thông tin tồn tại thông minh hơn</a>
                                <div><i style="font-size:0.85em">(8117 - Nguyễn Sơn Hà - 16:17
                                        28/12/2017)</i></div>
                            </td>
                            <td>Nhanh.vn | IT ERP</td>
                            <td class="colControls"><span class="text-primary">Mới</span></td>
                            <td class="col-align-center">Chưa áp dụng</td>
                            <td class="col-align-right"></td>
                            <td class="colControls"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 10 / 132</span><span
                                class="disabled fa fa-step-backward"></span><span
                                class="disabled fa fa-backward"></span><a class="fa fa-forward"
                                href="https://erp.nhanh.vn/idea/manage?page=2"
                                title="Trang sau"></a> <a class="fa fa-step-forward"
                                href="https://erp.nhanh.vn/idea/manage?page=14"
                                title="Trang cuối"></a></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="page-description">
                <div class="col-md-1" style="text-align: center;">
                    <i class="fa fa-lightbulb-o fontsize-150"></i>
                </div>
                <div class="col-md-11">
                    <ul>
                        <li>Bấm vào nút <i class="fa fa-external-link"></i> ở cột trạng thái để bắt
                            đầu đánh giá</li>
                        <li>Bấm nút <i class="fa fa-refresh"></i> ở cột hành động để hoàn duyệt</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ApproveIdea" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Xác nhận</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning alert-dismissable">
                            Bạn muốn duyệt cải tiến này </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="ideaId" value="">
                        <button type="button" data-id="" class="btn btn-primary yes">Có</button>
                        <button type="button" data-id="" class="btn btn-default no">Không</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Dialog bootstrap -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
        <!-- Dialog bootstrap -->
        <div id="alertModel" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info alert-dismissable">Bạn không thể sửa ý
                            tưởng đã được phê duyệt !!!</div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger alert-dismissable"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"
                            data-dismiss="modal">Đóng</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirmReApproveModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hoàn duyệt</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            Cải tiến sẽ được đổi về trạng thái chưa xem xét. Đánh giá, điểm
                            thưởng cũng sẽ được xóa bỏ. <br> Bạn vẫn muốn hoàn duyệt cải
                            tiến này?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="" id="ideaIdre">
                        <button type="button" class="btn btn-primary btn-submit"
                            data-loading-text="Đang lưu...">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <style>
            .table .label {
                cursor: pointer;
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
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/idea/manage/index.js') }}"></script>
    

@endsection