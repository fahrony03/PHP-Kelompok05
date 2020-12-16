<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connect,"delete from penanaman where id='$id'");

header("location:index.php?pesan=hapus"); 