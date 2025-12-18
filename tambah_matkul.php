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
    <title>Tambah Matkul</title>
</head>
<body>

<h3>Form Tambah Matkul</h3>

<form action="simpan_matkul.php" method="post">
    <table>
        <tr>
            <td>Kode Matkul</td>
            <td><input type="text" name="kodeMatkul" required></td>
        </tr>

        <tr>
            <td>Nama Matkul</td>
            <td><input type="text" name="namaMatkul" required></td>
        </tr>

        <tr>
            <td>SKS</td>
            <td><input type="number" name="sks" required></td>
        </tr>

        <tr>
            <td>Nidn</td>
            <td><input type="number" name="nidn" required></td>
        </tr>

        <tr>
            <td></td>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>

</body>
</html>
