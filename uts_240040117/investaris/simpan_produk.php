<?php

include 'koneksi.php';
include 'Produk.php';

$nama_produk = $_POST['nama_produk'];
$jenis_produk = $_POST['jenis_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$produk = new Produk(
    $nama_produk,
    $jenis_produk,
    $harga,
    $stok
);

$query = "INSERT INTO produk (nama_produk, jenis_produk, harga, stok)
VALUES (:nama_produk, :jenis_produk, :harga, :stok)";

$stmt = $conn->prepare($query);
$stmt->execute([
    ':nama_produk' => $nama_produk,
    ':jenis_produk' => $jenis_produk,
    ':harga' => $harga,
    ':stok' => $stok,
]);

header("Location: index.php");
exit;

?>
