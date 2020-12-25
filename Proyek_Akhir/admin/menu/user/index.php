<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MySQL - Menampilkan Data dari Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h2>Data User</h2>
    </div>
    <br>
    <?php
    if(isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "Data berhasil di input";
        } elseif ($pesan == "update") {
            echo "Data berhasil di update";
        } elseif ($pesan == "hapus") {
            echo "Data berhasil di hapus";
        }
    }
    ?>
    <br>
    <a href="input.php" class="tombol"> + Tambah Data Baru</a>

    <h3>Data User</h3>
    <table border="1" class="table">
        <tr>
            <th>kode User</th>
            <th>nama</th>
            <th>username</th>
            <th>password</th>
            <th>email</th>
            <th>no hp</th>
            <th>Opsi</th>
            <th></th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($koneksi,"select * from user");
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['no hp']; ?></td>
                <td><?php echo $data['opsi']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>" class="hapus">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>