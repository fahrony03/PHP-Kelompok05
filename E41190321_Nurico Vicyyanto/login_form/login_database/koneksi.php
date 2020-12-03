<?php
	$koneksi = mysqli_connect("localhost","root","","dblogin");

	if (mysqli_connect_error()) {
		echo "Koneksi database gagal :".mysqli_connect_error();
	}
?>