<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../../img/newlogo.png">
    <title>Hello, world!</title>
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

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
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
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" " href="home.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger"  href="#">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#">Dokumentasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#;">Contact</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item active" href="katalogPenanaman.php">Penanaman</a>
                            <a class="dropdown-item" href="#">Pengelolaan</a>
                            <a class="dropdown-item" href="#">Tutorial Bootstrap</a>
                        </div>
                    </li>
                </ul>
                </ul>
                <span class="navbar-text">
                    <a href="logout.php" class="btn btn-success" >Log Out</a>
                </span>
            </div>
        </div>
    </nav>
    <br><br>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Website Pertanian</h1>
            <h1 class="display-4">Si-PEKA</h1>
            <hr>
            <p class="lead">Si PEKA adalah sebuah website pertanian yang dikelola oleh SMKPP Negeri 1 Tegalampel
                Bondowoso,
                SMKPP Negeri 1 Tegalampel adalah sebuah sekolah di kabupaten bondowoso yang salah satu jurusanya adalah
                di bidang pertanian, dan tujuan dibuatnya website ini adalah untuk mengakomodasi kebutuhan siswa< serta
                    para guru untuk proses pemasaran bahan-bahan pangan hasil dari produksi siswa SMKPP Negeri 1
                    Tegalampel</p> </div> </div> <div class="judul-card">
                    <h1 class="display-4">Katalog Penanaman</h1>
                    <hr>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="../img/penanaman/wortel.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara Menanam Wortel Di Rumah Yang Baik Dan Benar</h5>
                            <p class="card-text">Sahabat 99, apakah kamu ingin menanam wortel di rumah? 
                                Bila tertarik, yuk simak cara menanam wortel berikut ini!</p>
                            <a href="detailinfo_satu.php" class="btn btn-outline-success">Baca</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="../img/penanaman/tomat.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara Menanam Tomat</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="detailinfo_satu.php" class="btn btn-outline-success">Baca</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="../img/penanaman/kaktus.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara Menanam Kaktus</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="detailinfo_dua.php" class="btn btn-outline-success">Baca</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="../img/penanaman/bayam.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara Menanam Bayam</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="detailinfo_tiga.php" class="btn btn-outline-success">Baca</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="../img/penanaman/cabe.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara Menanam Cabai Rawit</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="detailinfo_empat.php" class="btn btn-outline-success">Baca</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="../img/penanaman/pepaya.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara Menanam Pepaya</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="detailinfo_Lima.php" class="btn btn-outline-success">Baca</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="../img/penanaman/jeruk.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara Menanam Jeruk</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="detailinfo_enam.php" class="btn btn-outline-success">Baca</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="../img/penanaman/mangga.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara Menanam Mangga</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="detailinfo_delapan.php" class="btn btn-outline-success">Baca</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="judul-card">
                <h1 class="display-4">Dokumentasi</h1>
                <hr>
            </div>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/vertikultur.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/vertikultur.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/vertikultur.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="konten">
                <p class="text-xl-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, maiores id
                    nobis temporibus culpa recusandae dolorum. Culpa minus, voluptatum molestiae ad eaque autem
                    exercitationem perferendis quisquam voluptas repellendus praesentium aperiam.</p>
                <p class="text-xl-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, mollitia
                    distinctio soluta voluptatem eius quae accusantium dolorum illo impedit laborum eligendi maiores
                    odio vel est reprehenderit tempora ea nam unde!</p>
            </div>

            <div class="footer">
        <div class="container">
        <footer class="page-footer font-small blue pt-4">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <!-- Content -->
                        <h5 class="text-uppercase">Si PEKA</h5>
                        <p>Website pemasaran hasil pertanian SMKPP Negeri 1 Tegalampel.</p>
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <!-- Links -->
                        <h5 class="text-uppercase">Info</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Link 1</a>
                            </li>
                            <li>
                                <a href="#!">Link 2</a>
                            </li>
                            <li>
                                <a href="#!">Link 3</a>
                            </li>
                            <li>
                                <a href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase">Contact</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Link 1</a>
                            </li>
                            <li>
                                <a href="#!">Link 2</a>
                            </li>
                            <li>
                                <a href="#!">Link 3</a>
                            </li>
                            <li>
                                <a href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            <hr>
        <div class="container">
            <div class="bawah text-center py-3">© 2020 Copyright
            </div>
        </div>
        </footer>
    </div>

            <a href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb" class="float">
                <p class="my-float">Contact Via WA</p>
            </a>

</body>

</html>