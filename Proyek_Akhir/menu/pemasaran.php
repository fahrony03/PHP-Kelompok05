<!doctype html>
<html lang="en">
<?php 
    include "koneksi.php";

    $query = mysqli_query($koneksi, "SELECT * FROM pemasaran");
?>

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

<?php
    include_once('navbar.php')
?>

                    <?php
                            if( ! isset($_SESSION['username'])){
                            header("location: auth/login.php");
                            }
                    ?>

<br><br>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../img/cov1.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/cov2.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/cov3.jpeg" alt="Third slide">
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
        </div>
    </div>
    <div class="judul-card">
        <h1 class="display-4">Informasi Pemasaran</h1>
        <hr>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <?php
                while($data = mysqli_fetch_array($query)){
            ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="../admin/menu/pemasaran/images/<?= $data['nama'] ?>"  class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['title'] ?></h5>
                    <a href="more/detailpemasaran.php?slug=<?= $data['slug'] ?>" class="btn btn-outline-success">Baca</a>
                    </div>
                </div>
            </div>
                <?php } ?>

        </div>
        </div>



    <?php
        include_once('footer.php');
        ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="#"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>



</body>

</html>