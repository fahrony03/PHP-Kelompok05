<?php
// session_start();
require "../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];

    // Set path folder tempat menyimpan gambarnya
            $sql = mysqli_query($koneksi,"UPDATE user ". "SET nama='$nama', username='$username', email='$email', jenis_kelamin='$jk', agama='$agama', no_hp='$hp', alamat='$alamat' WHERE id ='$id'" );
            
            if($sql){
              // echo "Update berhasil";
              header("location:profile.php");
            }else{
              die('Could not update data: ' . mysqli_error($koneksi));
            }
            
            // if($stmt->execute()){
            //     $link = unlink("images/".$galam);
            //     header("Location:index.php");
            
            // }else{
            //   // Jika Gagal, Lakukan :
            //   echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            //   echo "<br><a href='form.php'>Kembali Ke Form</a>";
            // }
?>