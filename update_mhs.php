<?php
include "db.php";

$namaFile = $_FILES['fileFoto']['name'];
$lokasiSementara = $_FILES['fileFoto']['tmp_name'];
$lokasiTujuan = "fileFoto/".$namaFile;

$terupload = move_uploaded_file($lokasiSementara, $lokasiTujuan);

if($terupload){

$nim   = $_POST['nim'];
$nama  = $_POST['nama'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];
$noHp  = $_POST['nohp'];
$foto = $lokasiTujuan;

$sql = "UPDATE tbl_mahasiswa SET 
        nama = '$nama',
        prodi = '$prodi',
        email = '$email',
        noHp = '$noHp',
        foto = '$foto'
        WHERE nim = '$nim'";


if (mysqli_query($conn, $sql)) {

    header("Location: mahasiswa.php");

} else {
    echo "Gagal update data: " . mysqli_error($conn);
}
} else {
    echo "File foto gagal diupload.";
}
?>
