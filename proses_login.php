<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_user 
        WHERE username='$username' AND password='$password'";
$hasil = mysqli_query($conn, $sql);

if (mysqli_num_rows($hasil) == 1) {
    $row = mysqli_fetch_assoc($hasil);

    $_SESSION['login'] = true;
    $_SESSION['login_user'] = $row['username'];
    $_SESSION['role'] = $row['role'];

    echo "<script>
        window.location='index.php';
    </script>";
    exit;
} else {
    echo "<script>
        alert('Username atau Password salah!');
        window.location='login.php';
    </script>";
    exit;
}
