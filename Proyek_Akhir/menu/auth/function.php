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
    // $kode_user = ($data[""]);
    $nama_user = htmlspecialchars($data["nama_user"]);
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $jk = htmlspecialchars($data["jenis_kelamin"]);
    $agama = htmlspecialchars($data["agama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
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
    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$nama_user', '$username', '$password', '$jk' , '$agama' , '$alamat' , '$email', '$no_hp','$level')");
    echo "
            <script>
                    alert('anda berhasil daftar!');
                    
            </script>

            ";

    return mysqli_affected_rows($conn);
}
