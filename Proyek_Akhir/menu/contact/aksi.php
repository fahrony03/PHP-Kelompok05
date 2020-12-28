<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no'];
	$komentar = $_POST['komentar'];
	
	// buat query
	$sql = "INSERT INTO kontak (nama, alamat, no, komentar) VALUE ('$nama', '$alamat', '$no', '$komentar')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: detail_contact.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>

    //include "koneksi.php";
   // $nama  = $_POST['nama'];
    //$alamat  = $_POST['alamat'];
    //$no  = $_POST['no'];
    //$komentar  = $_POST['komentar'];
    
    //mysqli_query($koneksi,"insert into user values ('','$nama','$alamat','$no','komentar')");
    //$result  = mysqli_query($koneksi, $mysqli);

