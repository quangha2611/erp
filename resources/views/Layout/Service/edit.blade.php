@extends('Layout.master')

@section('title','ERP-Danh Sách Gian Hàng')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/service/style.css') }}" type="text/css">  
@endsection

@section('content-page')
    
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/service/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/customer/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/customer/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/customer/saved_resource(3)') }}"></script>
@endsection
    
