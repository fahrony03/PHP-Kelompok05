<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $id = htmlentities($_POST['id']);
        $nama = htmlentities($_POST['nama']);
        $telp = htmlentities($_POST['telp']);
        $alamat = htmlentities($_POST['alamat']);
        $query = $db->prepare("INSERT INTO `user`(`id`,`nama`, `telp`, `alamat`)
        VALUES (:id,:nama,:telp,:telp)");
        $query->bindParam(":id", $id);
        $query->bindParam(":nama", $nama);
        $query->bindParam(":telp", $telp);
        $query->bindParam(":alamat", $alamat);
        $query->execute();
        header("location: index.php");
    }
?><!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8">
  <title>CRUD PDO</title>
    </head>
<body bgcolor=" #e6ecff">
<h2><p align="center">TAMBAH DATA</p></h2>
<form method="POST">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#b8b894">
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">ID</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="id" type="text" size="10">
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
    <td height="27" align="right" valign="middle">Telp</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="telp" type="text" size="50">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="alamat">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="TAMBAH"></td>
  </tr>
</table>
</form>
</body>
</html>