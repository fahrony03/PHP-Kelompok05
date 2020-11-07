<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgllahir = $_POST['tgllahir'];
$jk = $_POST['jk'];
$jr = $_POST['jurusan'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];

// query SQL untuk insert data
$query="INSERT INTO tb_mahasiswa (nim,nama,tgl_lahir,jenis_kelamin,jurusan,prodi,alamat) values ('$nim','$nama','$tgllahir','$jk','$jr','$prodi','$alamat')";

// mysqli_query($koneksi, $query);

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil insert data";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

// mengalihkan ke halaman mahasiswa.php
header("location:form_mahasiswa.php");
?>