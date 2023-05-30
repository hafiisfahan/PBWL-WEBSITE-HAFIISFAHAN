<?php

$id = $_GET['id'];
$cel= new App\tiket();

$row = $cel->edit($id);
?>

<h2>Edit tiket</h2>

<form action="tiket_proses.php" method="post">
    <input type="hidden" name="id_tiket" value="<?php echo $row['id_tiket']; ?>">
    <table>
        <tr>
            <td>Nama tiket</td>
            <td><input type="text" name="nama_tiket" value="<?php echo $row['nama_tiket']; ?>"></td>
        </tr>
        <tr>
            <td>Harga tiket</td>
            <td><input type="text" name="hrg_tiket" value="<?php echo $row['hrg_tiket']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>