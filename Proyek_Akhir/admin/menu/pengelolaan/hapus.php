<?php
        require "koneksi.php";
                 if (isset($_GET['delete'])) {
                $query = $pdo->prepare ("DELETE FROM pengelolaan WHERE id = {$_GET['delete']}");
                 
                    if ($query->execute()){
                    header('Location:index.php');
                    echo "data berhasil di hapus";
                    }else{
                        echo "data tidak berhasil di hapus";
                    }
                }
?>