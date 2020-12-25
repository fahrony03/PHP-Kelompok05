<?php
    include 'koneksi.php';
    if(!isset($_GET['id'])){
        die("Error: ID Tidak Dimasukkan");
    }
    $query = $db->prepare("SELECT * FROM `user` WHERE id = :id");
    $query->bindParam(":id", $_GET['id']);
    $query->execute();
    if($query->rowCount() == 0){
        die("Error: ID Tidak Ditemukan");
    }else{
        $data = $query->fetch();
    }
    if(isset($_POST['submit'])){
        $nama = htmlentities($_POST['nama']);
        $telp = htmlentities($_POST['telp']);
        $alamat = htmlentities($_POST['alamat']);
        $query = $db->prepare("UPDATE `user` SET `nama`=:nama,`alamat`=:alamat,`telp`=:telp WHERE id=:id");
        $query->bindParam(":nama", $nama);
        $query->bindParam(":telp", $telp);
        $query->bindParam(":alamat", $alamat);
        $query->bindParam(":id", $_GET['id']);
        $query->execute();
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <style>
    .tombol{
      text-decoration: none;
      background-color: #eeeeee;
      color: black;
      padding: 2px 6px 2px 6px;
      border: 1px solid #c2c2c2;
      border-radius:2px;
	}
	</style>
 <title>CRUD PDO</title>
    <meta charset="utf-8">
    </head>
 <body bgcolor="#e6ecff">
    <h2><p align="center">EDIT DATA</p></h2>
    <form method="post">
 <table width="555" border="0" border-radius: 20px; cellpadding="0" cellspacing="0" bgcolor="	 #adad85" align="center">
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">ID</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="id" value="<?php echo $data['id'] ?>" readonly="readonly"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Telp</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="telp" type="text" size="50" value="<?php echo $data['telp'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
  <input name="alamat" type="text" size="50" value="<?php echo $data['alamat'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="Edit"> <a href="index.php" class="tombol">Kembali</a></td>
    
  </tr>
  </table>
  </form>