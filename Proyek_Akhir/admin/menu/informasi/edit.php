<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat CRUD dengan PHP dan MYSQL - Menampilkan data dari Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MYSQL</h1>
        <h2>Menampilkan data dari Database</h2>
    </div>
    <br>

    <a href="index.php">Lihat Semua Data</a>

    <br>

    <h3>Edit Data</h3>
    <?php
include ('koneksi.php');
$edit=mysqli_query($connect, "select *from pemasaran where id='$_GET[id]'");
$data=mysqli_fetch_array($edit);
echo "<table border=1>
<form method=post action=update.php enctype=multipart/form-data>
<input type=hidden name=id value=$data[id]>
<tr><td>Gambar </td><td><img src=’images/$data[nama]‘ width=50 height=50 > </td></tr>
<tr><td>Gambar </td><td><input type=file name=gambar>*kosongkan jika gambar tidak di ubah </td></tr>
</table>
<input type=submit value=update >
</form> ";
?>
</body>
</html>

<!-- img src='images/".$data['nama'] -->