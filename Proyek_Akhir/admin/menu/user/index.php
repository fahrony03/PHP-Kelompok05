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
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
        <th>email</th>
        <th>No Hp</th>
        <th>Level</th>
        <th></th>
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
            <a href="edit.php?id=<?php echo $dt['id']; ?>" class="edit">Edit</a>
            <a href="hapus.php?id=<?php echo $dt['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>