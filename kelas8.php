<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda Pembelajaran Kelas 8</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">

    <style>
        /* Latar belakang umum dengan gambar yang bergerak vertikal */
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
            color: #333;
            background-image: url('polabil.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-attachment: fixed; /* Menambahkan efek gambar tetap saat scroll */
            animation: moveBackground 20s linear infinite; /* Waktu lebih lama agar gerakan lebih halus */
        }

        /* Animasi bergerak vertikal */
        @keyframes moveBackground {
            0% {
                background-position: center top;
            }
            100% {
                background-position: center bottom;
            }
        }

        /* Styling untuk navbar dengan warna abu-abu terang */
        .navbar {
            background-color: #f1f1f1;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #333 !important;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff !important;
        }

        /* Jumbotron dengan latar belakang biru muda dan teks putih */
        .jumbotron {
            background-color: #00b0ff;
            color: white;
            border-radius: 15px;
            padding: 50px 30px;
            text-align: center;
        }

        .jumbotron h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .jumbotron p {
            font-size: 1.2rem;
            font-family: 'Roboto', sans-serif;
        }

        /* Card dengan gaya zig-zag dan memastikan semua ukuran card sama */
        .card-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 40px;
        }

        .card-left, .card-right {
            width: 48%;
            margin-bottom: 30px;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .card-left {
            margin-right: 2%;
        }

        .card-right {
            margin-left: 2%;
        }

        .card-body {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }

        .card-title {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            color: #00b0ff;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #00b0ff;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: #00b0ff;
            border: none;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0091cc;
        }

    </style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Pola Bilangan Kelas 8</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="kelas8.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="materi.html">Materi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://wordwall.net/play/83307/109/237">Kuis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="latihan1.html">Latihan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lemker1.html">Lembar Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron">
    <h1 class="display-4">Selamat Datang di Pembelajaran Kelas 8</h1>
    <p class="lead">Mari pelajari berbagai konsep pola bilangan dengan cara yang menyenangkan dan interaktif!</p>
    
</div>

<!-- Card Zig-Zag untuk Video Pembelajaran dan Materi -->
<div class="container">
    <div class="card-wrapper">
        <!-- Card Video Pembelajaran -->
        <div class="card-left">
            <div class="card">
                <img src="2.jpg" class="card-img-top" alt="Video Pembelajaran">
                <div class="card-body">
                    <h5 class="card-title">Video Pembelajaran</h5>
                    <p class="card-text">Tonton video tutorial untuk penjelasan yang lebih detail tentang materi yang telah dipelajari.</p>
                    <a href="video.html" class="btn btn-primary">Tonton Video</a>
                </div>
            </div>
        </div>

        <!-- Card Materi Pola Bilangan -->
        <div class="card-right">
            <div class="card">
                <img src="1.jpg" class="card-img-top" alt="Materi Pola Bilangan">
                <div class="card-body">
                    <h5 class="card-title">Materi Pola Bilangan</h5>
                    <p class="card-text">Pelajari berbagai jenis pola bilangan dan cara perhitungannya.</p>
                    <a href="materi.html" class="btn btn-primary">Lihat Materi</a>
                </div>
            </div>
        </div>

        
        <div class="card-left">
            <div class="card">
                <img src="3.jpg" class="card-img-top" alt="Video Pembelajaran">
                <div class="card-body">
                    <h5 class="card-title">Lembar Kerja</h5>
                    <p class="card-text">Selesaikan lembar kerja untuk menambah pengetahuan anda.</p>
                    <a href="lemker1.html" class="btn btn-primary">Lihat Lemker</a>
                </div>
            </div>
        </div>

       
        <div class="card-right">
            <div class="card">
                <img src="4.jpg" class="card-img-top" alt="Materi Pola Bilangan">
                <div class="card-body">
                    <h5 class="card-title">Lembar Latihan</h5>
                    <p class="card-text">Mari berlatih dan jangan putus asa.</p>
                    <a href="latihan1.html" class="btn btn-primary">Lihat Latihan</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Pembelajaran Kelas 8 | Semua Hak Cipta Dilindungi</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
