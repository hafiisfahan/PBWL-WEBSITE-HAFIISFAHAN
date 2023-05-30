<?php

$cel = new App\Tiket;
$rows = $cel->tampil();

?>

<h2>TIKET</h2>

<a href="index.php?hal=tiket_input" class="btn">Tambah Tiket</a>

<table>
    <tr>
        <th>ID Tiket</th> 
        <th>NAMA Tiket</th>
        <th>HARGA Tiket</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_tiket']; ?></td>
        <td><?php echo $row['nama_tiket']; ?></td>
        <td><?php echo $row['hrg_tiket']; ?></td>
        <td><a href="index.php?hal=tiket_edit&id=<?php echo $row['id_tiket']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=tiket_delete&id=<?php echo $row['id_tiket']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
