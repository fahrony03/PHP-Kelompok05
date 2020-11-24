<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Your Logo
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
      <ul class="nav">
          <li>
            <a href="./index.html">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icon.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Data Mahasiswa</p>
            </a>
          </li>
          <li>
            <a href="./map.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Input Mahasiswa</p>
            </a>
          </li>
          <li class="active ">
            <a href="./cari.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>Cari Mahasiswa</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Title</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="container">
            <h4>Menampilkan Data pada form berdasarkan pilihan Combo Box di PHP</h4>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                <div class="form-group">
                    <label for="sel1">Pilih Mahasiswa:</label>
                    <select class="form-control" name="nim">
                        <?php
                        include "koneksi.php";
                        //Perintah sql untuk menampilkan semua data pada tabel prodi
                        $sql = $pdo->prepare("select nim,nama from mahasiswa");
                        $sql->execute(); // Eksekusi query insert
                        $no=0;

                        // while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql    
                        //   echo "<tr>";    
                        //   echo "<td>".$data['nim']."</td>";
                        //   echo "<td>".$data['nama']."</td>";
                        //   echo "<td>".$data['prodi']."</td>";
                        //   echo "<td>".$data['jenis kelamin']."</td>";    
                        //   echo "<td>".$data['alamat']."</td>";       
                        //   echo "</tr>";
                        // }
                        while ($data = $sql->fetch($sql)) {
                            $no++;

                            $ket="";
                            if (isset($_GET['nim'])) {
                                $nim = trim($_GET['nim']);

                                if ($nim==$data['nim'])
                                {
                                    $ket="selected";
                                }
                            }
                            
                            ?>
                            <option <?php echo $ket; ?> value="<?php echo $data['nim'];?>"><?php echo $data['nim'];?> - <?php echo $data['nama'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Pilih">
                </div>
            </form>
            <h2>Input Data</h2>

            <?php

            if (isset($_GET['nim'])) {
                $nim=$_GET["nim"];
                $sql = $pdo->prepare("select * from mahasiswa where nim = $nim");
                // $sql->bindParam(':nim', $nim);
                // $sql->bindParam(':nama', $nama);
                // $sql->bindParam(':prodi', $prodi);
                // $sql->bindParam(':jeniskelamin', $jeniskelamin);
                // $sql->bindParam(':alamat', $alamat);
                $sql->execute(); // Eksekusi query insert
            }

            ?>

                <div class="form-group">
                    <label>nim:</label>
                    <input type="text" name="nim" value="<?php echo $data['nim']; ?>" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control"  required/>
                </div>

                <div class="form-group">
                    <label>Prodi:</label>
                    <input type="text" name="prodi" value="<?php echo $data['prodi']; ?>" class="form-control"  required/>
                </div>
                <div class="form-group">
                    <label for="sel1">Prodi:</label>
                    <select class="form-control" name="prodi">
                        <?php
                        include "koneksi.php";
                        //Perintah sql untuk menampilkan semua data pada tabel jurusan
                        $sql="select * from jurusan";

                        $hasil=mysqli_query($kon,$sql);
                        $no=0;
                        $jurusan=$data['jurusan'];
                        while ($ambil = mysqli_fetch_array($hasil)) {
                            $no++;

                            $ket="";
                            if (isset($_GET['nim'])) {

                                if ($jurusan==$ambil['kode_jurusan'])
                                {
                                    $ket="selected";
                                }
                            }
                            ?>
                            <option <?php echo $ket; ?> value="<?php echo $ambil['kode_jurusan'];?>"><?php echo $ambil['nama_jurusan'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Umur:</label>
                    <input type="number" name="umur" value="<?php echo $data['umur']; ?>" class="form-control"required/>
                </div>
        </div>
                  </div>
                </div>
              </div>
              <footer class="footer">
                <div class="container-fluid">
                  <div class="row">
                    <nav class="footer-nav">
                      <ul>
                        <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                        <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                        <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                      </ul>
                    </nav>
                    <div class="credits ml-auto">
                      <span class="copyright">
                        © 2020, made with <i class="fa fa-heart heart"></i> by Creative Tim
                      </span>
                    </div>
                  </div>
                </div>
              </footer>
            </div>
          </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>
