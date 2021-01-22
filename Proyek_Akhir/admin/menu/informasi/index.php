<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Form Components - Si-PEKA Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body style="background-color: rgb(230, 240, 193);">
  <div class="container">
                <form>
                <?php
                  if(isset($_GET['pesan'])) {
                      $pesan = $_GET['pesan'];
                      if ($pesan == "input") {
                          echo "Data berhasil di input";
                      } elseif ($pesan == "update") {
                          echo "Data berhasil di update";
                      } elseif ($pesan == "hapus") {
                          echo "Data berhasil di hapus";
                      }
                  }
                  ?>
              <h1>Manajemen Informasi</h1><hr>
              <a type="button" class="btn btn-primary" href="form.php">Tambah Artikel</a><br><br>
              <table class="table table-striped table-light">
              <tr>
                <th>Gambar</th>
                <th>Nama File</th>
                <th>Ukuran File</th>
                <th>Tipe File</th>
                <th>Title</th>
                <th>Content</th>
                <th>                <a
                        href="hapussemua.php?delete" class="btn btn-danger" 
                        onclick="return confirm('Apakah Anda yakin ingin mengapus semua data Produk?')">
                        Hapus Semua
                    </a></th>
              </tr>
              <?php
                  require "koneksi.php";

                  $query = $pdo->prepare("SELECT * FROM informasi");
                  
                  $query->execute();
                  if($query->rowCount() > 0 ){
                    while ($r = $query->fetch()) {
                      
                      echo "<tr>";
                        echo "<td><img src='images/".$r['nama']."' width='100' height='100'></td>";
                        echo "<td>".$r['nama']."</td>";
                        echo "<td>".$r['ukuran']."</td>";
                        echo "<td>".$r['tipe']."</td>";
                        echo "<td>".$r['title']."</td>";
                        echo "<td>".$r['content']."</td>";

                      ?> <td>
                                            <a
                        href="formedit.php?id=<?= $r['id']; ?>" class="btn btn-outline-warning  " 
                        onclick="return confirm('Apakah Anda yakin ingin mengedit item ini?')">
                        Edit
                    </a>
                      <a
                        href="hapus.php?delete=<?= $r['id']; ?>" class="btn btn-outline-danger" 
                        onclick="return confirm('Apakah Anda yakin ingin mengapus item ini?')">
                        Hapus
                    </a>
                  </td><?php
                  echo "</tr>";
                      }//end while
                      
                      
                  }else{
                      
                      echo "<tr><td colspan=\"2\">Not Found</td></tr>";
                  }
               ?>
              </table>
              <a class="btn btn-success" href="../../index.php" role="button">Kembali</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    </div>

  </body>
</html>