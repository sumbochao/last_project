<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard Pro by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('css/admin/material-dashboard.css')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('css/admin/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @stack('css')

</head>

<body>
<div class="wrapper">
    {{--    Menu--}}
    @include('layout_admin.menu')

    <div class="main-panel">
        {{--            Header--}}
        @include('layout_admin.header')

        <div class="content">
            <div class="container-fluid">
                <div class="header text-center">
                    @yield('content')
                </div>
            </div>
        </div>
        {{--        Footer--}}
        @include('layout_admin.footer')
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('js/admin/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/admin/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/admin/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/admin/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
{{--<script src="../assets/js/arrive.min.js" type="text/javascript"></script>--}}
<!-- Forms Validations Plugin -->
<script src="{{asset('js/admin/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('js/admin/moment.min.js')}}"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
{{--<script src="../assets/js/chartist.min.js"></script>--}}
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
{{--<script src="../assets/js/jquery.bootstrap-wizard.js"></script>--}}
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
{{--<script src="../assets/js/bootstrap-notify.js"></script>--}}
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('js/admin/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
{{--<script src="../assets/js/jquery-jvectormap.js"></script>--}}
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
{{--<script src="../assets/js/nouislider.min.js"></script>--}}
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('js/admin/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{asset('js/admin/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
{{--<script src="../assets/js/sweetalert2.js"></script>--}}
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('js/admin/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
{{--<script src="../assets/js/fullcalendar.min.js"></script>--}}
<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('js/admin/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('js/admin/material-dashboard.js?v=1.2.1')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('js/admin/demo.js')}}"></script>

@stack('js')

</html>
