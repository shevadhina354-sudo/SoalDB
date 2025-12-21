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
    <title>Tambah Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Form Tambah Mahasiswa</h5>
                </div>

                <div class="card-body">
                    <form action="simpan_mhs.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Program Studi</label>
                            <select name="prodi" class="form-select" required>
                                <option value="">-- Pilih Prodi --</option>
                                <option value="TL">TL</option>
                                <option value="TRPL">TRPL</option>
                                <option value="TRM">TRM</option>
                                <option value="TRMK">TRMK</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No HP</label>
                            <input type="text" name="nohp" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" name="filefoto" class="form-control" accept="image/*">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="mahasiswa.php" class="btn btn-secondary">Kembali</a>
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
