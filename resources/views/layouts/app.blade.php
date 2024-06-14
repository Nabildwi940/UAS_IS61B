<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tambahkan CSS tambahan jika diperlukan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
        }

        .sidebar h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #555;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Optional: Add additional styles for your content area */
        .content h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>MENU ADMIN</h2>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="{{ route('mobil.create') }}">Mobil</a></li>
            <li><a href="#">Penjualan Mobil</a></li>
            <li><a href="#">Pembelian Mobil</a></li>
            <li><a href="#">Detail Tukar Tambah</a></li>
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
