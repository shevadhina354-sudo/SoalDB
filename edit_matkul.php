<?php
include "db.php";

if (!isset($_GET['kode'])) {
    die("Kode Matkul tidak ditemukan.");
}

$kode = $_GET['kode'];
$sql = "SELECT * FROM tbl_matkul WHERE kodeMatkul = '$kode'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan.");
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h3 class="mb-3">Edit Data Mata Kuliah</h3>

    <form action="update_matkul.php" method="post">

        <input type="hidden" name="kodeMatkul" value="<?= $data['kodeMatkul'] ?>">

        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="namaMatkul" class="form-control" 
                   value="<?= $data['namaMatkul'] ?>" required>
        </div>

        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" 
                   value="<?= $data['sks'] ?>" required>
        </div>

        <div class="mb-3">
            <label>NIDN Dosen Pengampu</label>
            <input type="text" name="nidn" class="form-control" 
                   value="<?= $data['nidn'] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="matkul.php" class="btn btn-secondary">Kembali</a>

    </form>
</div>

</body>
</html>
