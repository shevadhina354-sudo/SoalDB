<?php include "db.php"; ?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h3 class="mb-3">Data Mata Kuliah</h3>

    <a href="tambah_matkul.php" class="btn btn-primary mb-3">+ Tambah Matkul</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode MK</th>
                <th>Nama Matkul</th>
                <th>SKS</th>
                <th>NIDN</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM tbl_matkul ORDER BY kodeMatkul ASC";
        $query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($conn , $query)) {
        ?>
            <tr>
                <td><?= $row['kodeMatkul'] ?></td>
                <td><?= $row['namaMatkul'] ?></td>
                <td><?= $row['sks'] ?></td>
                <td><?= $row['nidn'] ?></td>
                <td>
                    <a href="edit_matkul.php?kode=<?= $row['kodeMatkul'] ?>" 
                       class="btn btn-warning btn-sm">Edit</a>

                   <a href="hapus_matkul.php?kodeMatkul=<?= $row['kodeMatkul'] ?>" 
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin hapus data?')">Hapus</a>

                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
</body>
</html>
