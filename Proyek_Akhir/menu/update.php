<?php
include "koneksi.php";
$id_admin = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nohp_admin = $_POST['nohp_admin'];

mysqli_query($koneksi, "update user set nama='$id_admin', nama_admin='$nama_admin', username='$username',
password='$password', email='$email', nohp_admin='$nohp_admin', where id='$id'");

header("location:index.php?pesan=update");
?>