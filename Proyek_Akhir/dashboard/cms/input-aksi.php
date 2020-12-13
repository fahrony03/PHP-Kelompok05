<?php
 include 'koneksi.php';
 $gambar = $_POST['gambar'];
 $title = $_POST['title'];
 $content = $_POST['content'];
 
 mysqli_query($koneksi, "insert into informasi values ('','$gambar','$alamat','$content')");

 header("location:index.php?pesan=input");
 ?>