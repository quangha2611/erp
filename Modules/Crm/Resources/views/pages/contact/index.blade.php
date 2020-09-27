@extends('crm::layouts.master')

@section('title','ERP-Danh sách liên hệ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/contact/style.css') }}" type="text/css">
@endsection

@section('content-page')
    
<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/crm/contact/index">Danh sách liên hệ</a></li>
    </ul>
    <div id="page-crm-contact">
        <div class="filterContainer">
            <form method="GET" name="crmContactFilter" class="form-inline" role="form"
                id="crmContactFilter">
                <div class="form-group"><select name="companyId" id="companyId"
                        class="form-control">
                        <option value="391" selected="selected">123job.vn</option>
                    </select></div>
                <div class="form-group"><input type="text" name="id" maxlength="10"
                        placeholder="ID" id="id" class="form-control" value=""></div>
                <div class="form-group"><input type="text" name="name" maxlength="255"
                        placeholder="Tên / Thông tin liên hệ" id="name" class="form-control"
                        value=""></div>
                <div class="form-group"><input type="text" name="mobile" maxlength="11"
                        placeholder="Mobile" id="mobile" class="form-control" value=""></div>
                <div class="form-group"><input name="submit" type="submit"
                        id="btnFilterCrmContact" class="form-control btn btn-primary"
                        value="Lọc"></div>
            </form>
        </div>
    </div>
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><i class="fa fa-table"></i> Danh sách liên hệ</h3>
        </div>
        <div class="dgContainer widget-content table-responsive">
            <div style="display: none; width: 1534px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 42px;">ID</th>
                            <th style="width: 213px;">Tên liên hệ</th>
                            <th style="width: 119px;">khách hàng</th>
                            <th style="width: 171px;">Phòng ban</th>
                            <th style="width: 132px;">Số ĐT</th>
                            <th style="width: 260px;">email</th>
                            <th style="width: 295px;">Địa chỉ</th>
                            <th style="width: 262px;">Ghi chú</th>
                            <th class="col-align-left" title="Thao tác" style="width: 40px;"><i
                                    class="fa fa-cogs icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"><a href="{{route('get.crm.contact.add')}}"
                        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm liên
                        hệ</a></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 3 / 3</span></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgContact" class="table table table-hover">
                <thead>
                    <tr class="even">
                        <th>ID</th>
                        <th>Tên liên hệ</th>
                        <th>khách hàng</th>
                        <th>Phòng ban</th>
                        <th>Số ĐT</th>
                        <th>email</th>
                        <th>Địa chỉ</th>
                        <th>Ghi chú</th>
                        <th class="col-align-left" title="Thao tác"><i
                                class="fa fa-cogs icon"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="">
                            <td><a title="xem chi tiết"
                                    href="https://erp.nhanh.vn/crm/contact/view?id=98">{{$contact->id}}</a></td>
                            <td>
                                <p><i class="fa fa-user"></i> {{$contact->name}}</p>
                            </td>
                            <td>
                                <a target="_blank" href="https://erp.nhanh.vn/crm/account/view?id=">{{$contact->customer->name}}</a>
                            </td>
                            <td>{{$contact->department}}</td>
                            <td>
                                <p> {{$contact->phone}}</p>
                            </td>
                            <td>
                                <p> {{$contact->email}}</p>
                            </td>
                            <td>
                                <p> {{$contact->address}}</p>
                            </td>
                            <td> 
                                <p> {{$contact->description}} </p>
                            </td>
                            <td>
                                <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                        data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{ route('get.crm.contact.edit',['id' => $contact->id]) }}"><i
                                                    class="fa fa-edit"
                                                    style="margin-right:10px"></i>Sửa liên hệ</a>
                                        </li>
                                        <li>
                                            <a class="deleteContact" id="deleteContact" data-id="98" href="javascript:void(0)"
                                                onclick=" document.getElementById('{{'destroy'.$contact->id}}').click()"> 
                                                <i class="fa fa-trash" style="margin-right:10px" ></i>
                                                Xóa liên hệ
                                            </a>
                                            <form action="{{ route('post.crm.contact.destroy', ['id' => $contact->id]) }}" method="POST" onsubmit="return confirm('sure?')">
                                                @csrf
                                                <button type="submit" id="{{ 'destroy'.$contact->id }}" style="display:none"></button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 3 / 3</span></div>
                </div>
            </div>
        </div>
    </div>
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
              <p>Chắc chắn muốn xóa </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" onclick="document.getElementById(deletedId).click()">Delete</button>
              <button type="button" class="btn btn-secondary" onclick="document.getElementById('modalbox').style.display='none'">
                  Close
              </button>
            </div>
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

        var deletedId = '';
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contact/add.js') }}"></script>
@endsection