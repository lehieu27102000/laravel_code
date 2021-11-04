<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="shortcut icon" href="/AdminLTE/plugins/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- <link rel="stylesheet" href="/AdminLTE/plugins/font-awesome-4.7.0/css/font-awesome.min.css"> -->
    <!-- iCheck -->
    <link rel="stylesheet" href="/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/AdminLTE/plugins/css/nprogress.css">
    <!-- toastr -->
    <link rel="stylesheet" href="/AdminLTE/plugins/toastr/toastr.css">
    <link rel="stylesheet" href="/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link href="/AdminLTE/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/AdminLTE/plugins/css/common.css">
    <script src="/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <script src="/AdminLTE/plugins/js/common.js"></script>
    <script src="/AdminLTE/plugins/js/nprogress.js"></script>
    <script src="/AdminLTE/plugins/jquery-ui/jquery-ui.js"></script>
    <!-- Bootstrap -->
    <script src="/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
    <script src="/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- jquery-toastr -->
    <script src="/AdminLTE/plugins/toastr/toastr.min.js"></script>
    <!-- jquery-validation -->
    <script src="/AdminLTE/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="/AdminLTE/plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- DataTables -->
    <script src="/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- <script src="/js/datatables-config.js"></script> -->
    <!-- Summernotes -->
    <script src="/AdminLTE/plugins/summernote/summernote.js"></script>
    <script src="/AdminLTE/plugins/summernote/summernote-bs4.js"></script>
    <script src="/AdminLTE/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/AdminLTE/dist/js/adminlte.js"></script>
    <!-- Bootstrap-datepicker -->

    <script src="/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div id="pre-loading" style="">
            <div id="fountainG">
                <div id="fountainG_1" class="fountainG"></div>
                <div id="fountainG_2" class="fountainG"></div>
                <div id="fountainG_3" class="fountainG"></div>
                <div id="fountainG_4" class="fountainG"></div>
                <div id="fountainG_5" class="fountainG"></div>
                <div id="fountainG_6" class="fountainG"></div>
                <div id="fountainG_7" class="fountainG"></div>
                <div id="fountainG_8" class="fountainG"></div>
            </div>
        </div>
    </div>
</body>

</html>
