<?php

namespace App;
use Inc\Koneksi as Koneksi;

class tiket extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_tiket";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $nama_tiket = $_POST['nama_tiket'];
        $hrg_tiket = $_POST['hrg_tiket'];

        $sql = "INSERT INTO tb_tiket (nama_tiket, hrg_tiket) VALUES (:nama_tiket, :hrg_tiket)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_tiket", $nama_tiket);
        $stmt->bindParam(":hrg_tiket", $hrg_tiket);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_tiket WHERE id_tiket=:id_tiket";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_tiket", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_tiket = $_POST['nama_tiket'];
        $hrg_tiket = $_POST['hrg_tiket'];
        $id_tiket = $_POST['id_tiket'];

        $sql = "UPDATE tb_tiket SET nama_tiket=:nama_tiket, hrg_tiket=:hrg_tiket WHERE id_tiket=:id_tiket";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_tiket", $nama_tiket);
        $stmt->bindParam(":hrg_tiket", $hrg_tiket);
        $stmt->bindParam(":id_tiket", $id_tiket);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_tiket WHERE id_tiket=:id_tiket";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_tiket", $id);
        $stmt->execute();

    }

}