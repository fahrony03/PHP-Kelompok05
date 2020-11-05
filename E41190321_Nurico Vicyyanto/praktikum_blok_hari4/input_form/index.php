<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OnePage Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <!-- Nested Row within Card Body -->
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Input</h1>
                  </div>

                    <form action="" method="post">
                    <label for="nim">NIM</label>
                    <br>
                    <input type="text" class="form-control" id="nim" name="nim">
                    <br>
                    <label for="username">Nama</label>
                    <br>
                    <input type="text" class="form-control" id="nama" name="namamahasiswa">
                    <br>
                    <label for="username">Alamat</label>
                    <br>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                    <br>
                    <label for="no">No Telepon</label>
                    <br>
                    <input type="text" class="form-control" id="no" name="no">
                    <br>
                    <label for="jenis_kelamin">No Telepon</label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-laki">
                      <label class="form-check-label" for="inlineRadio1">Laki laki</label>
                    </div>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
                      <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
                    <hr>
                    <?php
                        error_reporting(E_ALL ^ E_NOTICE);
                        include "koneksi.php";
                        $nim  = $_REQUEST['nim'];
                        $nama  = $_REQUEST['namamahasiswa'];
                        $alamat  = $_REQUEST['alamat'];
                        $no  = $_REQUEST['no'];
                        $jenis_kelamin  = $_REQUEST['jenis_kelamin'];
                        $mysqli  = "INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `no`, `jenis_kelamin`) VALUES ('$nim', '$nama', '$alamat', '$no', '$jenis_kelamin')";
                        $result  = mysqli_query($conn, $mysqli);
                        if ($result) {
                            header("location: data.php");
                            echo '<script type="text/javascript">';
                            echo ' alert("Input berhasil")';  //not showing an alert box.
                            echo '</script>';
                        } else {
                            echo "Input gagal";
                        }
                        mysqli_close($conn);
                    ?>
                  </form>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                </div>
              </div>
            </div>
        </div>
        </div>
        
  
      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>