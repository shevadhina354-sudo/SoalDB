<?php
$host = "localhost";
$port = "3310";
$user = "root";    
$pass = "";         
$db   = "kampus";     

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
