<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>@yield('title', 'Dashboard')</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- AdminLTE CSS -->
    <link href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Custom Color CSS -->
    <link href="{{ asset('css/colors/default-dark.css') }}" id="theme" rel="stylesheet">
    <!-- Inline CSS for Quick Testing -->
    <style>
        .navbar {
            background-color: #4A55A2 !important;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #ffffff; /* Adjust text color if needed */
        }

        .navbar-light .navbar-brand {
            color: #ffffff; /* Adjust logo color if needed */
        }
    </style>
</head>
<body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
        <!-- Topbar header -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <b><img src="{{ asset('assets/images/logo.png') }}" style="width: 120px; height: 50px;" alt="homepage" class="dark-logo" /></b>
                       
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-xs-down search-box">
                            <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)">
                                <i class="ti-search"></i>
                            </a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter">
                                <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="{{ url('/profile') }}">
                                <img src="{{ asset('assets/images/users/pngwing.com.png') }}" alt="user" class="profile-pic" />
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- End Topbar header -->

        <!-- Page content -->
        @yield('content')
        <!-- End Page content -->
    </div>

    <!-- All Jquery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}"></script>

    <!-- Script for logout form -->
    <script>
        function logout() {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }
    </script>
</body>
</html>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
