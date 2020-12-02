<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MySQL - Menampilkan Data dar Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MySQL</h1>
        <h2>Menampilkan Data dar Database</h2>
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

    
    <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Telepon</th>
                </thead>
                </tr>
                <?php
                            include "koneksi.php";
                            $query_mysql = mysqli_query($koneksi,"select * from admin");
                            $nomor = 1;
                            while ($data = mysqli_fetch_array($query_mysql)) {
                            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['id_admin']; ?></td>
                    <td><?php echo $data['nama_admin']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['nohp_admin']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                        <a href="hapus.php?id=<?php echo $data['id']; ?>" class="hapus">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
</body>
</html>