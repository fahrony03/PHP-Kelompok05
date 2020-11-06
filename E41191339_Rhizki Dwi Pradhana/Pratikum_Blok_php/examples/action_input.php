<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO mahasiswa(nim, nama, jenis_kelamin, telp, alamat) VALUES(:nim,:nama,:jk,:telp,:alamat)");
$sql->bindParam(':nim', $nim);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':jk', $jenis_kelamin);
$sql->bindParam(':alamat', $alamat);
$sql->bindParam(':telp', $telp);
$sql->execute(); // Eksekusi query insert

if($sql){ // Cek jika proses simpan ke database sukses atau tidak  
// Jika Sukses, Lakukan :  
header("location: lihat_data.php"); // Redirect ke  halaman lihat_data.php
// Jika Gagal, Lakukan :  
echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
echo "<br><a href='tambah_data.php'>Kembali Ke Form</a>";
}
?>