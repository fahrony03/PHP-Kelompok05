<?php include("koneksi.php"); ?>


<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Mahasiswa</title>	
	<br>
	
	<table border="3">
	<thead>
		<tr>
			<th>nama</th>
			<th>alamat</th>
			<th>no</th>
			<th>komentar</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM kontak";
		$query = mysqli_query($db, $sql);
		
		while($kontak = mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td>".$kontak['nama']."</td>";
			echo "<td>".$kontak['alamat']."</td>";
			echo "<td>".$kontak['no']."</td>";
			echo "<td>".$kontak['komentar']."</td>";

			echo "<td>";
			echo "<a href='hapus.php?no=".$kontak['no']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
