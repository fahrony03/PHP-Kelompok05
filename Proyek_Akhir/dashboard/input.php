<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Crud dengan PHP dan MySQL - Menampilkan dari data Database</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="judul">
            <h1>Membuat CRUD dengan PHP dan MySQL</h1>
            <h2>Menampilkan dari Database</h2>
        </div>
        <br>
        <a href="index.php">Lihat Semua Data</a>

        <br>
        <h3>Input Data Baru</h3>
        <form action="input-aksi.php" method="POST">
            <table>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file" name="gambar"></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td><input type="text" name="content"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </body>
</html>