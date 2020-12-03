<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Si PEKA</title>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
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
                        <a class="nav-link js-scroll-trigger" href="#">Dokumentasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="#">Contact</a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Penanaman</a>
                            <a class="dropdown-item" href="#">Pengelolaan</a>
                            <a class="dropdown-item" href="#">Pemasaran</a>
                        </div>
                    </li>
                </ul>
                </ul>
                <span class="navbar-text">
                    <a href="../menu/login.php" class="btn btn-success">Logout</a>
                </span>
            </div>
        </div>
    </nav>
    <br><br><br>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../img/vertikultur.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/vertikultur.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/vertikultur.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
<div class="container">
    <div class="card ">
        <div class="card-header">
          Quote
        </div>
        <div class="card-body">
            <img src="../img/bayam.png" width="30" height="30" alt="" loading="lazy">
        </div>
      </div>
    </div>
    <br>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="../img/penanaman/wortel.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cara Menanam Wortel Di Rumah Yang Baik Dan Benar</h5>
                        <p class="card-text text-justify">
                            Penanaman Wortel tidak mudah, namun juga tidak begitu sulit akan tetapi beberapa orang
                            gagal dalam menanamnya, berikut adalah tips penanaman wortel
                        </p>
                        <a href="info/detailinfo_satu.php" class="btn btn-outline-success">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="../img/penanaman/tomat.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cara mudah menanam Tomat di Kebun</h5>
                        <p class="card-text text-justify">barang ini adalah bagus</p>
                        <a href="info/detailinfo_dua.php" class="btn btn-outline-success">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="../img/penanaman/kaktus.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Budidaya tanaman Kaktus pada lahan Terbatas</h5>
                        <p class="card-text text-justify">barang ini adalah bagus</p>
                        <a href="info/detailinfo_tiga.php" class="btn btn-outline-success">Beli</a>

                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="../img/penanaman/bayam.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cara Menanam Bayam sampai sukses</h5>
                        <p class="card-text text-justify">barang ini adalah bagus</p>
                        <a href="info/detailinfo_empat.php" class="btn btn-outline-success">Beli</a>

                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="../img/penanaman/cabe.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cara Menanam Cabai Rawit pada Media pot</h5>
                        <p class="card-text text-justify">barang ini adalah bagus</p>
                        <a href="info/detailinfo_lima.php" class="btn btn-outline-success">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="../img/penanaman/pepaya.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cara Menanam Pepaya dari biji sampai berbuah</h5>
                        <p class="card-text text-justify">barang ini adalah bagus</p>
                        <a href="info/detailinfo_enam.php" class="btn btn-outline-success">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="../img/penanaman/jeruk.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cara Menanam Jeruk pada lahan terbatas</h5>
                        <p class="card-text text-justify">barang ini adalah bagus</p>
                        <a href="info/detailinfo_tujuh.php" class="btn btn-outline-success">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="#" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cara Menanam Mangga Harum Manis tanpa Gagal</h5>
                        <p class="card-text text-justify">barang ini adalah bagus</p>
                        <a href="info/detailinfo_delapan.php" class="btn btn-outline-success">Beli</a>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <?php
        include_once('footer.php');
        ?>


        <a href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb" class="float">
            <p class="my-float">Contact Via WA</p>
        </a>



</body>

</html>