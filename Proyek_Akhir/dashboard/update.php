<?php
include "koneksi.php";
$no = $_POST['no'];
$gambar = $_POST['gambar'];
$title = $_POST['title'];
$content = $_POST['content'];

mysqli_query($koneksi, "update informasi set gambar='$gambar', title='$title', content='$content' where no='$no'");

header("location:index.php?pesan=update");
?>