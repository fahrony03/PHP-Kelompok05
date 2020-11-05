<?php
                        include "koneksi.php";
                        $nim  = $_REQUEST['nim'];
                        $nama  = $_REQUEST['namamahasiswa'];
                        $prodi  = $_REQUEST['prodi'];
                        $mysqli  = "INSERT INTO praktikumday4 (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi') ";
                        $result  = mysqli_query($conn, $mysqli);
                        if ($result) {
                            echo "Input berhasil";
                        } else {
                            echo "Input gagal";
                        }
                        mysqli_close($conn);
                    ?>