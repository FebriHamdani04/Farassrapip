<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profil Sekolah')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Verdana, sans-serif; background-color: #f3f4f6; color: #333; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 20px 40px; background: linear-gradient(90deg, #f12d2d, #702020); color: white; }
        .menu button { background: white; color: black; border: none; padding: 10px 20px; border-radius: 25px; cursor: pointer; font-weight: bold; transition: all 0.5s ease; }
        .menu button:hover { background: black; color: white; }
        .footer { background-color: #D32F2F; padding: 20px; text-align: center; color: white; }
    </style>
</head>

<body>
    <div class="header">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="School Logo" height="60">
        </a>
        <div class="menu">
            <a href="{{ url('/') }}"><button>HOME</button></a>
            <a href="{{ url('/form-aspirasi') }}"><button>Form Aspirasi</button></a>
        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
        <p>&copy; 2025 Profil Sekolah. All Rights Reserved.</p>
    </div>
</body>
</html>
