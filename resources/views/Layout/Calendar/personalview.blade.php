@extends('Layout.master')

@section('title','ERP-Lịch làm việc cá nhân')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/calendar/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/calendar/fullcalendar.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Lịch làm việc cá nhân</li>
        </ul>
        <div id="calendar" class="fc fc-ltr fc-unthemed">
            <div class="fc-toolbar">
                <div class="fc-left">
                    <div class="fc-button-group"><button type="button"
                            class="fc-prev-button fc-button fc-state-default fc-corner-left"><span
                                class="fc-icon fc-icon-left-single-arrow"></span></button><button
                            type="button"
                            class="fc-next-button fc-button fc-state-default fc-corner-right"><span
                                class="fc-icon fc-icon-right-single-arrow"></span></button></div>
                    <button type="button"
                        class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled"
                        disabled="disabled">today</button>
                </div>
                <div class="fc-right">
                    <div class="fc-button-group"><button type="button"
                            class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button
                            type="button"
                            class="fc-agendaWeek-button fc-button fc-state-default">week</button><button
                            type="button"
                            class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button>
                    </div>
                </div>
                <div class="fc-center">
                    <h2>July 2020</h2>
                </div>
                <div class="fc-clear"></div>
            </div>
            <div class="fc-view-container" style="">
                <div class="fc-view fc-month-view fc-basic-view" style="">
                    <table>
                        <thead>
                            <tr>
                                <td class="fc-widget-header">
                                    <div class="fc-row fc-widget-header">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="fc-day-header fc-widget-header fc-sun">
                                                        Sun</th>
                                                    <th
                                                        class="fc-day-header fc-widget-header fc-mon">
                                                        Mon</th>
                                                    <th
                                                        class="fc-day-header fc-widget-header fc-tue">
                                                        Tue</th>
                                                    <th
                                                        class="fc-day-header fc-widget-header fc-wed">
                                                        Wed</th>
                                                    <th
                                                        class="fc-day-header fc-widget-header fc-thu">
                                                        Thu</th>
                                                    <th
                                                        class="fc-day-header fc-widget-header fc-fri">
                                                        Fri</th>
                                                    <th
                                                        class="fc-day-header fc-widget-header fc-sat">
                                                        Sat</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fc-widget-content">
                                    <div class="fc-day-grid-container" style="">
                                        <div class="fc-day-grid">
                                            <div class="fc-row fc-week fc-widget-content"
                                                style="height: 190px;">
                                                <div class="fc-bg">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past"
                                                                    data-date="2020-06-28"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                                                    data-date="2020-06-29"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                                                    data-date="2020-06-30"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                    data-date="2020-07-01"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                    data-date="2020-07-02"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                    data-date="2020-07-03"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                    data-date="2020-07-04"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="fc-content-skeleton">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-other-month fc-past"
                                                                    data-date="2020-06-28">28</td>
                                                                <td class="fc-day-number fc-mon fc-other-month fc-past"
                                                                    data-date="2020-06-29">29</td>
                                                                <td class="fc-day-number fc-tue fc-other-month fc-past"
                                                                    data-date="2020-06-30">30</td>
                                                                <td class="fc-day-number fc-wed fc-past"
                                                                    data-date="2020-07-01">1</td>
                                                                <td class="fc-day-number fc-thu fc-past"
                                                                    data-date="2020-07-02">2</td>
                                                                <td class="fc-day-number fc-fri fc-past"
                                                                    data-date="2020-07-03">3</td>
                                                                <td class="fc-day-number fc-sat fc-past"
                                                                    data-date="2020-07-04">4</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="fc-row fc-week fc-widget-content"
                                                style="height: 190px;">
                                                <div class="fc-bg">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                    data-date="2020-07-05"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                    data-date="2020-07-06"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                    data-date="2020-07-07"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                    data-date="2020-07-08"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                    data-date="2020-07-09"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                    data-date="2020-07-10"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                    data-date="2020-07-11"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="fc-content-skeleton">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-past"
                                                                    data-date="2020-07-05">5</td>
                                                                <td class="fc-day-number fc-mon fc-past"
                                                                    data-date="2020-07-06">6</td>
                                                                <td class="fc-day-number fc-tue fc-past"
                                                                    data-date="2020-07-07">7</td>
                                                                <td class="fc-day-number fc-wed fc-past"
                                                                    data-date="2020-07-08">8</td>
                                                                <td class="fc-day-number fc-thu fc-past"
                                                                    data-date="2020-07-09">9</td>
                                                                <td class="fc-day-number fc-fri fc-past"
                                                                    data-date="2020-07-10">10</td>
                                                                <td class="fc-day-number fc-sat fc-past"
                                                                    data-date="2020-07-11">11</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="fc-event-container"><a
                                                                        class="fc-day-grid-event fc-event fc-start fc-end">
                                                                        <div class="fc-content">
                                                                            <span
                                                                                class="fc-time">4p</span>
                                                                            <span
                                                                                class="fc-title">Tư
                                                                                vấn dịch vụ</span>
                                                                        </div>
                                                                    </a></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="fc-row fc-week fc-widget-content"
                                                style="height: 190px;">
                                                <div class="fc-bg">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                    data-date="2020-07-12"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                    data-date="2020-07-13"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                    data-date="2020-07-14"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                    data-date="2020-07-15"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                    data-date="2020-07-16"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                    data-date="2020-07-17"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                    data-date="2020-07-18"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="fc-content-skeleton">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-past"
                                                                    data-date="2020-07-12">12</td>
                                                                <td class="fc-day-number fc-mon fc-past"
                                                                    data-date="2020-07-13">13</td>
                                                                <td class="fc-day-number fc-tue fc-past"
                                                                    data-date="2020-07-14">14</td>
                                                                <td class="fc-day-number fc-wed fc-past"
                                                                    data-date="2020-07-15">15</td>
                                                                <td class="fc-day-number fc-thu fc-past"
                                                                    data-date="2020-07-16">16</td>
                                                                <td class="fc-day-number fc-fri fc-past"
                                                                    data-date="2020-07-17">17</td>
                                                                <td class="fc-day-number fc-sat fc-past"
                                                                    data-date="2020-07-18">18</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="fc-row fc-week fc-widget-content"
                                                style="height: 190px;">
                                                <div class="fc-bg">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                    data-date="2020-07-19"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                    data-date="2020-07-20"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                    data-date="2020-07-21"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                    data-date="2020-07-22"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                    data-date="2020-07-23"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-today fc-state-highlight"
                                                                    data-date="2020-07-24"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-future"
                                                                    data-date="2020-07-25"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="fc-content-skeleton">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-past"
                                                                    data-date="2020-07-19">19</td>
                                                                <td class="fc-day-number fc-mon fc-past"
                                                                    data-date="2020-07-20">20</td>
                                                                <td class="fc-day-number fc-tue fc-past"
                                                                    data-date="2020-07-21">21</td>
                                                                <td class="fc-day-number fc-wed fc-past"
                                                                    data-date="2020-07-22">22</td>
                                                                <td class="fc-day-number fc-thu fc-past"
                                                                    data-date="2020-07-23">23</td>
                                                                <td class="fc-day-number fc-fri fc-today fc-state-highlight"
                                                                    data-date="2020-07-24">24</td>
                                                                <td class="fc-day-number fc-sat fc-future"
                                                                    data-date="2020-07-25">25</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="fc-row fc-week fc-widget-content"
                                                style="height: 190px;">
                                                <div class="fc-bg">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-future"
                                                                    data-date="2020-07-26"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-future"
                                                                    data-date="2020-07-27"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-future"
                                                                    data-date="2020-07-28"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-future"
                                                                    data-date="2020-07-29"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                    data-date="2020-07-30"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-future"
                                                                    data-date="2020-07-31"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                    data-date="2020-08-01"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="fc-content-skeleton">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-future"
                                                                    data-date="2020-07-26">26</td>
                                                                <td class="fc-day-number fc-mon fc-future"
                                                                    data-date="2020-07-27">27</td>
                                                                <td class="fc-day-number fc-tue fc-future"
                                                                    data-date="2020-07-28">28</td>
                                                                <td class="fc-day-number fc-wed fc-future"
                                                                    data-date="2020-07-29">29</td>
                                                                <td class="fc-day-number fc-thu fc-future"
                                                                    data-date="2020-07-30">30</td>
                                                                <td class="fc-day-number fc-fri fc-future"
                                                                    data-date="2020-07-31">31</td>
                                                                <td class="fc-day-number fc-sat fc-other-month fc-future"
                                                                    data-date="2020-08-01">1</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="fc-row fc-week fc-widget-content"
                                                style="height: 191px;">
                                                <div class="fc-bg">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future"
                                                                    data-date="2020-08-02"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future"
                                                                    data-date="2020-08-03"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future"
                                                                    data-date="2020-08-04"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future"
                                                                    data-date="2020-08-05"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future"
                                                                    data-date="2020-08-06"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future"
                                                                    data-date="2020-08-07"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                    data-date="2020-08-08"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="fc-content-skeleton">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-other-month fc-future"
                                                                    data-date="2020-08-02">2</td>
                                                                <td class="fc-day-number fc-mon fc-other-month fc-future"
                                                                    data-date="2020-08-03">3</td>
                                                                <td class="fc-day-number fc-tue fc-other-month fc-future"
                                                                    data-date="2020-08-04">4</td>
                                                                <td class="fc-day-number fc-wed fc-other-month fc-future"
                                                                    data-date="2020-08-05">5</td>
                                                                <td class="fc-day-number fc-thu fc-other-month fc-future"
                                                                    data-date="2020-08-06">6</td>
                                                                <td class="fc-day-number fc-fri fc-other-month fc-future"
                                                                    data-date="2020-08-07">7</td>
                                                                <td class="fc-day-number fc-sat fc-other-month fc-future"
                                                                    data-date="2020-08-08">8</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/saved_resource')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-messaging.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-firestore.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-auth.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/getfirebaseconfig')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/notification.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/notification.reducer.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/ckeditor.js')}}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/saved_resource(1)')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/fullcalendar.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/view.js')}}"></script>
@endsection