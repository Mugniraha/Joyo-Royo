<?php

namespace App\Models;

use App\Core\Model;

class CostumProduct extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_pesanan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
            $bahan = $_POST['bahan'];
            $warna = $_POST['warna'];
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $tinggi = $_POST['tinggi'];
            $jumlah_pesanan = $_POST['jumlah_pesanan'];
            $metode_pengiriman = $_POST['metode_pengiriman'];
            $keterangan = $_POST['keterangan'];
            $tanggal_pemesanan = $_POST['tanggal_pemesanan'];

          $sql = "INSERT INTO tb_pesanan
            SET bahan=:bahan, warna=:warna, panjang=:panjang, lebar=:lebar, tinggi=:tinggi, jumlah_pesanan=:jumlah_pesanan, metode_pengiriman=:metode_pengiriman, keterangan=:keterangan, tanggal_pemesanan=:tanggal_pemesanan";
          $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":bahan", $bahan);
            $stmt->bindParam(":warna", $warna);
            $stmt->bindParam(":panjang", $panjang);
            $stmt->bindParam(":lebar", $lebar);
            $stmt->bindParam(":tinggi", $tinggi);
            $stmt->bindParam(":jumlah_pesanan", $jumlah_pesanan);
            $stmt->bindParam(":metode_pengiriman", $metode_pengiriman);
            $stmt->bindParam(":keterangan", $keterangan);
            $stmt->bindParam(":tanggal_pemesanan", $tanggal_pemesanan);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_pesanan WHERE pesanan_id=:pesanan_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":pesanan_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
        {
            $bahan = $_POST['bahan'];
            $warna = $_POST['warna'];
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $tinggi = $_POST['tinggi'];
            $tanggal = $_POST['jumlah_pesanan'];
            $metode_pengiriman = $_POST['metode_pengiriman'];
            $keterangan = $_POST['keterangan'];
            $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
            $id = $_POST['pesanan_id'];

          $sql = "UPDATE tb_pesanan
          SET bahan=:bahan, warna=:warna, panjang=:panjang, lebar=:lebar, tinggi=:tinggi, jumlah_pesanan=:jumlah_pesanan, metode_pengiriman=:metode_pengiriman, keterangan=:keterangan, tanggal_pemesanan=:tanggal_pemesanan WHERE pesanan_id=:pesanan_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":bahan", $bahan);
          $stmt->bindParam(":warna", $warna);
          $stmt->bindParam(":panjang", $panjang);
          $stmt->bindParam(":lebar", $lebar);
          $stmt->bindParam(":tinggi", $tinggi);
          $stmt->bindParam(":jumlah_pesanan", $tanggal);
          $stmt->bindParam(":metode_pengiriman", $metode_pengiriman);
          $stmt->bindParam(":keterangan", $keterangan);
          $stmt->bindParam(":tanggal_pemesanan", $tanggal_pemesanan);
          $stmt->bindParam(":pesanan_id", $id);

          $stmt->execute();
     }

     public function delete($id)
      {
            $sql = "DELETE FROM tb_pesanan WHERE pesanan_id=:pesanan_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":pesanan_id", $id);
            $stmt->execute();
      }
}
