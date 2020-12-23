<?php
//untuk koneksi
$conn = mysqli_connect('localhost', 'root', '', 'dbpeka');


//membuat function agar jadi satu, supaya jadi efektif dan efisien
function query($query)
{
    //untuk memasukkan variabel $conn karena kalau langsung tidak bisa, grgr scope
    global $conn;
    //membuat array kosong untuk menampung data
    $result = mysqli_query($conn, $query);
    //untuk mengambil data dari database
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    global $conn;
    $kode_user = ($data["kode_user"]);
    $nama_user = htmlspecialchars($data["nama_user"]);
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $file_gbr = htmlspecialchars($data["file_gbr"]); 
    $level = htmlspecialchars($data["level"]);
    // cek username di database
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
            alert ('mohon maaf username sudah terdaftar!');
            </script>";
        return false;
    }
    // cek password yang diinputkan sama atau tidak
    if ($password !== $password2) {
        echo "
            <script>
            alert ('konfirmasi password tidak sesuai');
            </script>
            ";
        return false;
    }
    // enkripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT);
    
    }
    // menyimpan gambar
    $path = "images/".$nama_file;
    if (!empty($_FILES["file_gbr"]["tmp_name"]))
    {
    $jenis_gambar=$_FILES['file_gbr']['type']; //memeriksa format gambar
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||
    $jenis_gambar=="image/png")
    {
    $lampiran = $namafolder . basename($_FILES['file_gbr']['name']);

    //mengupload gambar dan update row table database dengan path folder dan nama image
    if (move_uploaded_file($_FILES['file_gbr']['tmp_name'], $lampiran)) {
    }
    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('$kode_user', '$nama_user', '$username', '$password', '$email', '$no_hp', '$lampiran','$level')");
    echo "
            <script>
                    alert('anda berhasil daftar!');
                    
            </script>

            <br /><br />
            <img src='$lampiran' height='300'>";

            //Jika gagal upload, tampilkan pesan Gagal
            } else {
            echo "Gambar gagal dikirim";
            }
            } else {
            echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
            }
            } else {
            echo "Anda belum memilih gambar";
            }

                return mysqli_affected_rows($conn);
}