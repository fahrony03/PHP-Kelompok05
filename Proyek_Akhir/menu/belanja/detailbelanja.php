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
    include_once('../navbarr.php')
    
?>
<?php
                  require "koneksi.php";


    if (isset($_GET['detail'])) {
        $query = $pdo->prepare ("SELECT * FROM belanja WHERE id = {$_GET['detail']}");
         
            if ($query->execute()){
            // header('Location:detailbelanja.php');
            echo "Barang Berhasil Dipilih";
            }else{
                echo "data tidak berhasil di hapus";
            }
        }


?>
                    


<div class="container" style="padding-top:140px; padding-bottom:140px;">
<div class="row" style="background-color:white; padding:20px;">
<div class="col-md-8">
<?php
while ($r = $query->fetch()) {
?>
<img src="../../admin/menu/belanja/images/<?= $r['nama'] ?>"  class="card-img-top" alt="...">
    </div>

    <div class="col-md-4">
    <h3 class="my-3"><?= $r['title'] ?></h3>
    <p><?= $r['content'] ?> </p>
    <h3 class="my-3">Detail Produk</h3>
    <ul>
        <li>Berat : <?= $r['berat'] ?>Kg</li>
        <li>Stok  : <?= $r['stok'] ?></li>
    </ul>
        <h5 class="card-text text-justify">
            <b>Harga : Rp <?= $r['harga'] ?></b>
        </h5>
        <a href="../transaksi" class="btn btn-success float-right">Pesan</a>
<?php } ?>
</div>
</div>
</div>

        <?php
        include_once('../footerr.php');
        ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="#"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>



</body>

</html>