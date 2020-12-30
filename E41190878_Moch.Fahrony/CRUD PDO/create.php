<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $nim = htmlentities($_POST['nim']);
  $nama = htmlentities($_POST['nama']);
        $alamat = htmlentities($_POST['alamat']);
        $kelas = htmlentities($_POST['kelas']);
        $query = $db->prepare("INSERT INTO `tbl_mahasiswa`(`nim`,`nama`, `alamat`, `kelas`)
        VALUES (:nim,:nama,:alamat,:kelas)");
  $query->bindParam(":nim", $nim);
        $query->bindParam(":nama", $nama);
        $query->bindParam(":alamat", $alamat);
        $query->bindParam(":kelas", $kelas);
        $query->execute();
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8">
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>CRUD PDO</title>
    </head>
<body>
   <!-- Outer Row -->
   <div class="row justify-content-center">

<div class="col-xl-10 col-lg-12 col-md-9 mb-5">

    <div class="card o-hidden border-0 shadow-lg my-2">
    <div class="card-body p-3">

        <div>
            <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-2">TAMBAH DATA</h1>
            </div>
                <div class="post-content">
            <form method="post">
            <table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
              <tr>
                <td width="189" height="20"> </td>
                <td width="26"> </td>
                <td width="331"> </td>
              </tr>
              <tr>
                <td height="27" align="right" valign="middle">NIM</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                  <input name="nim" type="text" size="10">
                </label></td>
              </tr>
              <tr>
                <td height="27" align="right" valign="middle">Nama</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                  <input type="text" name="nama">
                </label></td>
              </tr>
              <tr>
                <td height="27" align="right" valign="middle">Alamat</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                  <input name="alamat" type="text" size="50">
                </label></td>
              </tr>
              <tr>
                <td height="27" align="right" valign="middle">Kelas</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                  <select name="kelas">
                <option selected="selected">--Pilih--</option>
              <option>A</option>
              <option>B</option>
              <option>C</option>
              <option>D</option>
              <option>E</option>
              <option>F</option>
                  </select>
                </label></td>
              </tr>
              <tr>
                <td height="42"> </td>
                <td> </td>
                <td><input type="submit" name="submit" value="TAMBAH">   <a href="index.php" class="tombol">Kembali</a></td>
              </tr>
          </table>
      </form>
                </div>
            </div>
        </div>
    </div>
    </div>
  </body>
</html>