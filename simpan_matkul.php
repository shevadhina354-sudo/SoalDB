<?php
include "db.php";

$kodeMatkul = $_POST['kodeMatkul'];
$namaMatkul = $_POST['namaMatkul'];
$sks = $_POST['sks'];
$nidn = $_POST['nidn'];

$sql = "INSERT INTO tbl_matkul (kodeMatkul, namaMatkul, sks, nidn)
        VALUES ('$kodeMatkul', '$namaMatkul', '$sks', '$nidn')";

mysqli_query($conn, $sql);

header("Location: matkul.php");

?>
