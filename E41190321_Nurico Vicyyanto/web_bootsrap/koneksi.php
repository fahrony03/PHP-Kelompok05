<?php
$koneksi = mysqli_connect("localhost","root","","dblogin");

if(mysqli_connect_error()){
    echo "Koneksi gagal :" . mysqli_connect_error();
}
?>