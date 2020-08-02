@extends('Layout.master')

@section('title','ERP-Danh Sách Gian Hàng')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/crm/service/style.css') }}" type="text/css">  
@endsection

@section('content-page')
    
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/service/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/service/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/service/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/service/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/service/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/service/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/service/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/service/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/service/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/saved_resource(3)') }}"></script>
@endsection
    
