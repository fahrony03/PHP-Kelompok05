<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$no_hp = $_POST['no'];
$level = $_POST['level'];

mysqli_query($connect, "update user set nama='$nama', username='$username', no_hp='$no', level='$level' where id='$id'");

header("location:index.php?pesan=update");
?>