<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Si Peka - Forgot Password</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <script type="text/javascript">
    function valid()
    {
      if(document.forgot.password.value!= document.forgot.confirmpassword.value)
      {
        alert("Password and Confirm Password Field do not match  !!");
        document.forgot.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>



</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                <img class="col-lg-12 d-none d-lg-block bg-login-image" style="padding-top: 6%;" src="../img/petanikotak.jpg" alt="">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, things happen. Just enter the correct email address, then update the password!</p>
                  </div>

                  <?php session_start();
                      error_reporting(0);
                      include("../config.php");
                      if(isset($_POST['submit'])) {
                        $_SESSION['submit']='';
                      }

                      if(isset($_POST['change']))
                      {
                      $email=$_POST['email'];
                      $password=$_POST['password'];
                      $query=mysqli_query($con,"SELECT * FROM user WHERE email='$email'");
                      $num=mysqli_fetch_array($query);
                      if($num>0)
                      {
                        mysqli_query($con,"update user set password='$password' WHERE email='$email'");
                        $msg="Password Changed Successfully";
                      }
                      else
                      {
                        $msg="Invalid email";
                      }
                      }
                      ?>

                        <section class="material-half-bg">
                          <div class="cover">
                          </div>
                          
                        </section>
                        <section class="login-content">
                          <div class="login-box">
                          <p style="padding-left:20%; color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></p>
                          
                          <p style="padding-left:20%; color:green">
                            <?php if($msg){
                              echo htmlentities($msg);
                            }?></p>
                            
                            <form class="login-form" name="forgot" method="post">
                        <div class="form-group">
                          <input class="form-control" type="email" aria-describedby="emailHelp" name="email" placeholder="email" required="" autofocus>
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="password" placeholder="New Password" id="password" name="password">
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword">
                        </div>
                        <div class="form-group btn-container">
                          <button type="submit" name="change" onclick="return valid();" class="btn btn-user btn-success btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>Reset Password</button>
                        </div>
                        <a href="login.php" class="btn btn-google btn-danger btn-block">
                      <i class="fab fa-google fa-fw"></i> Back
                    </a>
                      </form>
                    </div>
                  </section>
                  

                  <!-- Essential javascripts for application to work-->
                  <script src="login/js/jquery-3.2.1.min.js"></script>
                  <script src="login/js/popper.min.js"></script>
                  <script src="login/js/bootstrap.min.js"></script>
                  <script src="login/js/main.js"></script>
                  <!-- The javascript plugin to display page loading on top-->
                  <script src="login/js/plugins/pace.min.js"></script>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login.php">Already have an account? Login!</a>
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
