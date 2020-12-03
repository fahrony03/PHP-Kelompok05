<?php 
	session_start();
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password']; 
	$querySql = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username'");
	$data = mysqli_fetch_array($querySql);
	if ($username == $data['username']) {
		if ($password == $data['password']) {
			header("location:index.php?pesan=berhasil");
		} else {
			header("location:logindatabase.php?pesan=passwordsalah");
		}
	}else{
		header("location:logindatabase.php?pesan=emailsalah");
	}
 ?>