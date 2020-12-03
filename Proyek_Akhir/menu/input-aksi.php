<?php
include 'koneksi.php';
$id_admin = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nohp_admin = $_POST['nohp_admin'];
mysqli_query($koneksi, "INSERT INTO admin VALUES ('','$id_admin','$nama_admin','$username','$passowrd','$email','$nohp_admin')");

header("location:index.php?pesan=input");
?>