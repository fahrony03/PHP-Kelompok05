<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

// query SQL untuk insert data
$query="INSERT INTO dosen (nik,nama,jenis_kelamin,jabatan,alamat) values ('$nik','$nama','$jk','$jabatan','$alamat')";

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
header("location:form_dosen.php");
?>