<?php

require_once "inc/Koneksi.php";
require_once "app/tiket.php";

$cel = new App\tiket();

if (isset($_POST['btn_simpan'])) {
    $cel->simpan();
    header("location:index.php?hal=tiket_tampil");
}

if (isset($_POST['btn_update'])) {
    $cel->update();
    header("location:index.php?hal=tiket_tampil");
}