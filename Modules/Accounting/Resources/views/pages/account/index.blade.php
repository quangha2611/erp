@extends('accounting::layouts.master')

@section('css')
        <link rel="stylesheet" href="{{ asset('/css/accounting/account/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Danh sách tài khoản')

@section('content-page')

    <div class="col-md-10 content-wrapper">


        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/account/index">Danh sách tài khoản kế
                    toán</a></li>
        </ul>
        <div id="page-idea-contact">
            <div class="filterContainer">
                <form method="GET" name="ideaFilter" class="form-inline" role="form"
                    id="ideaFilter" action="{{ route('get.accounting.account.filter') }}">
                    <div class="form-group"><input type="text" name="id" maxlength="255"
                            placeholder="ID" id="id" class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="name" maxlength="255"
                            placeholder="Tên tài khoản" id="name" class="form-control" value="">
                    </div>
                    <div class="form-group"><select name="companyId" id="companyId"
                            class="form-control">
                            <option value="">-Công ty-</option>
                            @include('accounting::pages.account.include._inc_recursiveInput',[
                                    'data' => $companies,
                                    'parentId' => null,
                                    'note' => '--'
                            ])
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCompanyContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
        </div>
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Danh sách tài khoản kế toán</h3>
            </div>
            <div class="dgContainer widget-content table-responsive">
                <div style="width: 1534px; display: none;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 81px;">ID</th>
                                <th style="width: 715px;">Tên tài khoản</th>
                                <th style="width: 146px;">Mã Code</th>
                                <th class="maxw50" style="width: 45px;">Trạng thái</th>
                                <th style="width: 188px;">Tên Công ty </th>
                                <th style="width: 271px;">Người tạo</th>
                                <th style="width: 87px;"><i class="fa fa-edit"></i> </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"><a
                            href="{{ route('get.accounting.account.create') }}"
                            class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm tài
                            khoản</a></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table cellspacing="0" cellpadding="0" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>ID</th>
                            <th>Tên tài khoản</th>
                            <th>Mã Code</th>
                            <th class="maxw50">Trạng thái</th>
                            <th>Tên Công ty </th>
                            <th>Người tạo</th>
                            <th><i class="fa fa-edit"></i> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accounts as $account)
							<tr class="">
									<td>{{ $account->id }}</td>
									<td style="padding-left: 10px;">{{ $account->name }}</td>
									<td>{{ $account->code }}</td>
									<td style="width:30px;"><i style="color:green;font-size:14px;"
											class="fa fa-check-circle"></i></td>
									<td>{{ $account->companyId }}</td>
									<td style="position: relative">{{ $account->author }}</td>
									<td class="colControls">
                                        <form action="{{ route('post.accounting.account.destroy') }}" method="POST">
                                            @csrf
                                            <a href="{{ route('get.accounting.account.edit',['id' => $account->id]) }}" class="fa fa-edit"></a>
                                            <a href="#" value="321" class="fa fa-trash-o deleteAccount del_Item mgleft5" onclick="event.preventDefault();document.getElementById('modalbox').style.display='block'; deletedId = 'destroy'+{{ $account->id }}"></a>
                                            <input type="submit" name="id" value="{{ $account->id }}" style="display: none" id="{{ 'destroy'.$account->id }}">
                                        </form>
                                    </td>
							</tr>
						@endforeach
					</tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                </div>
            </div>
        </div>
        <!-- Dialog bootstrap -->
        <div class="modal" tabindex="-1" role="dialog" id="modalbox">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('modalbox').style.display='none'">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Xác nhận xóa mục này</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="document.getElementById(deletedId).click()">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="document.getElementById('modalbox').style.display='none'">Close</button>
                </div>
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
        <script>
            var deletedId = 0;
        </script>
        <script type="text/javascript" src="{{ asset('/js/accounting/account/saved_resource') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/accounting/account/getfirebaseconfig') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/accounting/account/app.js') }}"></script>
        <script>
                CKEDITOR.env.isCompatible = true;
        </script>

        <script type="text/javascript" src="{{ asset('/js/accounting/account/saved_resource(1)') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/accounting/account/del.js') }}"></script>


@endsection
