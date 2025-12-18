<?php
include 'blok.php';
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Akademik</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }
        .card-menu {
            transition: 0.3s;
            border-radius: 15px;
        }
        .card-menu:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .icon-box {
            font-size: 40px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Sistem Akademik</a>
        <div class="ms-auto text-white">
            <?= $_SESSION['login_user']; ?>
            <?= $_SESSION['role']; ?>
            <a href="logout.php" class="btn btn-light btn-sm ms-3">Logout</a>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">
    <h3 class="text-center mb-4 fw-bold">Menu Utama</h3>

    <div class="row g-4">

        <!-- Mahasiswa -->
        <div class="col-md-3">
            <div class="card card-menu text-center shadow-sm">
                <div class="card-body">
                    <div class="icon-box text-primary">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5 class="card-title">Data Mahasiswa</h5>
                    <a href="mahasiswa.php" class="btn btn-primary w-100 mt-3">Buka</a>
                </div>
            </div>
        </div>

        <!-- Dosen -->
        <div class="col-md-3">
            <div class="card card-menu text-center shadow-sm">
                <div class="card-body">
                    <div class="icon-box text-success">
                        <i class="bi bi-person-badge-fill"></i>
                    </div>
                    <h5 class="card-title">Data Dosen</h5>
                    <a href="dosen.php" class="btn btn-success w-100 mt-3">Buka</a>
                </div>
            </div>
        </div>

        <!-- Matkul -->
        <div class="col-md-3">
            <div class="card card-menu text-center shadow-sm">
                <div class="card-body">
                    <div class="icon-box text-warning">
                        <i class="bi bi-journal-bookmark-fill"></i>
                    </div>
                    <h5 class="card-title">Mata Kuliah</h5>
                    <a href="matkul.php" class="btn btn-warning w-100 mt-3">Buka</a>
                </div>
            </div>
        </div>

        <!-- Nilai -->
        <div class="col-md-3">
            <div class="card card-menu text-center shadow-sm">
                <div class="card-body">
                    <div class="icon-box text-danger">
                        <i class="bi bi-bar-chart-fill"></i>
                    </div>
                    <h5 class="card-title">Data Nilai</h5>
                    <a href="nilai.php" class="btn btn-danger w-100 mt-3">Buka</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
