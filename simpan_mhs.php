<?php
include "db.php";

$namaFile = $_FILES['filefoto']['name'];
$lokasiSementara = $_FILES['filefoto']['tmp_name'];
$lokasiTujuan = "fileFoto/".$namaFile;

$terupload = move_uploaded_file($lokasiSementara, $lokasiTujuan);

if($terupload){

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];
$noHp = $_POST['nohp'];
$foto = $lokasiTujuan;

$sql = "INSERT INTO tbl_mahasiswa (nim, nama, prodi, email, noHp, foto)
        VALUES ('$nim', '$nama', '$prodi', '$email', '$noHp', '$foto')";

mysqli_query($conn, $sql);

header("Location: mahasiswa.php");

} else {
    echo "File foto gagal diupload.";
}
?>
