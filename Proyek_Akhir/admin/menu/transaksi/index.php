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
              <h1>Data Gambar</h1><hr>
              <a href="form.php">Tambah Gambar</a><br><br>
              <table class="table table-striped table-light">
              <tr>
                <th>Gambar</th>
                <th>Nama File</th>
                <th>Ukuran File</th>
                <th>Tipe File</th>
                <th>Title</th>
                <th>Content</th>
                <th>Opsi</th>
              </tr>
              <?php
              // Load file koneksi.php
              include "koneksi.php";
              $query = "SELECT * FROM transaksi"; // Tampilkan semua data gambar
              $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
              $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
              if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                  echo "<tr>";
                  echo "<td><img src='images/".$data['nama']."' width='100' height='100'></td>";
                  echo "<td>".$data['nama']."</td>";
                  echo "<td>".$data['ukuran']."</td>";
                  echo "<td>".$data['tipe']."</td>";
                  echo "<td>".$data['title']."</td>";
                  echo "<td>".$data['content']."</td>";
                  ?> <td>
                  <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a><br>
                  <a href="hapus.php?id=<?php echo $data['id']; ?>" class="hapus">Hapus</a>
              </td>
                  <?php echo "</tr>";
                }
              }else{ // Jika data tidak ada
                echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
              }
              ?>
              </table>

                </form>
              </div>
            </div>
            <div class="tile-footer">
              <a href="index.php" class="btn btn-primary">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </main>

  </body>
</html>