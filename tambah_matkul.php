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
    <title>Tambah Mata Kuliah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Form Tambah Mata Kuliah</h5>
                </div>

                <div class="card-body">
                    <form action="simpan_matkul.php" method="post">

                        <div class="mb-3">
                            <label class="form-label">Kode Matkul</label>
                            <input type="text" name="kodeMatkul" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Mata Kuliah</label>
                            <input type="text" name="namaMatkul" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SKS</label>
                            <input type="number" name="sks" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NIDN Dosen</label>
                            <input type="number" name="nidn" class="form-control" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="matkul.php" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
