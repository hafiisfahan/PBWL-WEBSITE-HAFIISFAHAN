<?php

$id = $_GET['id'];

$cel = new App\tiket();
$rows = $cel->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=tiket_tampil">Kembali</a>
</div>