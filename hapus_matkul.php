<?php
include "db.php";

if (!isset($_GET['kodeMatkul'])) {
    die("Kode Matkul tidak ditemukan!");
}

$kode = $_GET['kodeMatkul'];

$sql = "DELETE FROM tbl_matkul WHERE kodeMatkul = '$kode'";

if (mysqli_query($conn, $sql)) {
    header("Location: matkul.php");
    exit();
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>
