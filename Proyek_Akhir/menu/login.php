<?php
session_start();

require_once "function.php";

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    // cek password
    if (password_verify($password, $row["password"])) {
      $_SESSION["login"] = $username;
      header("Location:home.php");
      exit;
    }
  }
  $error  = true;
?>

<?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The King - Login</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body class=" bg-gradient-primary">

  <div class="container" style="padding-top: 10%; padding-left: 1%; width: 50%;">

    <!-- Outer Row -->
    <!-- <div class="row justify-content-center">

      <div class="col-lg-5"> -->

    <div class="row">
      <div class="col-lg-10 offset-1">
        <div class="card o-hidden border-0 shadow-lg bg-gradient-light">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Bro</h1>
                  </div>
                  <?php if (isset($error)) : ?>
                    <p style="color : red; font-style:italic">
                      username / password salah
                    </p>
                  <?php endif; ?>
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan username anda..." required="" autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" required placeholder="Masukkan password anda">
                    </div>
                    <div class="text-center">
                      <input type="submit" name="login" class="btn btn-user btn-primary btn-block" value="login"></input>
                    </div>
                    <div class="text-center">
                      <a href="register.php">Sign Up</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body><br><br><br><br><br><br><br><br>

<!-- Bootstrap core JavaScript-->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>