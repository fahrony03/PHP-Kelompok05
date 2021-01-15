<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat CRUD dengan PHP dan MYSQL - Menampilkan data dari Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h2>DATA USER SIPEKA</h2>
    </div>
    <br>

    <a href="index.php">Lihat Semua Data</a>

    <br>

    <h3>Edit Data</h3>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($connect,"SELECT * FROM user WHERE id = '$id'");
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="hidden" name="id" value="<?php echo $data['id']?>">
                    <input type="text" name="nama" value="<?php echo $data['nama']?>">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="alamat" value="<?php echo $data['username']?>">
                </td>
            </tr>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="text" name="no_hp" value="<?php echo $data['no']?>">
                </td>
            </tr>
            <tr>
            <tr>
                <td>Level</td>
                <td><input type="text" name="level" value="<?php echo $data['level']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Simpan">
                 </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>

</body>
</html>