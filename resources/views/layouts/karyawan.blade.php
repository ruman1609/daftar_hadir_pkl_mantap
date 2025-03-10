<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('/own/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/own/css/dashboard.css')}}">
    <link href="{{url('/own/css/material.css')}}" rel="stylesheet">
</head>
<body>

    <!--header-->
    @include('layouts.module.header-karyawan')
    <!--sidebar-->
    <div class="app-body" id="dw">
        <div class="sidebar">
            @include('layouts.module.sidebar-karyawan')
        </div>
        @yield('content')

    </div>
    <!--footer-->
    <footer class="app-footer">
        <div>
            <span>&copy; 2018 Informatika.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by 25&61</span>
        </div>
    </footer>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/coreui.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-tooltips.min.js') }}"></script>
    @yield('js')
</body>
</html>
