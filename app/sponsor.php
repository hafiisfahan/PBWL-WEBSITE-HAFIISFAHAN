<?php

namespace App;
use Inc\Koneksi as Koneksi;

class sponsor extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_sponsor";
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
        $nama_sponsor = $_POST['nama_sponsor'];
        $hrg_sponsor = $_POST['hrg_sponsor'];

        $sql = "INSERT INTO tb_sponsor (nama_sponsor, hrg_sponsor) VALUES (:nama_sponsor, :hrg_sponsor)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_sponsor", $nama_sponsor);
        $stmt->bindParam(":hrg_sponsor", $hrg_sponsor);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_sponsor WHERE id_sponsor=:id_sponsor";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_sponsor", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_sponsor = $_POST['nama_sponsor'];
        $hrg_sponsor = $_POST['hrg_sponsor'];
        $id_sponsor = $_POST['id_sponsor'];

        $sql = "UPDATE tb_sponsor SET nama_sponsor=:nama_sponsor, hrg_sponsor=:hrg_sponsor WHERE id_sponsor=:id_sponsor";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_sponsor", $nama_sponsor);
        $stmt->bindParam(":hrg_sponsor", $hrg_sponsor);
        $stmt->bindParam(":id_sponsor", $id_sponsor);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_sponsor WHERE id_sponsor=:id_sponsor";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_sponsor", $id);
        $stmt->execute();

    }

}