<?php
include 'database.php';

$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);
?>

<h2>Data Produk</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Stok</th>
    </tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama_produk']; ?></td>
        <td><?= $row['stok']; ?></td>
    </tr>
<?php } ?>

</table>