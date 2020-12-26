<?php
 include 'koneksi.php';
//  $id = $_POST['id'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $telp = $_POST['telp'];
 
 mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nama','$telp','$alamat')");

 header("location:index.php?pesan=input");
 ?>