<?php include "db.php"; ?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h3 class="mb-3">Data Dosen</h3>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NIDN</th>
                <th>Nama Dosen</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM tbl_dosen ORDER BY nidn ASC";
        $query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><?= $row['nidn'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['prodi'] ?></td>
                <td><?= $row['email'] ?></td>
        
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
