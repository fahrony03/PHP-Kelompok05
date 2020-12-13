<!doctype html>

<?php 
    include "koneksi.php";

    $slug = $_GET['slug'];

    $query = mysqli_query($koneksi, "SELECT * FROM informasi WHERE slug = '".$slug."'");

    $cek = mysqli_num_rows($query);

    // if($cek < 1){
    //     header("location:../index.php");
    // }

    while($detail = mysqli_fetch_array($query)){
        $title = $detail['title'];
        $content = $detail['content'];
        $nama = $detail['nama']; 
    }
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <title>Si PEKA-Info</title>
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
    <?php
    include_once('navbar.php')
?>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <script type='text/javascript'>
                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
                            'September', 'Oktober', 'November', 'Desember'
                        ];
                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth();
                        var thisDay = date.getDay(),
                            thisDay = myDays[thisDay];
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                    </script>
                    <hr>

                    <!--ubah dari bagian ini sesuai isi konten-->

                    <h1><?= $title ?><b></b></h1>
                    <br>
                    <!-- <p>
                        Tanaman Wortel (Daucus carota L.) berasal dari Asia Timur dan Tengah yang memiliki iklim
                        sub-tropis. Tanaman Wortel
                        berbentuk semak (perdu) yang tumbuh tegak dengan ketinggian antara 30 cm-100 cm.
                        Tanaman Wortel memiliki umbi berwarna jingga kemerahan berbentuk lonjong yang sering dimakan
                        sebagai sumber gizi terutama
                        vitamin A. Warna jingga kemerahan pada umbi Wortel ini menandakan bahwa itu kaya akan senyawa
                        karoten dan flavonoid yang
                        dapat berfungsi sebagai antioksidan.Umbi Wortel sering dikonsumsi sebagai tambahan pada masakan
                        seperti sup ataupun bihun.
                        Umbi ini disenangi banyak orang di kalangan masyarakat karena rasanya yang enak dan gizinya yang
                        berlimpah.
                        Kali ini Si PEKA akan memberikan uraian lengkap mengenai cara menanam wortel yang baik dan
                        benar.
                        Yuk, simak penjelasannya di bawah ini!.
                    </p> -->
                    <p>
                        <img width="350px" height="100px" src="../dashboard/cms/images/<?= $nama ?>" class="img-fluid" alt="Responsive image">
                    </p>
                    <!-- <h3> Jenis Wortel</h3> -->
                    <p>Jenis Imperator yaitu jenis wortel yang memiliki bentuk bulat memanjang dengan ujung meruncing
                        seperti kerucut. Wortel ini
                        sedikit tipis, serta memiliki umbi berwarna oranye. Wortel jenis ini kurang disukai oleh orang
                        karena rasa yang dimiliki
                        wortel jenis ini kurang manis.</p>
                    <footer class="blockquote-footer">SiPEKA <cite title="Source Title"> Cara Menanam Wortel Di Rumah
                            Yang Baik Dan Benar. Sangat Mudah!</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

    <!--ubah sampe bagian ini-->

    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="form">
                    <form action="" method="post">
                        <label for="komentar">Komentar</label>
                        <br>
                        <textarea class="form-control" id="komentar" name="komentar" rows="3"></textarea>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-success " name="submit">kirim</button>
            </div>

            <?php
                include "koneksi.php";
                $komentar=$_REQUEST['komentar'];
                $mysqli="insert into komentar values('$komentar')";
                $hasil=mysqli_query($koneksi,$mysqli);
                ?>


            <?php
        include_once('footer.php');
        ?>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="#" class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>

</body>

</html>