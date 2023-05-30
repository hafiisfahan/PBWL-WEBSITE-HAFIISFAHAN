<?php

$id = $_GET['id'];

$bju = new App\artis();
$rows = $bju->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=artis_tampil">Kembali</a>
</div>