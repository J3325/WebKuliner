<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food</title>
    <!-- Link to Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212; /* Latar belakang gelap */
            color: #e0e0e0;
        }
        h2 {
            color: #f1f1f1;
            font-weight: bold;
        }
        .card {
            background-color: #1e1e1e;
            border: none;
            color: #ddd;
        }
        .card-title {
            color: #f1f1f1;
        }
        .form-control {
            background-color: #2e2e2e;
            color: #e0e0e0;
            border: 1px solid #444;
        }
        .form-control:focus {
            background-color: #3e3e3e;
            color: #fff;
            border-color: #555;
            box-shadow: none;
        }
        .btn-primary {
            background-color: rgb(89, 34, 255);
            border: none;
            color: white;
        }
        .btn-primary:hover {
            background-color: #e64a19;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .btn-danger {
            background-color: #d32f2f;
            color: white;
        }
        .btn-danger:hover {
            background-color: #c62828;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">What's Your Food?</h2>
        <div class="card mx-auto" style="max-width: 40rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Add New Food</h5>
                <form method="post" action="?page=makananAddProses">
                    <div class="mb-3">
                        <label for="namaMakanan" class="form-label d-block text-start">Name Food</label>
                        <input type="text" id="namaMakanan" name="nama_makanan" class="form-control" placeholder="Enter food name" required>
                    </div>
                    <div class="mb-3">
                        <label for="daerahMakanan" class="form-label d-block text-start">Origin of Food</label>
                        <input type="text" id="daerahMakanan" name="daerah_makanan" class="form-control" placeholder="Enter origin of food" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                        <button type="reset" class="btn btn-secondary me-2">Reset</button>
                        <button type="button" class="btn btn-danger" onClick="document.location='?page=makanan'">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
