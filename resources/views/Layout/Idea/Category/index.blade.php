@extends('Layout.master5')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/idea/manage/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh mục cải tiến')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">

        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/idea"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/idea/category">Danh sách danh mục cải tiến</a></li>
        </ul>
        <div id="page-idea-contact">
            <div class="filterContainer">
                <form method="GET" name="CategoryIndexFilter" class="form-inline" role="form"
                    id="CategoryIndexFilter">
                    <div class="form-group"><select name="companyId" id="companyId"
                            class="form-control">
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
                        </select></div>
                    <div class="form-group"><input type="text" name="name" maxlength="255"
                            placeholder="Tên danh mục cải tiến" id="name" class="form-control"
                            value=""></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCompanyContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
        </div>
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Danh sách danh mục cải tiến</h3>
            </div>
            <div class="dgContainer widget-content table-responsive">
                <div style="display: none; width: 1547px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 89px;">ID</th>
                                <th style="width: 508px;">Tên danh mục cải tiến</th>
                                <th style="width: 443px;">Tên công ty</th>
                                <th style="width: 386px;">Người tạo</th>
                                <th class="colControls" title="Sửa" style="width: 120px;"><i
                                        class="fa fa-edit"></i></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"><a href="https://erp.nhanh.vn/idea/category/add"
                            class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm danh mục
                            cải tiến</a></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 10 / 26</span><span
                                class="disabled fa fa-step-backward"></span><span
                                class="disabled fa fa-backward"></span><a class="fa fa-forward"
                                href="https://erp.nhanh.vn/idea/category?page=2"
                                title="Trang sau"></a> <a class="fa fa-step-forward"
                                href="https://erp.nhanh.vn/idea/category?page=3"
                                title="Trang cuối"></a></div>
                    </div>
                    <div style="clear: both;"></div><br>
                </div>
                <table cellspacing="0" cellpadding="0" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>ID</th>
                            <th>Tên danh mục cải tiến</th>
                            <th>Tên công ty</th>
                            <th>Người tạo</th>
                            <th class="colControls" title="Sửa"><i class="fa fa-edit"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>40</td>
                            <td>Vận hành nội bộ</td>
                            <td>Vật giá - Hà Nội</td>
                            <td data-toggle="tooltip" data-placement="top"
                                data-original-title="2016-01-22 17:02:29">Tạ Thị Thinh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/idea/category/edit?id=40"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/idea/category#" value="40"
                                    class="fa fa-trash-o deleteAnnouncement del_Item"></a></td>
                        </tr>
                        <tr class="even">
                            <td>39</td>
                            <td>Cải tiến dịch vụ</td>
                            <td>Vật giá - Hà Nội</td>
                            <td data-toggle="tooltip" data-placement="top"
                                data-original-title="2016-01-22 17:02:07">Tạ Thị Thinh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/idea/category/edit?id=39"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/idea/category#" value="39"
                                    class="fa fa-trash-o deleteAnnouncement del_Item"></a></td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Cải tiến chính sách</td>
                            <td>Vật giá - Hà Nội</td>
                            <td data-toggle="tooltip" data-placement="top"
                                data-original-title="2016-01-22 17:01:16">Tạ Thị Thinh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/idea/category/edit?id=38"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/idea/category#" value="38"
                                    class="fa fa-trash-o deleteAnnouncement del_Item"></a></td>
                        </tr>
                        <tr class="even">
                            <td>37</td>
                            <td>Ưu đãi khuyến mãi</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td data-toggle="tooltip" data-placement="top"
                                data-original-title="2016-01-21 10:18:00">Nguyễn Hồng Vân</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/idea/category/edit?id=37"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/idea/category#" value="37"
                                    class="fa fa-trash-o deleteAnnouncement del_Item"></a></td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Cải tiến trang Vatgia.com</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td data-toggle="tooltip" data-placement="top"
                                data-original-title="2016-01-21 10:17:48">Nguyễn Hồng Vân</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/idea/category/edit?id=36"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/idea/category#" value="36"
                                    class="fa fa-trash-o deleteAnnouncement del_Item"></a></td>
                        </tr>
                        <tr class="even">
                            <td>35</td>
                            <td>Cải tiến trang Raovat</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td data-toggle="tooltip" data-placement="top"
                                data-original-title="2016-01-21 10:17:40">Nguyễn Hồng Vân</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/idea/category/edit?id=35"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/idea/category#" value="35"
                                    class="fa fa-trash-o deleteAnnouncement del_Item"></a></td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Cải tiến trang Hỏi đáp</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td data-toggle="tooltip" data-placement="top"
                                data-original-title="2016-01-21 10:17:30">Nguyễn Hồng Vân</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/idea/category/edit?id=34"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/idea/category#" value="34"
                                    class="fa fa-trash-o deleteAnnouncement del_Item"></a></td>
                        </tr>
                        <tr class="even">
                            <td>33</td>
                            <td>Cải tiến trang Hỏi đáp</td>
                            <td>Vật giá - Hà Nội</td>
                            <td data-toggle="tooltip" data-placement="top"
                                data-original-title="2015-12-15 11:57:03">Tạ Thị Thinh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/idea/category/edit?id=33"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/idea/category#" value="33"
                                    class="fa fa-trash-o deleteAnnouncement del_Item"></a></td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Cải tiến trang Raovat</td>
                            <td>Vật giá - Hà Nội</td>
                            <td data-toggle="tooltip" data-placement="top"
                                data-original-title="2015-12-15 11:56:47">Tạ Thị Thinh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/idea/category/edit?id=32"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/idea/category#" value="32"
                                    class="fa fa-trash-o deleteAnnouncement del_Item"></a></td>
                        </tr>
                        <tr class="even">
                            <td>31</td>
                            <td>Cải tiến trang Vatgia.com</td>
                            <td>Vật giá - Hà Nội</td>
                            <td data-toggle="tooltip" data-placement="top"
                                data-original-title="2015-12-15 10:53:05">Tạ Thị Thinh</td>
                            <td class="colControls"><a
                                    href="https://erp.nhanh.vn/idea/category/edit?id=31"
                                    class="fa fa-edit"></a><a
                                    href="https://erp.nhanh.vn/idea/category#" value="31"
                                    class="fa fa-trash-o deleteAnnouncement del_Item"></a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 10 / 26</span><span
                                class="disabled fa fa-step-backward"></span><span
                                class="disabled fa fa-backward"></span><a class="fa fa-forward"
                                href="https://erp.nhanh.vn/idea/category?page=2"
                                title="Trang sau"></a> <a class="fa fa-step-forward"
                                href="https://erp.nhanh.vn/idea/category?page=3"
                                title="Trang cuối"></a></div>
                    </div>
                </div>
            </div>
        </div><!-- Dialog bootstrap -->
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
        <style>
            .widget .widget-header h3 {
                width: 100%;
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