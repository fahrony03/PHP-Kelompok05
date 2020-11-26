<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjakaan = $_POST['pekerjaan'];

mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nama','$alamat','$pekerjaan')");

header("location:index.php?pesan=input");
?>