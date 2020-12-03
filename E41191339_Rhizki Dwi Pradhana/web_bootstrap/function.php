<?php
//untuk koneksi
$conn = mysqli_connect('localhost', 'root', '', 'db_login');


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
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $email = htmlspecialchars($data["email"]);
    // cek username di database
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
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
    $password = password_hash($password, PASSWORD_DEFAULT);
    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO admin VALUES ('$id', '$username', '$password', '$nama',");
    echo "admin'
            <script>
                    alert('anda berhasil daftar!');
            </script>

            ";

    return mysqli_affected_rows($conn);
}