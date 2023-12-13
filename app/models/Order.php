<?php

namespace App\Models;

use App\Core\Model;

class Order extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_order";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
            $nama = $_POST['nama'];
            $telpon = $_POST['telpon'];
            $jenisJasa = $_POST['jenisJasa'];
            $deskripsi = $_POST['deskripsi'];
            $alamat = $_POST['alamat'];
            $tanggal = $_POST['tanggal'];

          $sql = "INSERT INTO tb_order
            SET nama=:nama, telpon=:telpon, jenisJasa=:jenisJasa, deskripsi=:deskripsi, alamat=:alamat, tanggal=:tanggal";
          $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":telpon", $telpon);
            $stmt->bindParam(":jenisJasa", $jenisJasa);
            $stmt->bindParam(":deskripsi", $deskripsi);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":tanggal", $tanggal);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_order WHERE order_id=:order_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":order_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
        {
            $nama = $_POST['nama'];
            $telpon = $_POST['telpon'];
            $jenisJasa = $_POST['jenisJasa'];
            $deskripsi = $_POST['deskripsi'];
            $alamat = $_POST['alamat'];
            $tanggal = $_POST['tanggal'];
            $id = $_POST['id'];

          $sql = "UPDATE tb_order
          SET nama=:nama, telpon=:telpon, jenisJasa=:jenisJasa, deskripsi=:deskripsi, alamat=:alamat, tanggal=:tanggal WHERE order_id=:order_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":telpon", $telpon);
          $stmt->bindParam(":jenisJasa", $jenisJasa);
          $stmt->bindParam(":deskripsi", $deskripsi);
          $stmt->bindParam(":alamat", $alamat);
          $stmt->bindParam(":tanggal", $tanggal);
          $stmt->bindParam(":order_id", $id);

          $stmt->execute();
     }

     public function delete($id)
      {
            $sql = "DELETE FROM tb_order WHERE order_id=:order_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":order_id", $id);
            $stmt->execute();
      }
}
