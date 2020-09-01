@extends('accounting::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/accounting/transaction/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Danh sách phiếu thu chi')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li>
                <a href="{{ route('get.accounting.transaction.index') }}">
                    Danh sách phiếu yêu cầu thu chi
                </a>
            </li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="transactionFilter" class="form-inline lolify" role="form"
                id="transactionFilter" action="{{ route('get.accounting.transaction.filter') }}">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="id" placeholder="ID" id="id" class="form-control" value=""> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty -</option>
                            @include('accounting::pages.transaction.include._inc_recursiveInput',[
                                'data' => $companies,
                                'parentId' => null,
                                'note' => '--'
                            ])
                        </select> 
                    </div>
                    <div class="form-group">
                        <select name="accountId" style="min-width:230px" id="accountId" class="form-control" tabindex="-1" aria-hidden="true">
                            <option value="">- Quỹ -</option>
                            @foreach ($funds as $fund)
                                <option value="{{ $fund->id }}">{{ $fund->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="createdById" id="createdById" class="form-control" value=""> 
                    <input type="hidden" name="approvedById" id="approvedById" class="form-control" value=""> 
                    <input type="hidden" name="statusActive" id="statusActive" class="form-control" value="">
                    <div class="form-group">
                        <input type="text" name="description" placeholder="Ghi chú" id="description" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCompanyContact" class="form-control btn btn-primary" value="Lọc"> 
                    </div>

                </div>
                <div class="col-md-2 lolify-control">
                    <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="Chức năng, thao tác">
                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                            aria-expanded="false" data-toggle="dropdown">
                            <span class="fa fa-cog"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="exportPage" href="https://erp.nhanh.vn/accounting/transaction#">
                                    <i class="fa fa-file-excel-o"></i> Xuất 1 trang hiện tại
                                </a>
                            </li>
                            <li>
                                <a id="exportAll" href="{{ route('get.accounting.transaction.exportExcel',$type) }}">
                                    <i class="fa fa-file-excel-o"></i> Xuất toàn bộ
                                </a>
                            </li>
                        </ul>
                    </div>


                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="">
                    <div class="form-group">
                        <select name="expenseCategoryId" style="min-width:200px" id="expenseCategoryId" class="form-control" tabindex="-1" aria-hidden="true">
                            <option value="">- Danh mục thu chi -</option>
                            @include('accounting::pages.transaction.include._inc_recursiveInput',[
                                'data' => $categories,
                                'parentId' => null,
                                'note' => '--'
                            ])
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="type" id="type" class="form-control">
                            <option value="">- Loại phiếu -</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select> </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái -</option>
                            @include('accounting::pages.transaction.include._inc_recursiveInput',[
                                'data' => $status,
                                'parentId' => null,
                                'note' => '--'
                            ])
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="applyDate" placeholder="Ngày hạch toán"
                            class="form-control date-range-picker" id="applyDate" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="approvedDateRange" placeholder="Ngày duyệt"
                            class="form-control date-range-picker" id="approvedDateRange" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="author" placeholder="Người tạo"
                            id="author" class="form-control ui-autocomplete-input" value=""
                            autocomplete="off"> </div>
                    <div class="form-group">
                        <input type="text" name="approvedByName" placeholder="Người duyệt"
                            id="approvedByName" class="form-control ui-autocomplete-input" value=""
                            autocomplete="off"> </div>
                    <div class="form-group">
                        <select name="payStatus" id="payStatus" class="form-control">
                            <option value="">- Hoàn thu phiếu chi -</option>
                            <option value="1">Đã hoàn thu</option>
                            <option value="2">Chưa hoàn thu</option>
                        </select> </div>

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
                            <th style="width: 52px;">ID</th>
                            <th style="width: 145px;">Công ty</th>
                            <th style="width: 106px;">Ngày hạch toán</th>
                            <th style="width: 77px;">Loại phiếu</th>
                            <th style="width: 214px;">Quỹ</th>
                            <th style="width: 102px;">Giá trị</th>
                            <th style="width: 168px;">Người tạo</th>
                            <th style="width: 150px;">Duyệt</th>
                            <th style="width: 100px;">Trạng thái</th>
                            <th style="width: 410px;">Diễn giải</th>
                            <th style="width: 31px;"><i class="fa fa-edit icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 11,631</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/accounting/transaction?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/accounting/transaction?page=388"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgTransaction" class="table table-bordered">
                <thead>
                    <tr class="even h">
                        <th>ID</th>
                        <th>Công ty</th>
                        <th>Ngày hạch toán</th>
                        <th>Loại phiếu</th>
                        <th>Quỹ</th>
                        <th>Giá trị</th>
                        <th>Người tạo</th>
                        <th>Duyệt</th>
                        <th>Trạng thái</th>
                        <th>Diễn giải</th>
                        <th><i class="fa fa-edit icon"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr class="">
                            <td>
                                <a href="https://erp.nhanh.vn/accounting/transaction/view?id=77160">{{ $transaction->id }}</a>
                            </td>
                            <td>{{ $transaction->companyId }}</td>
                            <td>{{ $transaction->applyDate }}</td>
                            <td>
                                @if($transaction->type == 'Phiếu thu')
                                    <b class="text-info">{{ $transaction->type }}</b><br>
                                @else
                                    <b class="text-danger">{{ $transaction->type }}</b><br>
                                @endif
                            </td>
                            <td class="colControls">
                                <div>{{ $transaction->accountId }}</div>
                            </td>
                            <td class="colNumber">{{ $transaction->amount }}</td>
                            <td>
                                <div>{{ $transaction->author }}</div>
                                <div>
                                    <i class="date">{{ $transaction->created_at }}</i>
                                </div>
                            </td>
                            <td class="colControls">
                                <div class="text-success">Hứa Thị Mai Ngân</div>
                                <div class="text-success">
                                    <i class="date">31/07/2020 16:00:28</i>
                                </div>
                            </td>
                            <td class="colControls">
                                <b data-toggle="tooltip" title="" data-original-title="Đã hạch toán">
                                    {{ $transaction->status }}
                                </b>
                            </td>
                            <td>{{ $transaction->description }}</td>
                            <td class="colControls">
                                @if($transaction->author == Auth::user()->name)
                                    <a href="{{ route('get.accounting.transaction.edit',$transaction->id) }}" class="fa fa-edit" title="Sửa" data-toggle="tooltip"></a><br>
                                @endif
                                <a href="{{ route('get.accounting.transaction.detail',$transaction->id) }}" class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 11,631</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/accounting/transaction?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/accounting/transaction?page=388"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hủy phiếu thu chi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            Bạn muốn hủy phiếu thu này không?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="" id="transactionId">
                        <button type="button" class="btn btn-primary deleteItem">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div id="alertModal" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="loadingModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div style="font-size: 3em; text-align: center;">
                            <i class="fa fa-spin fa-cog"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #dgTransaction i.date {
                font-size: 0.85em;
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
