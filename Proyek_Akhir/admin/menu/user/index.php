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
 </tr>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($connect,"select * from user where nama like '%".$cari."%'");    
 }else{
  $data = mysqli_query($connect,"select * from user");  
 }
 $no = 1;
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
  <td><?php echo $no++; ?></td>
  <td><?php echo $d['nama']; ?></td>
  <td><?php echo $d['username']; ?></td>
  <td><?php echo $d['password']; ?></td>
  <td><?php echo $d['email']; ?></td>
  <td><?php echo $d['no_hp']; ?></td>
  <td><?php echo $d['level']; ?></td>
  <td></td>
 </tr>
 <?php } ?>
</table>
