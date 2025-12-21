<?php
include 'koneksi.php';


$namaFile = $_FILES['fileFoto']['name'];
$lokasiSementara = $_FILES['fileFoto']['tmp_name'];  
$lokasiTujuan = "fileFoto/" . $namaFile;

$terupload = move_uploaded_file($lokasiSementara, $lokasiTujuan);

if($terupload) {
    $vnim = $_POST['nim'];
    $vnama = $_POST['nama'];
    $vprodi = $_POST['kelas'];
    $vemail = $_POST['email'];
    $vnohp = $_POST['nohp'];
    $vfoto = $lokasiTujuan;

    $queryUpdate = "UPDATE tbl_mahasiswa SET 
                    nama='$vnama', kelas='$vprodi', 
                    email='$vemail', no_hp='$vnohp', 
                    foto='$vfoto' WHERE nim='$vnim'";
}