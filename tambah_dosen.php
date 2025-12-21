<?php
include 'blok.php';
if ($_SESSION['role'] == 'mhs') {
    header("location: index.php");
    exit();
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Dosen</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Form Tambah Data Dosen</h5>
                </div>

                <div class="card-body">
                    <form action="simpan_dosen.php" method="post">

                        <div class="mb-3">
                            <label class="form-label">NIDN</label>
                            <input type="text" name="nidn" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Dosen</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Program Studi</label>
                            <input type="text" name="prodi" class="form-control" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="dosen.php" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
