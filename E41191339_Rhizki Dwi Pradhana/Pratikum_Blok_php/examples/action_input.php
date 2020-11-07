<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO mahasiswa(nim, nama, jurusan, jenis_kelamin, alamat, telepon) VALUES(:nim,:nama,:jurusan,:jk,:alamat,:telepon)");
$sql->bindParam(':nim', $nim);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':jurusan', $jurusan);
$sql->bindParam(':jk', $jenis_kelamin);
$sql->bindParam(':alamat', $alamat);
$sql->bindParam(':telepon', $telepon);
$sql->execute(); // Eksekusi query insert

if($nim=="")
{
  // echo "NIM kosong belum diisi, ";
  echo "<script>alert('NIM Belum diisi');history.go(-1);</script>";
}
 
if($nama=="")
{
  echo "<script>alert('Nama Belum diisi');history.go(-1);</script>";
}
if($jurusan=="")
{
  echo "<script>alert('Jurusan Belum diisi');history.go(-1);</script>";
}
 
if($jenis_kelamin=="")
{
  echo "<script>alert('Jenis Kelamin Belum diisi');history.go(-1);</script>";
}
if($alamat=="")
{
  echo "<script>alert('Alamat Belum diisi');history.go(-1);</script>";
}
if($telepon=="")
{
  echo "<script>alert('No Telp Belum diisi');history.go(-1);</script>";
}
  else
{
 
/* cek input NIM apakah sudah ada nim yang digunakan */
   $pilih="select * from mahasiswa where nim='$nim'";
   $cek=mysqli_query($koneksi, $pilih);
 
   $jumlah_data = mysqli_num_rows($cek);
   if ($jumlah_data >= 1 ) 
   {
 
  echo "<script>alert('NIM yang sama sudah digunakan');history.go(-1);</script>";
    }
   else
{
 
// query untuk insert data mahasiswa
   $query="INSERT INTO mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',jk='$jenis_kelamin',alamat='$alamat',telepon='$telepon'";
  mysqli_query($koneksi, $query);
 
// echo " Input Data yang anda masukkan sukses berhasil";
// header("location:lihat_data.php");
 
echo "<script>alert('Data yang anda Input sukses');window.location='lihat_data.php'</script>";
    }
 }
?>