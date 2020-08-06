@extends('Layout.master')

@section('title','ERP-Danh Sách Đấu Giá')

@section('css')
    <link href="{{ asset('asset/css/crm/auction/bootstrap-multiselect.css" media="screen') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/auction/style.css') }}" type="text/css">
@endsection


@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Chi tiết phiên đấu giá</li>
        </ul>
        <div class="form-horizontal">

            <div style="float: right;" class="fast-link col-md-12">
            </div>


            <div class="col-md-12">
                <div class="col-md-12 title "><span><i class="fa fa-gavel"></i>Đấu giá từ khóa "máy ép
                        mía" giá 720k/ tháng, bước giá 50k, chưa VAT</span>

                    <a href="https://erp.nhanh.vn/crm/auction/edit?id=1429%20data-toggle=" tooltip"=""
                        data-title="Sửa thông tin">
                        <i class="fa fa-edit"></i>
                    </a><i style="float:right;" class="text-success">(Đã Duyệt)</i> </div>
                <div class="group-content">
                    <div class="col-md-8">

                        <span style="line-height: 33px;">Đăng bởi: <b>hcm-thuantd</b>
                            vào ngày <b> <i class="fa fa-calendar"></i>03/02/2020 10:30:15</b>
                        </span>
                        <br>
                        <b class="text-danger">Hết hạn: 06/02/2020 10:27:32</b>

                        <hr>
                        <div class="dl-horizontal col-md-12">
                            <dl class="data-row col-md-12">
                                <dt>Danh mục:</dt>
                                <dd>
                                    <b class="text-info">Đấu giá từ khóa SEO</b>
                                </dd>
                            </dl>
                            <dl class="data-row col-md-12">
                                <dt>Giá khởi điểm (VNĐ):</dt>
                                <dd>
                                    <b>720,000</b>
                                </dd>
                            </dl>
                            <dl class="data-row col-md-12">
                                <dt>Bước giá thấp nhất (VNĐ):</dt>
                                <dd>
                                    <b>50,000</b>
                                </dd>
                            </dl>
                            <dl class="data-row col-md-12">
                                <dt>Giá thắng ngay (VNĐ):</dt>
                                <dd>
                                    <b>3,600,000</b>
                                </dd>
                            </dl>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="description col-md-12">
                            <div class="clearfix"></div>
                            <div style="float: right;">
                                <b>Vote: </b>
                                <span style="cursor:pointer;" data-type="2"
                                    class="margin-left-10 text-info voteAuction"><i
                                        class="fa fa-thumbs-up icon"></i><b class="countVote">
                                        (0)</b></span>
                                <span style="cursor:pointer;" data-type="3"
                                    class="margin-left-10 text-info voteAuction"><i
                                        class="fa fa-thumbs-down icon"></i><b class="countUnVote">
                                        (0)</b></span>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="col-md-4">
                        <div id="show-users" class="col-md-12">
                            <ul>
                                <li class="text-success">
                                    <i class="fa fa-trophy"></i>
                                    <div style="width:93%;" class="col-ele">
                                        <b style="display:block;float:left;width:61%;overflow:hidden;"
                                            data-toggle="tooltip"
                                            data-title="Phòng KD 9 - 2020-02-06 10:27:17 ">Nguyễn Thị
                                            Quỳnh Vân</b><span> 1,100,000 VNĐ </span>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div style="margin:10px 0;" id="add-amount-area" class="col-md-12">

                            <div class="col-md-12 area">
                                <input placeholder="Trả giá cao hơn..." type="text"
                                    class="form-control intAutoNumeric" id="amount-txt">

                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 area">
                                <textarea id="comment-txt" class="comment-txt form-control"
                                    style="min-height:30px" placeholder="bình luận..."></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 area">
                                <button id="addAmountBtn" class="btn btn-info"> Trả giá</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div style="margin-top:5px;" class="group-content col-md-12">
                            <div class="col-md-12 title "><span><i class="fa fa-check"></i></span>Người
                                duyệt </div>
                            <div class="col-md-12">
                                <ul>
                                    <li><label>Họ tên :</label>
                                        <div class="col-ele">
                                            Phạm Thị Hồng Linh </div>
                                    </li>

                                    <li><label>Ngày duyệt:</label>
                                        <div class="col-ele">
                                            03/02/2020 </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="clearfix"></div>



            <div class="col-md-12">
                <div class="col-md-12 title "><span><i class="fa fa-comment"></i></span>Bình luận </div>
                <div id="comments">
                    <div id="commentTask">
                        <div class="col-xs-12 col-md-8">
                            <ul class="lst-comment"></ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tsc_clean_comment col-xs-12 col-md-8">
                            <div class="avatar_box"> <img
                                    src="{{ asset('/asset/images/auction/vanntq-15.jpeg') }}" alt="Avatar"
                                    class="avatar">
                                <p class="username">Nguyễn Thị Quỳnh Vân</p><a
                                    href="https://erp.nhanh.vn/crm/auction/view?id=1429#c1208"><span
                                        class="date">06/02/2020 10:48:30</span></a>
                            </div>
                            <div class="comment_box fr">
                                <p class="comment_paragraph" id="c1208">thắng đấu giá làm hđ cho khách
                                </p><span class="deleteComment" value="1208"><i
                                        class="fa fa-trash-o"></i></span>
                            </div>
                            <div class="tsc_clear"></div>
                        </div>
                    </div>
                    <div id="commentForms" class="col-md-8 col-xs-12 row">
                        <textarea name="content" class="comment-input form-control"
                            style="min-height:60px" placeholder="Nhập nhận xét vào đây..."></textarea>
                        <input name="submit" type="button" id="btnSaveComment"
                            class="btn btn-primary submit-comment" style="margin-top:20px"
                            value="Bình luận"> </div>

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

            <div class="modal fade" id="confirmReapproveModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Xác nhận</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" class="referId" value="">
                            <div class="alert alert-warning">Bạn muốn hoàn duyệt phiên đấu giá này?
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-primary btnSave">Đồng ý</button>
                            <button type="button" class="btn btn-default"
                                data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .area {
                    padding: 5px 0;
                }

                ul.lst-comment li.active {
                    background: green;
                }

                .voteAuction:hover {
                    underline: none;
                }

                .margin-left-10 {
                    margin-left: 15px;
                }

                dl dt {
                    font-size: 13px;
                    font-weight: normal;
                }

                ul.lst-comment {
                    float: right;
                }

                ul.lst-comment li {
                    float: left;
                    list-style: none;
                    padding: 3px 7px;
                    margin-right: 5px;
                    background: #ffcd85;
                }

                ul.lst-comment li a {
                    color: #fff;
                }

                #shareContractModal .add-item-td {
                    padding: 10px;
                }

                #shareContractModal table th {
                    text-align: left;
                }

                #shareContractModal table .colNb {
                    text-align: right;
                    padding: 5px;
                }

                #shareContractModal table tbody tr {
                    margin-top: 7px;
                }

                #shareContractModal table input {
                    width: 80%;
                }

                span#confirm-group {
                    font-size: 13px;
                    font-weight: normal;
                }

                .title {
                    background-color: #eee;
                    padding: 8px 15px;
                    margin-bottom: 15px;
                    color: rgb(171, 28, 30);
                    font-weight: bold;
                }

                ul li .btn {
                    margin-top: -10px;
                }

                .btn-default {
                    color: #333;
                    background-color: #fff;
                    border-color: #ccc;
                    margin-left: 5px;
                }

                span i {
                    margin-right: 5px;

                }

                span i.description {
                    font-size: 13px;
                    text-align: center;
                    margin-left: 10px;
                    font-style: normal;
                }

                .group-content ul {
                    margin: 0;
                    padding: 0;
                }

                .group-content li {
                    list-style: none;
                    margin: 10px 0 0 0;
                    border-bottom: 1px solid rgba(184, 171, 171, .11);
                }

                .group-content label {
                    display: inline-block;
                    width: 37%;
                    font-weight: normal;
                    text-align: left;
                    padding: 0 5px;
                    vertical-align: top;
                }

                .group-content .col-ele {
                    display: inline-block;
                    width: 60%;
                    text-align: left;
                    padding: 0 5px;
                }

                .view-group:hover {
                    background: #FFFEE8;
                }

                .line-break {
                    border-bottom: 1px dashed #eee;
                    margin: 3px auto;
                    width: 100%;
                }

                .clear {
                    clear: both;
                }

                #commentForms {
                    margin: 12px 0
                }

                .comment_link {
                    font-size: 14px
                }

                .ttComment {
                    position: absolute;
                    right: 6px;
                    top: 0;
                    cursor: pointer
                }

                .deleteComment {
                    position: absolute;
                    right: 6px;
                    bottom: 0;
                    cursor: pointer
                }

                .comment-row:nth-child(odd) {
                    background: #f9f9f9;
                }

                .tsc_clear {
                    clear: both;
                    padding: 0;
                    margin: 0;
                    width: 100%;
                    font-size: 0px;
                    line-height: 0px
                }

                .tsc_clean_comment {
                    margin-bottom: 16px
                }

                .tsc_clean_comment .avatar {
                    background: none repeat scroll 0 0 #fff;
                    border: 1px solid #d8d8d8;
                    float: right;
                    height: 52px;
                    margin-right: 15px;
                    margin-top: 6px;
                    padding: 4px;
                    position: relative;
                    width: 52px
                }

                .tsc_clean_comment .username {
                    color: #383838;
                    font-weight: bold;
                    clear: left;
                    margin-top: 0px
                }

                .tsc_clean_comment .comment_box {
                    padding-left: 10px;
                    margin-left: 200px;
                    min-height: 65px;
                    floar: right;
                    padding-bottom: 8px;
                    height: auto;
                    background: #fff;
                    border: 1px solid #d8d8d8;
                    position: relative
                }

                .tsc_clean_comment .comment_box:before {
                    content: '';
                    width: 13px;
                    height: 13px;
                    background: #fff;
                    border-left: 1px solid #d8d8d8;
                    border-bottom: 1px solid #d8d8d8;
                    position: absolute;
                    top: 24px;
                    left: -8px;
                    transform: rotate(45deg);
                    -webkit-transform: rotate(45deg);
                    -moz-transform: rotate(45deg);
                    -ms-transform: rotate(45deg);
                    -o-transform: rotate(45deg)
                }

                .tsc_clean_comment .comment_paragraph {
                    color: #454545;
                    line-height: 14px;
                    margin: 4px 10px 0 0px
                }

                .tsc_clean_comment .comment_paragraph:focus {
                    outline: none
                }

                .tsc_clean_comment .reply {
                    font-size: 0.85em;
                    color: #b7b7b7;
                    margin-left: 23px;
                    text-decoration: none;
                    margin-top: 8px;
                    position: relative;
                    padding-bottom: 10px
                }

                .tsc_clean_comment .reply:before {
                    content: url(../images/bubble.png);
                    width: 13px;
                    height: 11px;
                    position: relative;
                    left: -7px;
                    top: 2px
                }

                .deleteComment {
                    position: absolute;
                    right: 6px;
                    bottom: 0;
                    cursor: pointer
                }

                .tsc_clear {
                    clear: both;
                    padding: 0;
                    margin: 0;
                    width: 100%;
                    font-size: 0px;
                    line-height: 0px
                }

                .tsc_clean_comment {
                    margin-bottom: 16px
                }

                .tsc_clean_comment .avatar_box {
                    float: left;
                    width: 200px;
                    margin-top: 0px;
                }

                .tsc_clean_comment .avatar {
                    background: none repeat scroll 0 0 #fff;
                    border: 1px solid #d8d8d8;
                    float: right;
                    height: 52px;
                    margin-right: 15px;
                    margin-top: 6px;
                    padding: 4px;
                    position: relative;
                    width: 52px
                }

                .tsc_clean_comment .username {
                    color: #383838;
                    font-weight: bold;
                    clear: left;
                    margin-top: 10px
                }

                .tsc_clean_comment .comment_box {
                    word-wrap: break-word;
                    padding: 0 10px;
                    margin-left: 200px;
                    min-height: 65px;
                    floar: right;
                    padding-bottom: 8px;
                    height: auto;
                    background: #fff;
                    border: 1px solid #d8d8d8;
                    position: relative
                }

                .tsc_clean_comment .comment_box:before {
                    content: '';
                    width: 13px;
                    height: 13px;
                    background: #fff;
                    border-left: 1px solid #d8d8d8;
                    border-bottom: 1px solid #d8d8d8;
                    position: absolute;
                    top: 24px;
                    left: -8px;
                    transform: rotate(45deg);
                    -webkit-transform: rotate(45deg);
                    -moz-transform: rotate(45deg);
                    -ms-transform: rotate(45deg);
                    -o-transform: rotate(45deg)
                }

                .tsc_clean_comment .comment_paragraph {
                    color: #454545;
                    line-height: 14px;
                    margin: 4px 10px 0 15px
                }

                .tsc_clean_comment .comment_paragraph:focus {
                    outline: none
                }

                .tsc_clean_comment .reply {
                    font-size: 0.85em;
                    color: #b7b7b7;
                    margin-left: 23px;
                    text-decoration: none;
                    margin-top: 8px;
                    position: relative;
                    padding-bottom: 10px
                }

                .tsc_clean_comment .reply:before {
                    content: url(../images/bubble.png);
                    width: 13px;
                    height: 11px;
                    position: relative;
                    left: -7px;
                    top: 2px
                }

                .tsc_clean_comment .date {
                    font-size: 0.8em
                }

                .viewMoreComment {
                    cursor: pointer;
                    color: #666;
                }

                .tsc_clean_comment .date {
                    font-size: 0.8em
                }
            </style>
            <script>
                var auctionId = '1429';
                var categoryId = '3';
                var today = '24/07/2020';
            </script>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/saved_resource(3)') }}"></script>
@endsection