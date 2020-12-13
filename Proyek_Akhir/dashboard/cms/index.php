<html>
<head>
  <title>Data Gambar</title>
</head>
<body>
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
<table border="1" cellpadding="8">
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
$query = "SELECT * FROM informasi"; // Tampilkan semua data gambar
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
</body>
</html>