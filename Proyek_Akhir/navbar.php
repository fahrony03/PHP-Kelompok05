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
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" width="60" height="60" class="rounded-circle">
                Si PEKA
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" " href=" #">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="javascript:peringatan();">Belanja</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="javascript:peringatan();">Dokumentasi</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="javascript:peringatan();">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="javascript:peringatan();">Penanaman</a>
                            <a class="dropdown-item" href="javascript:peringatan();">Pengelolaan</a>
                            <a class="dropdown-item" href="javascript:peringatan();">Pemasaran</a>
                        </div>
                    </li>
                </ul>
                </ul>
                <span class="navbar-text">
                    <a href="menu/login.php" class="btn btn-success">Login</a>
                </span>
            </div>
        </div>
    </nav>
    <br><br><br>

    <script>
        function peringatan() {
            alert("Login Terlebih Dahulu");
        }
    </script>

</body>

</html>