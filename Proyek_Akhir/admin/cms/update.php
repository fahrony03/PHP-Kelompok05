<?php
// include "koneksi.php";
// $id = $_POST['id'];
// $nama_file = $_FILES['gambar']['name'];
// $ukuran_file = $_FILES['gambar']['size'];
// $tipe_file = $_FILES['gambar']['type'];
// $tmp_file = $_FILES['gambar']['tmp_name'];
// $title = $_POST['title'];
// $content = $_POST['content'];

// mysqli_query($connect, "UPDATE informasi set nama='$nama_file','size='$ukuran_file','tipe='$tipe_file', 'title=$title' content='$content' where id='$id'");

// header("location:index.php?pesan=update");

    include ('koneksi.php');
$filename=$_FILES['gambar']['name'];
$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$filename);
if(empty($filename))   //jika gambar kosong atau tidak di ganti
{
$update=mysqli_query($connect,"UPDATE informasi set nama='$_POST[nama]' where id='$_POST[id]' ") or die ("gagal update ");
echo "<script>alert ('data telah di update ');document.location='tampil_foto.php' </script> ";
}
elseif (!empty($filename)) // jika gambar di ganti
{
$update= mysqli_query($connect,"UPDATE informasi set nama='$_POST[nama]',gambar='$filename' where id='$_POST[id]' ") or die ("gagal update gambar ");
echo "<script>alert ('data telah di update ');document.location='tampil_foto.php' </script> ";
}
?>