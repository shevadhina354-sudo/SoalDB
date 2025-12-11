<?php
include "db.php";

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}

$id = $_GET['id'];
$sql = "SELECT * FROM tbl_nilai WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($conn, $query);

if (!$data) {
    die("Data tidak ditemukan.");
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h3 class="mb-3">Edit Nilai Mahasiswa</h3>

    <form action="update_nilai.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="<?= $data['nim'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Kode Mata Kuliah</label>
            <input type="text" name="kode_mk" class="form-control" value="<?= $data['kode_mk'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" class="form-control" value="<?= $data['nama_mk'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Nilai</label>
            <input type="number" name="nilai" class="form-control" value="<?= $data['nilai'] ?>" min="0" max="100" required>
        </div>

        <div class="mb-3">
            <label>Grade</label>
            <select name="grade" class="form-control" required>
                <option value="">-- Pilih Grade --</option>
                <option value="A" <?= ($data['grade'] == "A" ? "selected" : "") ?>>A</option>
                <option value="B" <?= ($data['grade'] == "B" ? "selected" : "") ?>>B</option>
                <option value="C" <?= ($data['grade'] == "C" ? "selected" : "") ?>>C</option>
                <option value="D" <?= ($data['grade'] == "D" ? "selected" : "") ?>>D</option>
                <option value="E" <?= ($data['grade'] == "E" ? "selected" : "") ?>>E</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="nilai.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
