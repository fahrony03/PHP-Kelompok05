<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <title>Si PEKA-Info!</title>
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

                    <h1>Cara Menanam Wortel Di Rumah Yang Baik Dan Benar. Sangat Mudah! <b></b></h1>
                    <br>
                    <p>
                    Wortel merupakan salah satu jenis sayuran yang memiliki kandungan vitamin A. 
                    Dengan kandungan tersebut, sayuran ini dipercaya sangat bermanfaat untuk kesehatan mata.
                    Sayuran ini berasal dari wilayah Asia Timur hingga Asia Tengah.
                    Saat ini, budidaya wortel sudah meluas ke berbagai negara di dunia, termasuk juga di Indonesia.
                    Di Indonesia sendiri, budidaya wortel banyak dilakukan di kebun hingga di rumah.
                    Cara menanam wortel sendiri tidak terlalu sulit, kok!
                    Namun, supaya kamu bisa mendapatkan hasil yang optimal dan wrotel bisa tumbuh lebih cepat, 
                    maka ada beberapa tahapan yang harus dipahami.
                    Kali ini Si PEKA akan memberikan uraian lengkap mengenai cara menanam wortel yang baik dan benar.
                    Yuk, simak penjelasannya di bawah ini!
                    </p>
                    <p>
                        <img src="../img/penanaman/bayam.jpg" class="img-fluid" alt="Responsive image">
                    </p>
                    <h3> Syarat Tumbuh Wortel</h3>
                    <p>
                    Syarat tumbuh wortel ini sifatnya wajib, Sahabat Si PEKA. 
                    Pasalnya, syarat inilah yang akan membuat wortel menjadi berkembang optimal dan dapat berbuah lebih cepat.
                    Dengan begitu, sebelum mempelajari cara menanam wortel, kamu harus persapkan ini terlebih dahulu, ya!
                    </p>
                    <h5>1. Tanah </h5>
                    <p> Wortel membutuhkan tanah dengan jenis berikut: 
                    Aluvial, Andosol,Latosol, Regosol
                    </p>

                    <footer class="blockquote-footer">Queendha <cite title="Source Title"> Cara Menanam Wortel Di Rumah 
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


        <button type="submit" class="btn btn-success " name="submit">kirim</button>

        </div>
                    <?php
                    error_reporting(E_ALL ^ E_NOTICE);
                        include "../koneksi.php";
                        $komentar  = $_REQUEST['komentar'];
                        $mysqli  = "INSERT INTO `komentar` (`komentar`) VALUES ('$komentar')";
                        $result  = mysqli_query($koneksi, $mysqli);
                    ?>
                    </form>
                </div>
            </div>
        </div>
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