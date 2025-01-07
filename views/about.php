<?php
// Base URL untuk mempermudah navigasi antar halaman
include "includes/config.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Web Ini</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
        }
        h1 {
            color: #D6EFD8;
            font-weight: bold;
        }
        .card {
            background-color: #1e1e1e;
            border: none;
            color: #ddd;
        }
        .card-body {
            padding: 2rem;
            margin: 1rem;
            border-radius: 8px;
            background-color: #2c2c2c;
        }
        .card-title {
            color: #f1f1f1;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .btn-custom {
            background-color: rgb(30, 220, 109);
            color: white;
            padding: 0.8rem 2rem;
            font-size: 1rem;
        }
        .btn-custom:hover {
            background-color: #e64a19;
        }
        .footer {
            background-color: #1e1e1e;
            padding: 1rem;
            text-align: center;
            color: #bbb;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tentang Web Ini</h1>
        <div class="card mx-auto" style="max-width: 40rem;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3">Selamat datang di Website Kami</h5>
                <p class="mb-3">Website ini dirancang untuk memberikan informasi seputar kuliner dan minuman dari berbagai daerah. Di sini, Anda dapat melihat daftar makanan dan minuman, serta menambahkannya ke dalam sistem kami.</p>
                <p class="mb-3">Fitur utama dari website ini termasuk pencarian, penyortiran, dan manajemen data yang memudahkan Anda untuk menjelajahi berbagai jenis kuliner yang ada. Semua ini dibangun dengan teknologi modern untuk memastikan pengalaman pengguna yang menyenangkan.</p>
                <div class="d-flex justify-content-center mt-4">
                    <!-- Tombol Kembali ke Beranda -->
                    <a href="<?= $base_url ?>views/home.php" class="btn btn-custom">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
