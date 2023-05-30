<?php

$spt = new App\Sponsor;
$rows = $spt->tampil();

?>

<h2>Sponsor</h2>

<a href="index.php?hal=sponsor_input" class="btn">Tambah Sponsor</a>

<table>
    <tr>
        <th>ID Sponsor</th> 
        <th>NAMA Sponsor</th>
        <th>HARGA Sponsor</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_sponsor']; ?></td>
        <td><?php echo $row['nama_sponsor']; ?></td>
        <td><?php echo $row['hrg_sponsor']; ?></td>
        <td><a href="index.php?hal=sponsor_edit&id=<?php echo $row['id_sponsor']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=sponsor_delete&id=<?php echo $row['id_sponsor']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
