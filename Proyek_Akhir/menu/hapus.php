<?php
include 'koneksi.php';
$id = $_GET['id_admin'];
mysqli_query($koneksi,"delete from user where id_admin='$id_admin'");

header("location:index.php?pesan=hapus");
?>