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
<!DOCTYPE html>
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
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
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
          <li class="active ">
            <a href="./map.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Input Mahasiswa</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
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
            <a class="navbar-brand" href="javascript:;">INPUT MAHASISWA</a>
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
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
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
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
            <form method="post">    
                            <table cellpadding="8">      
                            <tr >        
                                <td>NIM</td>        
                                <td><input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" type="text" name="nim"></td>      
                            </tr>
                            <tr>        
                                <td>Nama</td>        
                                <td><input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" type="text" name="namamahasiswa"></td>      
                            </tr>     
                            <tr>
                                <td>Prodi</td>        
                                <td>                   
                                   <div class="form-group">
                                                <select class="form-control" name="prodi">
                                                    <option value="D(IV)-Teknik Informatika">D(IV)-Teknik Informatika</option>
                                                    <option value="D(III)-Manajemen Informatika">D(III)-Manajemen Informatika</option>
                                                    <option value="D(III)-Teknik Komputer">D(III)-Teknik Komputer</option>
                                                </select>
                                            </div></td>      
                            </tr>  
                            <tr>        
                                <td>Jenis Kelamin :</td>        
                                <td>
                                <input type="radio" name="jeniskelamin" 
                                value="Laki-laki"> Laki-laki        
                                <input type="radio" name="jeniskelamin" 
                                value="Perempuan"> Perempuan        
                                </td>      
                            </tr>      
                            <tr>
                                <td>Alamat</td>        
                                <td><textarea class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="alamat"></textarea></td>       
                            </tr>      
                          
                        </table>    
                        <hr>    
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                                <a href="icon.php"><input class="btn btn-primary type="button" 
                                value="Tampil Tabel"></a>  
                        <?php
                        // Load file koneksi.php
                        include "koneksi.php";
                        // Ambil Data yang Dikirim dari Form
                        $nim = @$_POST['nim'];
                        $nama = @$_POST['namamahasiswa'];
                        $prodi = @$_POST['prodi'];
                        $jeniskelamin = @$_POST['jeniskelamin'];
                        $alamat = @$_POST['alamat'];
                        // Proses simpan ke Database
                        $sql = $pdo->prepare("INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `jenis kelamin`, `alamat`) VALUES (:nim, :nama, :prodi, :jeniskelamin, :alamat)");
                        $sql->bindParam(':nim', $nim);
                        $sql->bindParam(':nama', $nama);
                        $sql->bindParam(':prodi', $prodi);
                        $sql->bindParam(':jeniskelamin', $jeniskelamin);
                        $sql->bindParam(':alamat', $alamat);
                        $sql->execute(); // Eksekusi query insert

                        if ($sql) {
                            echo '<script type="text/javascript">';
                            echo ' alert("Input berhasil")';  //not showing an alert box.
                            echo '</script>';

                        } else {
                            echo "Input gagal";
                        echo "<br><a href='icon.php'>Kembali Ke Form</a>";
                        }
                      ?>
                  </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      demo.initGoogleMaps();
    });
  </script>
</body>

</html>