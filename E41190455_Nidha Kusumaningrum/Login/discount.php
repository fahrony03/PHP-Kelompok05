<html>
<head>
    <title>Tutorial Cara Membuat Script PHP Hitung Diskon</title>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

    <style type="text/css">
        #hasil{width:500px;margin:0 auto;padding:5px;font-weight:bold;color:#f00;}
        body{padding:0;margin:0;font-family:arial;font-size:12px;}
        #main-wrapper{border:3px double #faa800;padding:5px;width:550px;margin:20px auto 0;}
        #main{text-align:left;padding:5px;background:#e8eef0;}
        table{font-size:12px;width:450px;}
        #prn{border:1px solid #b3ccf7;background:#c3d9ff;cursor:pointer;padding:2px 24px;}
        h1{font-size:18px;font-weight:bold;padding:10px 0;text-align:center;}
        #efri{font-size:11px;padding:5px 0 0;color:#0000ff;text-align:center;}red{font-weight:bold;color:#f00;}
    </style>
</head>
<body>
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Queendha Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">Home </a>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="discount.php">Discount</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Queendha</h1>
        <center>
  <div id="main-wrapper">
        <div id="main">
            <h1>Hitung Diskon dengan PHP</h1>
            <br />
            <form method="POST" action="">                
                <table>
                    <tr>
                        <td>Masukan Harga</td>
                        <td><input type="text" name="bil1" required/></td>
                    </tr>
                    <tr>
                        <td>Masukan Diskon (Tanpa Tanda %)</td>
                        <td><input type="text" name="bil2" required/></td>
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
                             <a href="dashboard.php">Hitung Ulang</a>
                        </label>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </form>
            <div id="hasil">
                <?php error_reporting (E_ALL ^ E_NOTICE);
                    $harga    =$_POST['bil1'];
                    $diskon    =$_POST['bil2'];
                    
                    $nilai=($diskon/100)*$harga;
                    echo 'Nominal diskon ';echo $diskon;echo'% dari '; echo number_format($harga,2,",","."); echo' adalah sebesar <u>';echo number_format($nilai,2,",",".");echo'</u>';
                ?>
            </div>
        </div>
    </div>
    </center>
</body>
</html>