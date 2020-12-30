<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Mahasiswa</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Quendha Univercity</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ganti Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form-daftar.php">Tambah Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Quendha</h1>
        <div class="list-group">
          <a href="index.php" class="list-group-item">Home</a>
          <a href="#" class="list-group-item">Dosen</a>
          <a href="#" class="list-group-item">Mahasiswa</a>
          <a href="#" class="list-group-item">User</a>
          <a href="list-siswa.php" class="list-group-item active">cek Data</a>
        </div>
        </div>
        <div class="col-lg-9">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">     
      <div>
	<header>
		<h3>Formulir Edit Siswa</h3>
	</header>
	<form action="proses-edit.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		<div>
			<label for="nama">Nama: </label>
			<input type="text" class="form-control form-control-user"  name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
		</div>
		<div class="form-group>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat" require  rows="4" class="form-control"> <?php echo $siswa['alamat'] ?></textarea>
		</div>
			<label for="jenis_kelamin">Jenis Kelamin: </label> 
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<div div class="form-group">
		<div class="form-check form-check-inline">
			<label class="form-check-label" ><input type="radio" class="form-check-input" name="jenis_kelamin"  value="laki-laki"<?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
			</div>
			<div class="form-check form-check-inline" class="form-check-label" >
			<label><input type="radio" class="form-check-input"name="jenis_kelamin"  value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
		</div>
		</div>
		<div >
    <label for="agama">Agama: </label>
			<?php $agama = $siswa['agama']; ?>
			<select class="form-control name="agama">
				<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
				<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
				<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
				<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
				<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
			</select>
		</p>
		<p>
			<label for="jurusan">Sekolah Asal: </label>
			<input type="text" class="form-control form-control-user" name="jurusan" placeholder="nama sekolah" value="<?php echo $siswa['jurusan'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	</div>
</div>
</div>    
</div>
	</div>
        <!-- /.row -->


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Quendha Univercity 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
