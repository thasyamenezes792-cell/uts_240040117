<?php

include 'koneksi.php';

$query = "SELECT * FROM produk";

$stmt = $conn->prepare($query);

$stmt->execute();

$data = $stmt->fetchAll();

?>

<h2>Transaksi Produk</h2>

<form action="proses_transaksi.php" method="POST">

Pilih Produk :
<br>

<select name="produk_id">

<?php foreach($data as $d){ ?>

<option value="<?php echo $d['id']; ?>">

<?php echo $d['nama_produk']; ?>

</option>

<?php } ?>

</select>

<br><br>

Jumlah Beli :
<br>

<input type="number" name="jumlah_beli">

<br><br>

<input type="submit" value="Proses">

</form>