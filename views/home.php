<?php
// Include konfigurasi database
include "includes/config.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link to Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #121212, #121212); /* Gradasi latar belakang */
            color: #e0e0e0;
        }
        h1 {
            color: #D6EFD8;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Efek teks */
        }
        h2 {
            color: #D6BD98;
            font-weight: 500;
        }
        .card {
            background-color: rgba(31, 31, 31, 0.9); /* Transparansi untuk card */
            border: none;
            color: #ddd;
            margin-bottom: 2rem;
            border-radius: 12px; /* Menghaluskan sudut */
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px); /* Efek hover card */
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
        }
        .card-body {
            padding: 2.5rem 2rem;
            border-radius: 12px;
            background-color: #E4E0E1;
            text-align: center; /* Latar belakang gradasi pada card body */
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3); /* Bayangan lembut pada card body */
        }
        .card-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #493628; /* Warna judul emas */
        }
        .card-text {
            font-size: 1.1rem;
            color: #1A1A19;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        .btn-custom {
            background-color: #F0BB78;
            color: rgb(0, 0, 0);
            padding: 1.2rem 3rem;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #14A16C;
            transform: scale(1.1); /* Efek zoom tombol saat di hover */
        }
        .d-flex {
            justify-content: space-evenly;
        }
        .footer {
            background-color: #1e1e1e;
            padding: 1.5rem;
            text-align: center;
            color: #bbb;
            position: absolute;
            bottom: 0;
            width: 100%;
            font-size: 0.9rem;
        }
        .footer p {
            margin: 0;
            letter-spacing: 1px;
        }
        /* Menambahkan gaya untuk bingkai pada gambar */
        .carousel-item img {
            height: 250px; /* Menyesuaikan tinggi gambar */
            width: auto;
            object-fit: cover;
            border: 5px solid #F0BB78; /* Bingkai gambar */
            border-radius: 10px; /* Menambahkan sudut melengkung pada bingkai */
        }
    </style>
</head>
<body>
    <div class="container mt-7">
        <!-- Menambahkan konten tambahan untuk menyambut pengguna -->
        <h1 class="text-center mb-3">Welcome to the Website!!</h1>
        <h2 class="text-center mb-5">Looking for Food and Drink?</h2>

        <!-- Carousel Gambar -->
        <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://i.pinimg.com/736x/ff/8d/da/ff8dda4566254608355e7c471ffcf095.jpg" class="d-block w-100" alt="Delicious Food">
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/474x/69/e8/9f/69e89f917dd5ea1931714d985892df04.jpg" class="d-block w-100" alt="Refreshing Drinks">
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/736x/b1/0c/56/b10c56c494df5267df0794eee5205b45.jpg" class="d-block w-100" alt="Top Picks">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

        <!-- Card untuk tombol menu makanan dan minuman -->
        <div class="card mx-auto mb-5" style="max-width: 45rem;">
            <div class="card-body">
                <h5 class="card-title">Explore Delicious Food & Refreshing Drinks</h5>
                <div class="d-flex mb-4">
                    <a href="?page=makanan" class="btn btn-custom">See Food Table</a>
                    <a href="?page=minuman" class="btn btn-custom">See Drink Table</a>
                </div>

                <!-- Card tambahan -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Want to Give Input?</h5>
                        <p class="card-text">Have questions or need assistance? Contact our support team for more information about our services.</p>
                        <a href="?page=contact" class="btn btn-custom">Contact Us</a>
                    </div>
                </div>
                <!-- Akhir card tambahan -->
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
