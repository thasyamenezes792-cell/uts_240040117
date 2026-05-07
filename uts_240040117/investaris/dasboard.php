<?php

include 'koneksi.php';
$quwry = "SELECT * FROM PRODUK";
$stmt = $conn->prepare($query);
$stmt->execute();
$data = $stmt->fetcAll();
 
?>

<h2>Dashboard Produk</h2>
<tableborder="1" cellpadding="10">

<tr>
    <th>Nama Produk</th>
    <th>Jenis</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Status</th>
</tr>

<?php foreach($data as $d) { ?>

<tr>

<td>
    <?php echo $d['nama_produk']; ?>
</td>

<td>
    <?php echo $d['jenis_produk']; ?>
<td>

<td>
    <?php echo $d['harga']; ?>
</td>

<td>
    <?php echo $d['stok']; ?>
</td>

<td> 
    <?php if($d['stok'] < 5){
        echo "Stok Menipis";
    }else {
        echo "Stok Aman";
    }
?>

</td>
</tr>
<?php } ?>

</table>
