<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Data User</title>
  </head>
  <body style="background-color: rgb(230, 240, 193);">
<div class="container">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <?php 
include 'koneksi.php';
?>

<h3>Form Pencarian</h3>
<?php
    if(isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "Data berhasil di input";
        } elseif ($pesan == "update") {
            echo "Data berhasil di update";
        } elseif ($pesan == "hapus") {
            echo "Data berhasil di hapus";
        }
    }
    ?>
<form action="index.php" method="get">
    <label>Cari :</label>
    <div class="form-row">
    <div class="form-group col-md-6">
    <input type="text" class="form-control" name="cari">
    </div>
    <div class="col-auto">
    <br>
    <input type="submit" class="btn btn-success mb-2" value="Cari">
    </div>
</form>

<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table class="table table-bordered table-light">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
        <th>email</th>
        <th>No Hp</th>
        <th>Level</th>
        <th>                <a
                        href="hapussemua.php?delete" class="btn btn-danger" 
                        onclick="return confirm('Apakah Anda yakin ingin mengapus semua data Produk?')">
                        Hapus Semua
                    </a></th>
    </tr>
    <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($connect,"select * from user where nama like '%".$cari."%'");    
 }else{
  $data = mysqli_query($connect,"select * from user");  
 }
 $no = 1;
 while($dt = mysqli_fetch_array($data)){
 ?>


    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $dt['nama']; ?></td>
        <td><?php echo $dt['username']; ?></td>
        <td><?php echo $dt['password']; ?></td>
        <td><?php echo $dt['email']; ?></td>
        <td><?php echo $dt['no_hp']; ?></td>
        <td><?php echo $dt['level']; ?></td>
        <td>
        <a
                        href="edit.php?id=<?= $dt['id']; ?>" class="btn btn-outline-warning  " 
                        onclick="return confirm('Apakah Anda yakin ingin mengedit item ini?')">
                        Edit
                    </a>
                      <a
                        href="hapus.php?delete=<?= $dt['id']; ?>" class="btn btn-outline-danger" 
                        onclick="return confirm('Apakah Anda yakin ingin mengapus item ini?')">
                        Hapus
                    </a>
        </td>
    </tr>
    <?php } ?>
</table>
<a class="btn btn-success" href="../../index.php" role="button">Kembali</a>

</div>
  </body>
</html>