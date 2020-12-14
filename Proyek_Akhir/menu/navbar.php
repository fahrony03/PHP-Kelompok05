<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
    <title>Si PEKA</title>
</head>

<body>
                    <?php
                    session_start();
                            if( ! isset($_SESSION['username'])){
                            header("location: auth/login.php");
                            }
                    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant fixed-top">
        </script>
        <div class="container">
            <a class="navbar-brand" href="home.php">
                <img src="../img/logo.png" width="60" height="60" class="rounded-circle">
                Si PEKA
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="home.php">Home<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="belanja/belanja.php">Belanja</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="dokumentasi/detail_dokumentasi.php">Dokumentasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="contact/detailcontact.php">Contact</a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="more/penanaman.php">Penanaman</a>
                            <a class="dropdown-item" href="more/pengelolaan.php">Pengelolaan</a>
                            <a class="dropdown-item" href="more/pemasaran.php">Pemasaran</a>
                        </div>
                    </li>

                    <li class="nav-item active dropdown">
                    <a class="nav-link" style="color:white;padding-top:10px; href="#" data-toggle="dropdown"><?php echo $_SESSION['username']; ?><i class="fa fa-user fa-lg"></i></a>
                        <ul class="dropdown-menu settings-menu dropdown-menu-right">
                            <a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a>
                            <li><a class="dropdown-item" href="profil.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                        </ul>

                    
    </nav>
    <br><br><br>

</body>

</html>