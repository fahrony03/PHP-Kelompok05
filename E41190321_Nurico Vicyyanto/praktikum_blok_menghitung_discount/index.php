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

  <!-- =======================================================
  * Template Name: OnePage - v2.1.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Hitung Discount</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <br><br><br><br><br><br><br>
  <div class="section-title">
    <div id="main-wrapper">
      <div id="main">
        <h1>Menghitung Diskon Barang</h1>
        <br />
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <form method="POST" action="">
              <table>
              <tr>
                  <td>Masukan Nama Barang :</td>
                  <td><input type="text" name="nama" required /></td>
                </tr>
                <tr>
                  <td>Masukan Harga Barang :</td>
                  <td><input type="text" name="bil1" required /></td>
                </tr>
                <tr>
                  <td>Jumlah Diskon(Tanpa%) :</td>
                  <td><input type="text" name="bil2" required /></td>
                </tr>
                <tr>
                  <td>
                    <label><br><br>
                      <input type="submit" name="Submit" value="Hitung" id="prn">
                    </label>
                    <label>
                      <input type="reset" name="reset" value="Batal" id="prn">
                    </label>
                    <label>
                      <a href="./">Hitung Ulang</a>
                    </label>
                  </td>
                  <td></td>
                </tr>
              </table>
            </form>
            <div id="hasil">
              <?php error_reporting (E_ALL ^ E_NOTICE);
                    $nama = $_POST['nama'];
                    $harga    =$_POST['bil1'];
                    $diskon    =$_POST['bil2'];
                    $nilai=($diskon/100)*$harga;
                    echo 'Nama Barang ';
                    echo $nama;
                    echo '<br>';
                    echo 'Nominal diskon ';
                    echo $diskon;echo'% dari ';
                    echo '<br>';
                    echo number_format($harga,2,",",".");
                    echo '<br>';
                    echo' adalah sebesar <u>';
                    echo number_format($nilai,2,",",".");
                    echo'</u>';
                ?>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

</body>

</html>