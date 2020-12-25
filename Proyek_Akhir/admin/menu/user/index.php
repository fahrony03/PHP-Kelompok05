<?php 
include 'koneksi.php';
?>

<h3>Form Pencarian</h3>

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
 while($dat = mysqli_fetch_array($data)){
 ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $dat['nama']; ?></td>
        <td><?php echo $dat['username']; ?></td>
        <td><?php echo $dat['password']; ?></td>
        <td><?php echo $dat['email']; ?></td>
        <td><?php echo $dat['no_hp']; ?></td>
        <td><?php echo $dat['level']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $dat['id']; ?>" class="edit">Edit</a>
            <a href="hapus.php?id=<?php echo $dat['id']; ?>" class="hapus">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>