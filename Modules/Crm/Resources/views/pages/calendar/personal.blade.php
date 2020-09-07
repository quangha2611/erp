@extends('crm::layouts.master')

@section('title','ERP-Quản lý sự kiện')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/calendar/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/crm/calendar/fullcalendar.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Lịch làm việc cá nhân</li>
        </ul>
        <div id="calendar" class="fc fc-ltr fc-unthemed">
            
        </div>

        <!-- Modal -->
        <div class="modal fade" id="viewEventModal" tabindex="-1" role="dialog"
            aria-labelledby="viewEventModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="viewEventModalLabel">Chi tiết sự kiện</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger withdraw" data-idref="">Rút
                            lui</button>
                        <a class="btn btn-primary edit-event">Sửa đổi</a>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog"
            aria-labelledby="viewEventModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <input type="hidden" class="modal-hidden-data" value="">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="viewEventModalLabel">Xác nhận</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary confirm-yes"
                            data-idref="">Có</button>
                        <button type="button" class="btn btn-default confirm-no"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var deleteEventMsg = 'Bạn muốn rút lui khỏi sự kiện này?';
        </script>
        <style>
            .modal-lg {
                width: 900px;
            }

            #viewEventModal .accountInfor {
                margin-top: -12px;
                padding: 0;
            }

            #viewEventModal .accountInfor li {
                background: #eee;
                line-height: 30px;
                list-style: none;
                margin-bottom: 12px;
            }

            #viewEventModal .accountInfor li .accountInfor-content {
                line-height: 30px;
                background: white;
                min-height: 30px;
                border: 1px solid #eee;
            }

            .hide-element {
                display: none;
            }
        </style>
    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/saved_resource')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/getfirebaseconfig')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/app.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/saved_resource(1)')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/fullcalendar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/view.js') }}"></script>
    <script>
        $('#calendar').fullCalendar({
            events: {!! json_encode($data) !!}
        });
    </script>
@endsection