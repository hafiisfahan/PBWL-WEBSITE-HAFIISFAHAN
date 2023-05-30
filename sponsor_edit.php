<?php

$id = $_GET['id'];
$spt = new App\sponsor();

$row = $spt->edit($id);
?>

<h2>Edit sponsor</h2>

<form action="sponsor_proses.php" method="post">
    <input type="hidden" name="id_sponsor" value="<?php echo $row['id_sponsor']; ?>">
    <table>
        <tr>
            <td>Nama sponsor</td>
            <td><input type="text" name="nama_sponsor" value="<?php echo $row['nama_sponsor']; ?>"></td>
        </tr>
        <tr>
            <td>Harga sponsor</td>
            <td><input type="text" name="hrg_sponsor" value="<?php echo $row['hrg_sponsor']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>