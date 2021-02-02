<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(230, 240, 193);">
<div class="container">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <?php 
include 'koneksi.php';
?>

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
                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']?>">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" class="form-control" value="<?php echo $data['username']?>">
                </td>
            </tr>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" class="form-control" value="<?php echo $data['password']?>">
                </td>
            </tr>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" class="form-control" value="<?php echo $data['email']?>">
                </td>
            </tr>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="text" name="no_hp" class="form-control" value="<?php echo $data['no_hp']?>"> 
                </td>
            </tr>
            <tr>
            <tr>
                <td>Level</td>
                <td><input type="text" name="level" class="form-control" value="<?php echo $data['level']?>">
                </td>
            </tr>
            <tr>
                <td>
                <button type="submit" class="btn btn-success">Save</button>
                <a class="btn btn-danger" href="index.php" role="button">Kembali</a>
                 </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>

</body>
</html>

