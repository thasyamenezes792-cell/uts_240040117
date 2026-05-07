<?php

class Produk {
    Public $nama_produk;
    Public $jenis_produk;
    Public $harga;
    Public $stok;

    public function __construct($nama_produk, $jenis_produk, $harga, $stok) {
        if($stok < 0){
            die("Stok tidak boleh negatif");
        }

        $this->nama_produk = $nama_produk;
        $this->jenis_produk = $jenis_produk;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function cekStok(){
        if($this->stok < 5) {
            return "Stok Menipis";
        }else {
            return "Stok Aman";
        }
    }
}

?>