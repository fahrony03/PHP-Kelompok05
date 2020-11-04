<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Now UI Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
  </head>
  

<body class="bg-gradient-primary">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <!-- <div class="col-xl-10 col-lg-12 col-md-9"> -->

  
     
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
              <div class="col-lg-6">
                <div class="p-5"  style="" >
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                  </div>
                    <?php
                  session_start();
                  $username = 'fahrony';
                  $password = 'bondowoso03';
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
                          echo '<p>Username Atau Password Tidak Benar</p>';
                      }
                  }    
                  else { 
                      display_login_form();
                  }
                  function display_login_form(){ ?>
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
                      <div class="form-group">
                      <input type="nama" class="form-control form-control-user" name ="username" id="username" placeholder="Masukkan Username">
                   </div>
                          <div class="form-group">
                            <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Masukkan Password">
                          </div>
                          <div class="btn btn-google btn-user btn-block">
                      <button style = " background-hover:#f8f9fa; background-color : #888888; color : white; border: 0px solid; font-size: 16px" type="submit" name="submit">Log In</button>
                      
                      </div>
                      </form>    
                  <?php } ?>
                    <a href="#" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="#" class="btn btn-facebook btn-user btn-block">
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
