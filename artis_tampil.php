<?php

$bju = new App\Artis;
$rows = $bju->tampil();

?>

<h2>SPONSOR</h2>

<a href="index.php?hal=artis_input" class="btn">Tambah Artis</a>

<table>
    <tr>
        <th>ID Artis</th> 
        <th>NAMA Artis</th>
        <th>HARGA Artis</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_artis']; ?></td>
        <td><?php echo $row['nama_artis']; ?></td>
        <td><?php echo $row['hrg_artis']; ?></td>
        <td><a href="index.php?hal=artis_edit&id=<?php echo $row['id_artis']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=artis_delete&id=<?php echo $row['id_artis']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
