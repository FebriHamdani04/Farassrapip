<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="header">
        <a href="{{ url('/login') }}">
            <img src="{{ asset('images/WhatsApp-Image-2024-05-10-at-10.34.55-PM.jpeg') }}" alt="School Logo">
        </a>
        <div class="menu">
            <button>HOME</button>
            <a href="{{ url('/form-aspirasi') }}">
                <button>Form Aspirasi</button>
            </a>
        </div>
    </div>

    <div class="banner">
        <h1>SMK TELKOM JAKARTA</h1>
        <p>Membangun Generasi Emas yang Berprestasi</p>
    </div>

    <div class="section">
        <h2>Sejarah Singkat Sekolah</h2>
        <p>Sekolah ini didirikan pada tahun 1985 dengan tujuan untuk mencetak generasi muda yang unggul di bidang akademik dan non-akademik. Berawal dari sebuah bangunan sederhana, kini sekolah kami telah berkembang menjadi institusi pendidikan modern dengan fasilitas lengkap dan tenaga pendidik yang berkualitas. Dalam perjalanannya, sekolah ini telah menghasilkan banyak lulusan yang sukses di berbagai bidang.
        </p>
    </div>

    <div class="section">
        <h2>Ekstrakurikuler</h2>
        <ul>
            <li>Pramuka</li>
            <li>Olahraga</li>
            <li>Paduan Suara</li>
            <li>Teater dan Seni</li>
            <li>Komunitas Coding</li>
        </ul>
    </div>

    <div class="section">
        <h2>Prestasi</h2>
        <ul>
            <li>Juara 1 Olimpiade Sains Nasional 2023</li>
            <li>Juara 2 Kompetisi Basket 2023</li>
        </ul>
        <div class="gallery">
            <img src="{{ asset('images/download__1_-removebg-preview.png') }}" alt="Prestasi 1">
            <img src="{{ asset('images/download__1_-removebg-preview.png') }}" alt="Prestasi 2">
            <img src="{{ asset('images/download__1_-removebg-preview.png') }}" alt="Prestasi 3">
        </div>
    </div>

    <div class="section">
        <h2>Kontak</h2>
        <ul>
            <li>Email: info@sekolah.com</li>
            <li>Telepon: (021) 123-4567</li>
            <li>Alamat: Jl. Pendidikan No. 10, Jakarta</li>
        </ul>
        <div class="social-media">
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://twitter.com" target="_blank">Twitter</a>
            <a href="https://instagram.com" target="_blank">Instagram</a>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Profil Sekolah. All Rights Reserved.</p>
    </div>
</body>

</html>
