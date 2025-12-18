<?php
include "db.php";

$nim   = $_POST['nim'];
$nama  = $_POST['nama'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];

$sql = "UPDATE tbl_mahasiswa SET 
        nama = '$nama',
        prodi = '$prodi',
        email = '$email'
        WHERE nim = '$nim'";


if (mysqli_query($conn, $sql)) {

    header("Location: mahasiswa.php");

} else {
    echo "Gagal update data: " . mysqli_error($conn);
}
?>