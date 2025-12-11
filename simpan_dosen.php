<?php
include "db.php";

$nidn  = $_POST['nidn'];
$nama  = $_POST['nama'];
$email = $_POST['email'];
$prodi = $_POST['prodi'];

$sql = "INSERT INTO tbl_dosen (nidn, nama, email, prodi) 
        VALUES ('$nidn', '$nama', '$email', '$prodi')";

if (mysqli_query($conn, $sql)) {

    header("Location: dosen.php");

} else {
    
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}
?>
