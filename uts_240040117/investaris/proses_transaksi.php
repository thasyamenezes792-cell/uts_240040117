<?php

include 'koneksi.php';

$produk_id = $_POST['produk_id'];

$jumlah_beli = $_POST['jumlah_beli'];

$query = "SELECT * FROM produk
WHERE id = :id";

$stmt = $conn->prepare($query);

$stmt->execute([

':id' => $produk_id

]);

$produk = $stmt->fetch();

$stok_lama = $produk['stok'];

$stok_baru = $stok_lama - $jumlah_beli;

if($stok_baru < 0){

die("Stok Tidak Mencukupi");

}

$update = "UPDATE produk
SET stok = :stok
WHERE id = :id";

$stmt2 = $conn->prepare($update);

$stmt2->execute([

':stok' => $stok_baru,

':id' => $produk_id

]);

$transaksi = "INSERT INTO transaksi
(produk_id, jumlah_beli)

VALUES
(:produk_id, :jumlah_beli)";

$stmt3 = $conn->prepare($transaksi);

$stmt3->execute([

':produk_id' => $produk_id,

':jumlah_beli' => $jumlah_beli

]);

echo "Transaksi Berhasil";

?>