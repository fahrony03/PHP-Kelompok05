<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "praktikumday4"; // Nama databasenya

// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';
dbname='.$database, $username, $password);
?>