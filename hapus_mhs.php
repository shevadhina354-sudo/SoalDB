<?php
include "db.php";

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $sql = "DELETE FROM tbl_mahasiswa WHERE nim = '$nim'";

    if (mysqli_query($conn, $sql)) {

        header("Location: mahasiswa.php");
        
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
} else {
    echo "NIM tidak ditemukan!";
}
?>
