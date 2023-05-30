<?php

$id = $_GET['id'];
$bju= new App\artis();

$row = $bju->edit($id);
?>

<h2>Edit artis</h2>

<form action="artis_proses.php" method="post">
    <input type="hidden" name="id_artis" value="<?php echo $row['id_artis']; ?>">
    <table>
        <tr>
            <td>Nama artis</td>
            <td><input type="text" name="nama_artis" value="<?php echo $row['nama_artis']; ?>"></td>
        </tr>
        <tr>
            <td>Harga artis</td>
            <td><input type="text" name="hrg_artis" value="<?php echo $row['hrg_artis']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 