<?php

try {
    $conn = new PDO ("mysql:host=localhost;dbname=inventaris_toko", "root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi Berhasil!"; 
} catch(PDOException $e) {
    echo "Koneksi Gagal: ". $e->getMessage();
}

?>

