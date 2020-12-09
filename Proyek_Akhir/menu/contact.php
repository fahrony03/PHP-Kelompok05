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
        </script>
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
                </ul>
                </ul>
                <span class="navbar-text">
                    <a href="../menu/login.php" class="btn btn-success">Logout</a>
                </span>
            </div>
        </div>
    </nav>



    <div class="container" style="padding-top:140px; padding-bottom:140px;">
        <div class="card">
            <div class="card-body">
                <h1 ><b>Contact admin</b></h1>
                <div class="form">
                    <form action="" method="post">
                        <label for="nama">Nama </label>
                        <br>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <br>
                        <label for="alamat">Alamat</label>
                        <br>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                        <br>
                        <label for="no">No Telepon</label>
                        <br>
                        <input type="text" class="form-control" id="no" name="no">
                        <br>
                        <label for="komentar">Komentar</label>
                        <br>
                        <textarea class="form-control" id="komentar" name="komentar" rows="3"></textarea>
                        <br>


                        <br><br>
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Kirim</button>
                        <br>
                </div>
                <?php
                        error_reporting(E_ALL ^ E_NOTICE);
                        include "koneksi.php";
                        $nama  = $_REQUEST['nama'];
                        $alamat  = $_REQUEST['alamat'];
                        $no  = $_REQUEST['no'];
                        $komentar  = $_REQUEST['komentar'];
                        $mysqli  = "INSERT INTO `kontak` (`nama`, `alamat`, `no`, `komentar`) VALUES ($nama', '$alamat', '$no', $komentar')";
                        $result  = mysqli_query($koneksi, $mysqli);
                        ?>
                </form>
                <div class="text-center">
                    <a class="small" href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb">Pesan Via Whatsapp</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>

    </div>

    </div>
    </div>
    </div>
    </div>

    <?php
        include_once('../footer.php');
        ?>

    <a href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb" class="float">
        <p class="my-float">Contact Via WA</p>
    </a>



</body>

</html>