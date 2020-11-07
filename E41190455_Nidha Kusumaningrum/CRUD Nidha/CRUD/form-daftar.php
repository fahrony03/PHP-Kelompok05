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
            <a class="nav-link active" href="form-daftar.php">Tambah Mahasiswa</a>
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
          <a href="#" class="list-group-item active" >Mahasiswa</a>
          <a href="#" class="list-group-item">User</a>
          <a href="list-siswa.php" class="list-group-item">cek Data</a>
        </div>
        </div>
        <div class="col-lg-9">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">     
      <div>
	<header>
		<h3>Formulir Pendaftaran Tambah Mahasiswa</h3>
	</header>
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		<div>
			<label for="nama">Nama: </label>
			<input type="text" class="form-control form-control-user"  name="nama" placeholder="nama lengkap" 
      required oninvalid="this.setCustomValidity('data tidak boleh kosong')/>
		</div>
		<div class="form-group>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat" require  rows="4" class="form-control"> </textarea>
		</div>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<div div class="form-group">
		<div class="form-check form-check-inline">
			<label class="form-check-label" ><input type="radio" class="form-check-input" name="jenis_kelamin"  value="laki-laki"> Laki-laki</label>
			</div>
			<div class="form-check form-check-inline" class="form-check-label" >
			<label><input type="radio" class="form-check-input"name="jenis_kelamin"  value="perempuan"> Perempuan</label>
		</div>
		</div>
		<div >
			<label for="agama">Agama: </label>
			<select class="form-control" name="agama">
				<option >Islam</option>
				<option >Kristen</option>
				<option >Hindu</option>
				<option >Budha</option>
				<option >Khong Hu cu</option>
			</select>
		</div>
		<div>
			<label for="sekolah_asal">Jurusan: </label>
			<input type="text" class="form-control form-control-user" name="jurusan" placeholder="Jurusan"/>
		</div>
		<div> <br>
		<div>
			<input type="submit" value="Daftar" name="daftar" />
		</div>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
