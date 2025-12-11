<?php
include "db.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];

$sql = "INSERT INTO tbl_mahasiswa (nim, nama, prodi, email)
        VALUES ('$nim', '$nama', '$prodi', '$email')";

mysqli_query($conn, $sql);

header("Location: mahasiswa.php");

?>
