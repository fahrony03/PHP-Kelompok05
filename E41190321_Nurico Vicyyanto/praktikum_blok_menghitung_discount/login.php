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

<div class="card">
  <div class="card-header">
    Login
  </div>
  <div class="card-body">

  
  <?php
session_start();
$username = 'nurico';
$password = 'nurico';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["username"] = $username; 
        header("Location: berhasil\berhasil.php");
        /*Jika Ingin Pindah Ke Halaman Lain*/
        // header("Location: admin.php"); //Pindahkan Kehalaman Admin
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
    <label for="username">username</label>
    <br>
    <input type="text" class="form-control" id="username" name="username">
    <br>
    <label for="password">password</label>
    <br>
    <input type="password" class="form-control" id="password" name="password">
    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
    <br><br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>    
<?php } ?>
  </div>
</div>

</body>

</html>

