<?php

$id = $_GET['id'];

$spt = new App\sponsor();
$rows = $spt->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=sponsor_tampil">Kembali</a>
</div>