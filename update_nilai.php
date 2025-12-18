<?php
include "db.php";

$id       = $_POST['id'];
$nim      = $_POST['nim'];
$kode_mk  = $_POST['kode_mk'];
$nama_mk  = $_POST['nama_mk'];
$nilai    = $_POST['nilai'];
$grade    = $_POST['grade'];

$sql = "UPDATE tbl_nilai SET 
        nim = '$nim',
        kode_mk = '$kode_mk',
        nama_mk = '$nama_mk',
        nilai = '$nilai',
        grade = '$grade'
        WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {

    header("Location: nilai.php");

} else {
    echo "Gagal update data: " . mysqli_error($conn);
}
?>
