<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "update user set nama='$nama', alamat='$alamat', telp='$telp' where id='$id'");

header("location:index.php?pesan=update");
?>