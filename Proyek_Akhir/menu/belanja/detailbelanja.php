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
    <title>Si PEKA-Belanja</title>
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
    include_once('navbarr.php')
?>


<div class="container" style="padding-top:140px; padding-bottom:140px;">
<div class="row" style="background-color:white; padding:20px;">
<!-- <div class="col-md-8">
    <img class="img-fluid" src="../../img/pertanian.jpg" alt="">
    </div> -->

    <div class="col-md-4">
    <h3 class="my-3">Buah Tomat 1kg</h3>
    <p>Buah tomat organik ini seberat 1Kg ditanam dan dipanen dengan cara khusus sehingga mutunya terjamin </p>
    <h3 class="my-3">Detail Produk</h3>
    <ul>
        <li>Berat 1Kg</li>
        <li>Produk Organik</li>
        <li>Segar</li>
        <li>Tanpa bahan kimia</li>
    </ul>
    <span class="badge badge-warning float-right">discount 50%</span>
        <h5 class="card-text text-justify">
            <b>Harga : Rp 10.000</b>
        </h5>
        <a href="pesan.php" class="btn btn-success float-right">Pesan</a>

</div>
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