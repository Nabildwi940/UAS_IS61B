<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Halaman Pengguna')</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .header {
            background-color: #357ABD;
            padding: 20px;
            text-align: center;
            color: white;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            font-size: 24px;
            position: relative;
        }
        .login-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #285A8D;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-btn:hover {
            background-color: #1d3b67;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            padding: 20px;
        }
        .card {
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .card img {
            width: 100%;
            height: 120px;
            object-fit: cover;
        }
        .card-body {
            padding: 10px;
            text-align: center;
        }
        .btn-detail {
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 10px;
            padding: 5px;
            background-color: #357ABD;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-detail:hover {
            background-color: #285A8D;
        }
    </style>
</head>
<body>
    <div id="main-wrapper">
        @yield('content')
    </div>

    <!-- All Jquery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}"></script>
</body>
</html>
