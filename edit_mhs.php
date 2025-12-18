<?php
include 'blok.php';
if ($_SESSION['role'] == 'mhs') {
    header("location: index.php");
    exit();
}

include "db.php";

if (!isset($_GET['nim'])) {
    die("NIM tidak ditemukan.");
}

$nim = $_GET['nim'];
$sql = "SELECT * FROM tbl_mahasiswa WHERE nim = '$nim'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($conn , $query);

if (!$data) {
    die("Data tidak ditemukan.");
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h3 class="mb-3">Edit Data Mahasiswa</h3>

    <form action="update_mhs.php" method="post">
        <input type="hidden" name="nim" value="<?= $data['nim'] ?>">

        <div class="mb-3">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Prodi</label>
            <select name="prodi" class="form-control" required>
                <option value="">--Pilih Prodi--</option>
                <option value="TL"   <?= ($data['prodi'] == "TL" ? "selected" : "") ?>>TL</option>
                <option value="TRPL" <?= ($data['prodi'] == "TRPL" ? "selected" : "") ?>>TRPL</option>
                <option value="TRM"  <?= ($data['prodi'] == "TRM" ? "selected" : "") ?>>TRM</option>
                <option value="TRMK" <?= ($data['prodi'] == "TRMK" ? "selected" : "") ?>>TRMK</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="mahasiswa.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
