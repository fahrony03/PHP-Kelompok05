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
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" " href=" ../index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#">Info</a>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Penanaman</a>
                            <a class="dropdown-item" href="#">Pengelolaan</a>
                            <a class="dropdown-item" href="#">Tutorial Bootstrap</a>
                        </div>
                    </li>
                </ul>
                </ul>
                <span class="navbar-text">
                    <a href="logout.php" class="btn btn-success">Log Out</a>
                </span>
            </div>
        </div>
    </nav>
    <br><br><br><br>

    <div class="container">
        <div class="card">
            <div class="card-header bg-light">
                <script type='text/javascript'>
                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
                        'September', 'Oktober', 'November', 'Desember'];
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
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <h1>Cara Menanam Wortel <b>(INI BELUM SELESAI)</b></h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta, corrupti hic doloremque doloribus, facilis
                    expedita enim, alias porro sapiente quis ea tempore ratione dolore nostrum natus dignissimos? Dolorem, sint?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta, corrupti hic doloremque doloribus, facilis
                    expedita enim, alias porro sapiente quis ea tempore ratione dolore nostrum natus dignissimos? Dolorem, sint?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta, corrupti hic doloremque doloribus, facilis
                    expedita enim, alias porro sapiente quis ea tempore ratione dolore nostrum natus dignissimos? Dolorem, sint?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta, corrupti hic doloremque doloribus, facilis
                    expedita enim, alias porro sapiente quis ea tempore ratione dolore nostrum natus dignissimos? Dolorem, sint?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta, corrupti hic doloremque doloribus, facilis
                    expedita enim, alias porro sapiente quis ea tempore ratione dolore nostrum natus dignissimos? Dolorem, sint?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta, corrupti hic doloremque doloribus, facilis
                    expedita enim, alias porro sapiente quis ea tempore ratione dolore nostrum natus dignissimos? Dolorem, sint?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta, corrupti hic doloremque doloribus, facilis
                    expedita enim, alias porro sapiente quis ea tempore ratione dolore nostrum natus dignissimos? Dolorem, sint?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta, corrupti hic doloremque doloribus, facilis
                    expedita enim, alias porro sapiente quis ea tempore ratione dolore nostrum natus dignissimos? Dolorem, sint?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta, corrupti hic doloremque doloribus, facilis
                    expedita enim, alias porro sapiente quis ea tempore ratione dolore nostrum natus dignissimos? Dolorem, sint?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta, corrupti hic doloremque doloribus, facilis
                    expedita enim, alias porro sapiente quis ea tempore ratione dolore nostrum natus dignissimos? Dolorem, sint?
                    </p>
                    <footer class="blockquote-footer">Nurico Vicyyanto, <cite title="Source Title"> Cara Menanam Wortel</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
    <br>

    <div class="footer">
        <footer class="foot">
            <div class="footer-copyright text-center py-3">© 2020 Copyright </div>
        </footer>
    </div>

    <a href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb" class="float">
        <p class="my-float">Contact Via WA</p>
    </a>

</body>

</html>