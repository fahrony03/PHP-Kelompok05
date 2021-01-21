<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Form Components - Si-PEKA Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/ckeditor/ckeditor.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  </head>
<body style="background-color: rgb(230, 240, 193);">
<div class="container">
	<br>
	<h1>Management Contact</h1>
	<table class="table table-striped table-light">
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
	<a class="btn btn-danger" href="../../index.php" role="button">Kembali</a>
	</body>
</html>

  </form>
  </div>
</body>
</html>
