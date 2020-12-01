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
                    <td>ID</td>
                    <td><input type="text" name="id_admin"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama_admin"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><input type="text" name="nohp_admin"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </body>
</html>