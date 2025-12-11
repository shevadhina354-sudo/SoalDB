<?php
include "db.php";

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];

$sql = "UPDATE tbl_dosen SET 
        nama = '$nama',
        prodi = '$prodi',
        email = '$email'
        WHERE nidn = '$nidn'";

if (mysqli_query($conn, $sql)) {
    header("Location: dosen.php");
} else {
    echo "Gagal update data: " . mysqli_error($conn);
}
?>
