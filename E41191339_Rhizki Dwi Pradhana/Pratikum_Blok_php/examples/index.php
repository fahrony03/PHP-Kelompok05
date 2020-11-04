<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="bg-gradient-secondary">
<marquee bgcolor="blue" style="font-family:timesnewroman; font-size:20px; color:#ffffff;">SELAMAT DATANG</marquee>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 style="color : white;">LOG IN</h1>
                  </div>
                  <?php
                  session_start();
                  $username = 'rhizki';
                  $password = 'rhizkipradhana';
                  if (isset($_POST['submit'])) {
                      if ($_POST['username'] == $username && $_POST['password'] == $password){
                          //Membuat Session
                          $_SESSION["username"] = $username; 
                          echo "Anda Berhasil Login $username";
                          // Jika Ingin Pindah Ke Halaman Lain
                          header("Location: dashboard.php");  //Pindahkan Kehalaman Admin
                      } else {
                          // Tampilkan Pesan Error
                          display_login_form();
                          echo '<p>Username Atau Password Salah</p>';
                      }
                  }    
                  else { 
                      display_login_form();
                  }
                  function display_login_form(){ ?>
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
                      <div class="form-group">
                      <input type="nama" class="form-control form-control-user" name ="username" id="username" placeholder="Enter Email Address...">
                   </div>
                          <div class="form-group">
                            <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                          </div>
                      <input type="submit" name="submit" value="submit">
                      </form>    
                  <?php } ?>

                  <hr>
                  <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Login with Google
                  </a>
                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                  </a>
                  </form>
                  <hr>
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