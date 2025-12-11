<?php
include "db.php";

$nim = $_POST['nim'];
$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$nilai = $_POST['nilai'];
$grade = $_POST['grade'];

$sql = "INSERT INTO tbl_nilai (nim, kode_mk, nama_mk, nilai, grade)
        VALUES ('$nim', '$kode_mk', '$nama_mk', '$nilai', '$grade')";

mysqli_query($conn, $sql);

header("Location: nilai.php");

?>
