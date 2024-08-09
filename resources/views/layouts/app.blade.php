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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /* General Styling */
        body {
            font-family: 'Roboto', sans-serif;
        }
        
        h1 {
            font-size: 2.5rem;
            color: #2C3E50;
            font-weight: bold;
        }
        
        .font-weight-bold {
            font-weight: 700;
        }
        
        .text-primary {
            color: #3498DB;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
        }
        
        .btn-secondary {
            background-color: #95A5A6;
            border: none;
            color: white;
        }
        
        .btn-warning {
            background-color: #F39C12;
            border: none;
            color: white;
        }
        
        .btn-danger {
            background-color: #E74C3C;
            border: none;
            color: white;
        }
        
        .btn-secondary:hover, .btn-warning:hover, .btn-danger:hover {
            opacity: 0.8;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #4A55A2 !important;
        }
        
        .navbar-light .navbar-nav .nav-link, .navbar-light .navbar-brand {
            color: #ffffff;
        }

        /* Card Styling */
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            text-align: center;
            overflow: hidden;
        }
        
        .card img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        
        .card-title {
            font-size: 1.25rem;
            color: #333;
        }
        
        .card-text {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 10px;
        }
        
        .card-text strong {
            color: #333;
        }

        /* Button Styling */
        .btn-info, .btn-warning, .btn-danger {
            border-radius: 4px;
        }
        
        /* Alert Styling */
        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        /* Modal Styling */
        .modal-content {
            border-radius: 8px;
        }
        
        .modal-header, .modal-footer {
            border-color: #dee2e6;
        }

        /* Miscellaneous */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
    </style>
</head>
<body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
        <!-- Topbar Header -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="homepage" class="dark-logo" style="width: 120px; height: 50px;" />
                    </a>
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

        <!-- Sidebar -->
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ url('/home') }}" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ url('/profile') }}" aria-expanded="false">
                                <i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('mobils.index') }}" aria-expanded="false">
                                <i class="mdi mdi-car"></i><span class="hide-menu">Mobil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('pembeli.index') }}" aria-expanded="false">
                                <i class="mdi mdi-account-multiple"></i><span class="hide-menu">Pembeli</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('transaksi.index') }}" aria-expanded="false">
                                <i class="fa fa-money"></i><span class="hide-menu">Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-power"></i><span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Page Title -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">@yield('title')</h3>
                    </div>
                </div>
                <!-- Page Content -->
                @yield('content')
            </div>
        </div>
    </div>

    <!-- jQuery -->
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
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
