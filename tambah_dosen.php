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
</head>
<body>

<h3>Form Tambah Data Dosen</h3>

<form action="simpan_dosen.php" method="post">
    <table>
        <tr>
            <td>NIDN</td>
            <td><input type="text" name="nidn" required></td>
        </tr>

        <tr>
            <td>Nama Dosen</td>
            <td><input type="text" name="nama" required></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="email" name="email" required></td>
        </tr>

        <tr>
            <td>Prodi</td>
            <td><input type="text" name="prodi" required></td>
        </tr>

        <tr>
            <td></td>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>

</body>
</html>
