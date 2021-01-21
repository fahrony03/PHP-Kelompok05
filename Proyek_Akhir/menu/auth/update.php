<?php
include "koneksi.php";
$id = $data['id'];
$nama = $data['nama'];
$jk = $data['jenis_kelamin'];
$agama = $data['agama'];                           
$alamat = $data['alamat'];                           
$email = $data['email'];
$hp = $data['no_hp'];
$lv = $data['level'];

mysqli_query($koneksi, "update user set nama='$nama', jenis_kelamin='$jk', agama='$agama' alamat='$alamat', email='$email', no_hp='$hp', level='$lv' where id='$id'");

header("location:index.php?pesan=update");
?>