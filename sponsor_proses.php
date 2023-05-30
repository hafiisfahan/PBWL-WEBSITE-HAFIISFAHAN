<?php

require_once "inc/Koneksi.php";
require_once "app/sponsor.php";

$spt = new App\sponsor();

if (isset($_POST['btn_simpan'])) {
    $spt->simpan();
    header("location:index.php?hal=sponsor_tampil");
}

if (isset($_POST['btn_update'])) {
    $spt->update();
    header("location:index.php?hal=sponsor_tampil");
}