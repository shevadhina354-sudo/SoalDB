<?php include "db.php"; ?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h3 class="mb-3">Data Mahasiswa</h3>

    <a href="tambah_mhs.php" class="btn btn-primary mb-3">+ Tambah Mahasiswa</a>
    <a href="logout.php" class="btn btn-danger mb-3">Log Out</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM tbl_mahasiswa ORDER BY nim ASC";
        $query = mysqli_query($conn, $sql);

       while ($row = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><img src="<?= $row['foto'] ?>" width="100" height="100"></td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['prodi'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['noHp'] ?></td>
        
                <td>
                    <a href="edit_mhs.php?nim=<?= $row['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus_mhs.php?nim=<?= $row['nim'] ?>" 
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus data ini?')">
                       Hapus
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
</body>
</html>
