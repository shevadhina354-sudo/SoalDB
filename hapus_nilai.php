<?php
include "db.php";

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}

$id = $_GET['id'];

$sql = "DELETE FROM tbl_nilai WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {

    header("Location: nilai.php");

} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>
