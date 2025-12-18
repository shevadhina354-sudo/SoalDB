<?php
include 'blok.php';
if ($_SESSION['role'] == 'mhs') {
    header("location: index.php");
    exit();
}

include "db.php";

if (isset($_GET['nidn'])) {
    $nidn = $_GET['nidn'];

    $sql = "DELETE FROM tbl_dosen WHERE nidn = '$nidn'";

    if (mysqli_query($conn, $sql)) {

        header("Location: dosen.php");
        
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
} else {
    echo "NIDN tidak ditemukan!";
}
?>
