<?php
require "includes/config.php";
require "includes/function.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kuliner</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        /* Navbar */
        nav {
            background-color: #16C47F;
            width: 100%; /* Membuat navbar membentang penuh */
        }
        nav a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s ease-in-out;
        }
        nav a:hover {
            color: #d4edda;
        }
        /* Header */
        header {
            background-color: #121212; /* Warna latar belakang header */
            color: white;
            padding: 0rem 0; /*Padding untuk memberi jarak yang cukup */
            text-align: center;
            width: 100%; /* Membuat header membentang penuh */
        }
        header h1 {
            color: #00FF9C;
            margin: 0;
            font-weight: bold;
        }
        hr {
            border: none;
            height: 1px;
            background-color: #ddd;
            margin: 1.5rem 0;
        }
        /* Footer */
        footer {
            background-color: #1A3636;
            padding: 15px;;
            color: #D6BD98;
            padding: 30px 15px;
            text-align: center;
            position: relative;
            width: 100%; /* Footer membentang penuh */
        }
        .container {
            padding: 0 15px; /* Memberikan ruang di kiri dan kanan */
        }
    </style>
</head>
<body>
    <nav class="py-2 px-3 mb-4">
        <?php require "includes/navbar.php" ?>
    </nav>
    <header>
        <h1>Culinary in the World</h1>
        <hr>
    </header>
    <div class="container">
        <div class="text-center my-4">
            <?php require "includes/konten.php" ?>
        </div>
    </div>

    <footer>
        <div>Pemrograman Web 1 Zaky Putra Pratama @<?= date("Y") ?></div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
