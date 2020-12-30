            <?php
                include 'koneksi.php';
                $query = $db->prepare("SELECT * FROM tbl_mahasiswa");
                $query->execute();
                $data = $query->fetchAll();
            ?>
            <!DOCTYPE html>
            <html>
            <head>
            <meta charset="utf-8">
                <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

            <title>CRUD PDO</title>
            </head>
            <body>
            <div>
                        <!-- Outer Row -->
                        <div class="row justify-content-center">

                            <div class="col-xl-10 col-lg-12 col-md-9 mb-5">

                                <div class="card o-hidden border-0 shadow-lg my-2">
                                <div class="card-body p-3">
                                    <div>
                                        <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-2">Input Data Mahasiswa PDO (PHP Data Objects)</h1>
                                        </div>
                                            <div class="post-content">
                                            <p align="center"> Moch. Fahrony - E41190878</p>
                                <table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
                                <tr>
                                    <td width="115" height="30" align="center" valign="middle" bgcolor="#99b3ff">Nim</td>
                                    <td width="175" align="center" valign="middle" bgcolor="#99b3ff">Nama</td>
                                    <td width="250" align="center" valign="middle" bgcolor="#99b3ff">Alamat</td>
                                    <td width="100" align="center" valign="middle" bgcolor="#99b3ff">Kelas</td>
                                    <td width="135" align="center" valign="middle" bgcolor="#99b3ff"><a href="create.php" style="color:white";>TAMBAH DATA</a></td></tr>
                                            <?php foreach ($data as $value): ?>
                                                <tr>
                                                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['nim'] ?></td>
                                                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['nama'] ?></td>
                                                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['alamat'] ?></td>
                                                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['kelas'] ?></td>
                                                    <td p align="center" bgcolor="#FFFFFF">
                                                        <a href="edit.php?nim=<?php echo $value['nim']?>">Edit</a>
                                                        <a href="delete.php?nim=<?php echo $value['nim']?>">Delete</a>
                                                    </td>
                                                </tr>
                                            </td>
                                            </tr>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
<?php endforeach; ?>
</table>
</body>
</html>