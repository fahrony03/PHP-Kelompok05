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

    <link rel="stylesheet" href="style.css">
    <title>Si PEKA</title>
</head>

<body>
                    <?php
                    session_start();
                            if( ! isset($_SESSION['username'])){
                            header("location: login.php");
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
                        <a class="nav-link js-scroll-trigger" href="belanja.php">Belanja</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="dokumentasi.php">Dokumentasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="penanaman.php">Penanaman</a>
                            <a class="dropdown-item" href="pengelolaan.php">Pengelolaan</a>
                            <a class="dropdown-item" href="pemasaran.php">Pemasaran</a>
                        </div>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle img-responsive" src="">
                            <span class="mr-2 d-none d-lg-inline text-white-600 ">
                            <?php echo $_SESSION['username']; ?>
                            </span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="profil.php">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Log Out
                            </a>
                        </div>
                    </li>
                </ul>
                </ul>
            </div>
    </nav>
    <br><br><br>

</body>

</html>