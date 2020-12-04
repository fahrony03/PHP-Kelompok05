<?php
$koneksi = mysqli_connect("localhost","root","","dbpeka");

if(mysqli_connect_error()){
    echo "Koneksi database gagal :" . mysqli_connect_error();
}
?>
