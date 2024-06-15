<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>@yield('title')</title>
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/c3-master/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors/default-dark.css') }}" id="theme" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <b><img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" /></b>
                        <span><img src="{{ asset('assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" /></span>
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
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ url('/') }}" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ url('/profile') }}" aria-expanded="false">
                                <i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ url('/table') }}" aria-expanded="false">
                                <i class="mdi mdi-table"></i><span class="hide-menu">Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ url('/icons') }}" aria-expanded="false">
                                <i class="mdi mdi-emoticon"></i><span class="hide-menu">Icons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ url('/map') }}" aria-expanded="false">
                                <i class="mdi mdi-earth"></i><span class="hide-menu">Map</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ url('/blank') }}" aria-expanded="false">
                                <i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Blank</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ url('/404') }}" aria-expanded="false">
                                <i class="mdi mdi-help-circle"></i><span class="hide-menu">404</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">@yield('title')</h3>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
</body>
</html>
