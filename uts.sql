CREATE DATABASE inventaris_toko;

USE inventaris_toko;

CREATE TABLE produk (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nama_produk VARCHAR(100),

    jenis_produk VARCHAR(50),

    harga INT,

    stok INT

);

CREATE TABLE transaksi (

    id INT AUTO_INCREMENT PRIMARY KEY,

    produk_id INT,

    jumlah_beli INT,

    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


