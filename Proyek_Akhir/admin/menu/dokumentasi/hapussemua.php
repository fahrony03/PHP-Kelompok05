<?php
        require "koneksi.php";
                 if (isset($_GET['delete'])) {
                $query = $pdo->prepare ("DELETE FROM dokumentasi");
                 
                    if ($query->execute()){
                    header('Location:index.php');
                    echo "Semua data berhasil di hapus";
                    }else{
                        echo "data tidak berhasil di hapus";
                    }
                }
?>