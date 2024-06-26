<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>EduAdmin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset('assets/css/vendors_css.css')}}">

    <!-- Style-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/skin_color.css')}}">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
    <div id="loader"></div>
    {{--  Header Start  --}}
    @include('backend.layouts.includes.header')
    {{--  Header End  --}}
    {{--  Sidebar Start  --}}
    @include('backend.layouts.includes.sidebar')
    {{--  Sidebar End  --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    {{--  Footer Start  --}}
    @include('backend.layouts.includes.footer')
    {{--  Footer End  --}}



{{--    <div class="control-sidebar-bg"></div>--}}

</div>
<!-- ./wrapper -->


<!-- Page Content overlay -->


<!-- Vendor JS -->
<script src="{{asset('assets/js/vendors.min.js')}}"></script>
<script src="{{asset('assets/js/pages/chat-popup.js')}}"></script>
<script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>

<script src="{{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
<script src="{{asset('assets/vendor_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/vendor_components/fullcalendar/fullcalendar.js')}}"></script>

<!-- EduAdmin App -->
<script src="{{asset('assets/js/template.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboard3.js')}}"></script>
<script src="{{asset('assets/js/pages/calendar.js')}}"></script>

</body>
</html>
