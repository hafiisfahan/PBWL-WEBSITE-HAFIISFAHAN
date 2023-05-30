<?php

require_once "inc/Koneksi.php";
require_once "app/artis.php";

$bju = new App\artis();

if (isset($_POST['btn_simpan'])) {
    $bju->simpan();
    header("location:index.php?hal=artis_tampil");
}

if (isset($_POST['btn_update'])) {
    $bju->update();
    header("location:index.php?hal=artis_tampil");
}