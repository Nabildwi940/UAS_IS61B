<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Kanit:wght@400;700&family=KoHo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Caveat:wght@400..700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Karla', sans-serif;
            background: linear-gradient(to right, #3F4B93, #2F364D);
            color: white;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #4A55A2;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }
        .navbar img {
            height: 50px;
            margin: 0 15px;
        }
        .navbar a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        .navbar .navbar-brand {
            margin-left: 15px;
        }
        .contact-info {
            background-color: #7895CB;
            text-align: center;
            padding: 10px 0px;
            margin-top: 0px;
        }
        .contact-info a {
            color: white;
            margin: 0 5px;
            text-decoration: none;
        }
        .contact-info img {
            height: 24px;
            margin-right: 3px;
            vertical-align: middle;
        }
        .container {
            padding: 20px;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .card {
            width: 100%;
            max-width: 350px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            background-color: white;
            color: black;
            font-family: 'KoHo', sans-serif;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            padding: 15px;
            text-align: left;
        }
        .card-body h3 {
            font-size: 18px;
            margin: 0;
            color: #4A55A2;
        }
        .card-body p {
            font-size: 14px;
            margin: 5px 0;
        }
        .btn-info {
            background-color: #4A55A2;
            border-color: #4A55A2;
        }
        .btn-info:hover {
            background-color: #3f4a8a;
            border-color: #3f4a8a;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
        <div class="navbar-brand text-center">Mobil Garasi Kampus</div>
        <a href="{{ route('login') }}" class="btn btn-primary ml-auto">Login</a>
    </div>
    <div class="contact-info">
        <a href="https://www.instagram.com/mobil_garasikampus" target="_blank">
            <img src="{{ asset('assets/images/instagram-icon.png') }}" alt="Instagram"> @mobil_garasikampus
        </a>
        <a href="https://wa.me/6285324406815">
            <img src="{{ asset('assets/images/whatsapp-icon.png') }}" alt="WhatsApp"> 085324406815
        </a>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
