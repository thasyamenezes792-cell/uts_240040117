<?php
// koneksi database

$host = "localhost";
$user = "root";
$pass = "";
$db   = "inventaris_toko";

// membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
