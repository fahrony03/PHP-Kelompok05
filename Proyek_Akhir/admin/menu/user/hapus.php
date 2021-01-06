<?php
include 'koneksi.php';
$kode_user = $_GET['kode_user'];
mysqli_query($connect,"delete from user where id='$kode_user'");

header("location:index.php?pesan=hapus");
?>