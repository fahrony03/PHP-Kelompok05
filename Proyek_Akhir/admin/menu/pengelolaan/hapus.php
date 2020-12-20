<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connect,"delete from pengelolaan where id='$id'");

header("location:index.php?pesan=hapus"); 