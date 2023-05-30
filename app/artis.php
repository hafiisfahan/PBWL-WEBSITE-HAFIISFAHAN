<?php

namespace App;
use Inc\Koneksi as Koneksi;

class artis extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_artis";
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
        $nama_artis = $_POST['nama_artis'];
        $hrg_artis = $_POST['hrg_artis'];

        $sql = "INSERT INTO tb_artis (nama_artis, hrg_artis) VALUES (:nama_artis, :hrg_artis)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_artis", $nama_artis);
        $stmt->bindParam(":hrg_artis", $hrg_artis);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_artis WHERE id_artis=:id_artis";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_artis", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_artis = $_POST['nama_artis'];
        $hrg_artis = $_POST['hrg_artis'];
        $id_artis = $_POST['id_artis'];

        $sql = "UPDATE tb_artis SET nama_artis=:nama_artis, hrg_artis=:hrg_artis WHERE id_artis=:id_artis";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_artis", $nama_artis);
        $stmt->bindParam(":hrg_artis", $hrg_artis);
        $stmt->bindParam(":id_artis", $id_artis);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_artis WHERE id_artis=:id_artis";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_artis", $id);
        $stmt->execute();

    }

}