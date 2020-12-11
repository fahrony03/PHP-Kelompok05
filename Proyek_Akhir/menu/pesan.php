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

<?php
    include_once('navbar.php')
?>



    <div class="container" style="padding-top:140px; padding-bottom:140px;">
        <div class="card">
            <div class="card-body">
                <h1><b>Pemesanan</b></h1>
                <div class="form">
                    <form action="" method="post">
                    <label for="inputState">Nama Barang</label>
                        <select id="inputState" class="form-control" name="nama_barang">
                            <option selected value="Teknik Informatika">Tomat</option>
                            <option selected value="Teknik Komputer">Timun</option>
                            <option selected value="Manajemen Informatika">Wortel</option>
                        </select>
                        <br>
                        <label for="nim">Nama Pemesan</label>
                        <br>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <br>
                        <label for="username">Alamat</label>
                        <br>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                        <br>
                        <label for="no">No Telepon</label>
                        <br>
                        <input type="text" class="form-control" id="no" name="no">
                        <br>
                        <label for="bukti_transaksi">Bukti Transaksi</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="bukti_transaksi">
                        <br><br>
                        <div class="form-group">
                            <label>Tanggal Pesan:</label>
                            <input type="date" name="tgl" value="tgl" class="form-control" required />
                        </div>

                        <br><br>
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Konfirmasi</button>
                        <br>
                </div>
                <?php
                        error_reporting(E_ALL ^ E_NOTICE);
                        include "koneksi.php";
                        $nama_barang  = $_REQUEST['nama_barang'];
                        $nama  = $_REQUEST['nama'];
                        $alamat  = $_REQUEST['alamat'];
                        $no  = $_REQUEST['no'];

                        $limit = 10 * 1024 * 1024;
                        $ekstensi =  array('png','jpg','jpeg','gif');
                        $jumlahFile = count($_FILES['foto']['name']);
                        for($x=0; $x<$jumlahFile; $x++){
                            $namafile = $_FILES['foto']['name'][$x];
                            $tmp = $_FILES['foto']['tmp_name'][$x];
                            $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
                            $ukuran = $_FILES['foto']['size'][$x];
                            if($ukuran > $limit){
                                header("location:index.php?alert=gagal_ukuran");
                            }else{
                                if(!in_array($tipe_file, $ekstensi)){
                                    header("location:index.php?alert=gagal_ektensi");
                                }else{
                                    move_uploaded_file($tmp, 'file/'.date('d-m-Y').'-'.$namafile);
                                    $x = date('d-m-Y').'-'.$namafile;
                                    mysqli_query($koneksi,"INSERT INTO gambar VALUES(NULL, '$x')");
                                    header("location:index.php?alert=simpan");
                                }
                            }
                        }

                        $tgl  = $_REQUEST['tgl'];
                        $mysqli  = "INSERT INTO `pesanan` (`nama_barang`, `nama`, `alamat`, `no`, `bukti_transaksi`, `tgl`) VALUES ('$nama_barang', '$nama', '$alamat', '$no', '$bukti_transaksi', '$tgl')";
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
        include_once('footer.php');
        ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="#"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>



</body>

</html>