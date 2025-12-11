<?php
include "db.php";

$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$sks     = $_POST['sks'];
$prodi   = $_POST['prodi'];

$sql = "UPDATE tbl_matkul SET 
        nama_mk = '$nama_mk',
        sks = '$sks',
        prodi = '$prodi'
        WHERE kode_mk = '$kode_mk'";

if (mysqli_query($conn, $sql)) {
    header("Location: matkul.php");
} else {
    echo "Gagal update data: " . mysqli_error($conn);
}
?>
