<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h3 class="mb-3">Tambah Mahasiswa</h3>

    <form action="simpan_mhs.php" method="post">

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Prodi</label>
            <select name="prodi" class="form-control" required>
                <option value="">-- Pilih Prodi --</option>
                <option value="TL">TL</option>
                <option value="TRPL">TRPL</option>
                <option value="TRM">TRM</option>
                <option value="TRMK">TRMK</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="mahasiswa.php" class="btn btn-secondary">Kembali</a>

    </form>
</div>

</body>
</html>
