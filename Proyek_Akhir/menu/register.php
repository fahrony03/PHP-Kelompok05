<?php
require 'function.php';


if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script> alert('user baru berhasil ditambahkan!');</script>";
  } else {
    echo mysqli_error($conn);
  }
}

$carikode = mysqli_query($conn, "SELECT id_admin FROM admin ") or die(mysqli_error($id_admin));
// menjadikannya array
$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);
// jika $datakode
if ($datakode) {
  // membuat variabel baru untuk mengambil kode barang mulai dari 1
  $nilaikode = substr($jumlah_data [0], 1);
  // menjadikan $nilaikode ( int )
  $kode = (int) $nilaikode;
  // setiap $kode di tambah 1
  $kode = $jumlah_data + 1;
  // hasil untuk menambahkan kode
  // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
  // atau angka sebelum $kode
  $kode_otomatis = "ADM" . str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {
  $kode_otomatis = "ADM001";
}

?>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link rel="stylesheet"  href="../css/register.css">
</head>
<body>
  <div class="container">
    <h1>Registration Form</h1>
  </div>
  <div class="main">
    <form method="POST">
      <div id="name">
        <h2 class="name">
          Nama </h2>
        <input class="firstname" type="text" name="first_name"><br>
        <label class="firstlabel">Nama Depan</label>
        <input class="lastname" type="text" name="last_name"><br>
        <label class="lastlabel">Nama Belakang</label>
      </div>
      <h2 class="name">Alamat </h2>
      <input class="alamat" type="text" name="alamat">
      <h2 class="name">No Telp</h2>
      <input class="notelp" type="text" id="notelp" name="notelp">
      <h2 class="name">Email</h2>
      <input class="email" type="email" name="email">
      <h2 class="name">Password</h2>
          <input class="password" type="password" id="password" name="password">
      <h2 class="name">Ulang Password</h2>
          <input class="password" type="password" id="password2" name="passwor2">
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>