<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$level = $_POST['level'];

mysqli_query($connect, "update user set nama='$nama', username='$username', password='$password', email='$email', no_hp='$no_hp', level='$level' where id='$id'");

header("location:index.php?pesan=update");
?>