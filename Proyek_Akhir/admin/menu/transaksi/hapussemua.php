<?php
        require "koneksi.php";
                 if (isset($_GET['delete'])) {
                    $query = mysqli_query($connect, "DELETE FROM transaksi"); // query hapus data
 
                    if($query){
                        header("Location: index.php"); // redirect ke index.php
                    }else{
                        echo "Hapus data gagal";
                    }
                }
               
?>