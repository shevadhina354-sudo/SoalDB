<?php
include 'blok.php';
if ($_SESSION['role'] == 'mhs') {
    header("location: index.php");
    exit();
}

include "db.php";

if (!isset($_GET['nidn'])) {
    die("NIDN tidak ditemukan.");
}

$nidn = $_GET['nidn'];
$sql = "SELECT * FROM tbl_dosen WHERE nidn = '$nidn'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc( $query);

if (!$data) {
    die("Data tidak ditemukan.");
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h3 class="mb-3">Edit Data Dosen</h3>

    <form action="update_dosen.php" method="post">
        <input type="hidden" name="nidn" value="<?= $data['nidn'] ?>">

        <div class="mb-3">
            <label>Nama Dosen</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Prodi</label>
            <input type="text" name="prodi" class="form-control" value="<?= $data['prodi'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="dosen.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
