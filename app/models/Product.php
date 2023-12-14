<?php

namespace App\Models;

use App\Core\Model;
use PDO;

class Product extends Model
{

    public function show()
    {
        $query = "SELECT * FROM tb_products";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    // public function optCat()
    // {
    //       $query = "SELECT * FROM tb_categories";
    //     $stmt = $this->db->prepare($query);
    //     $stmt->execute();

    //     return $this->selects($stmt);
    // }

    // public function save()
    // {
    //     $post_id_cat = $_POST['post_id_cat'];
    //     $post_title = $_POST['post_title'];
    //     $post_text = $_POST['post_text'];
        
    //     $sql = "INSERT INTO tb_posts
    //     SET post_id_cat=:post_id_cat, post_title=:post_title, post_text=:post_text";
    //     $stmt = $this->db->prepare($sql);

    //     $stmt->bindParam(":post_id_cat", $post_id_cat);
    //     $stmt->bindParam(":post_title", $post_title);
    //     $stmt->bindParam(":post_text", $post_text);

    //     $stmt->execute();
    // }

    public function save()
    {
        $kategori = $_POST['kategori'];
        $nama_product = $_POST['nama_product'];
        $panjang = $_POST['panjang'];
        $tinggi = $_POST['tinggi'];
        $lebar = $_POST['lebar'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];

        $gambar = $_FILES['gambar']['name'];
        $gambar_tmp = $_FILES['gambar']['tmp_name'];
        $upload_dir = 'layouts/assets/img/';
    
        move_uploaded_file($gambar_tmp, $upload_dir . $gambar);

        $sql = "INSERT INTO tb_products
        SET gambar=:gambar, kategori=:kategori, nama_product=:nama_product, panjang=:panjang, tinggi=:tinggi, lebar=:lebar, deskripsi=:deskripsi, harga=:harga";
        $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":gambar", $gambar);
            $stmt->bindParam(":kategori", $kategori);
            $stmt->bindParam(":nama_product", $nama_product);
            $stmt->bindParam(":panjang", $panjang);
            $stmt->bindParam(":tinggi", $tinggi);
            $stmt->bindParam(":lebar", $lebar);
            $stmt->bindParam(":deskripsi", $deskripsi);
            $stmt->bindParam(":harga", $harga);

        $stmt->execute();
    }

    public function edit($id)
    {
        $query = "SELECT * FROM tb_products WHERE id_product=:id_product";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":id_product", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $kategori = $_POST['kategori'];
        $nama_product = $_POST['nama_product'];
        $panjang = $_POST['panjang'];
        $tinggi = $_POST['tinggi'];
        $lebar = $_POST['lebar'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $id = $_POST['id'];
    
        // Ambil data gambar lama dari database
        $sqlSelect = "SELECT gambar FROM tb_products WHERE id_product=:id_product";
        $stmtSelect = $this->db->prepare($sqlSelect);
        $stmtSelect->bindParam(":id_product", $id);
        $stmtSelect->execute();
        $row = $stmtSelect->fetch(PDO::FETCH_ASSOC);
        $gambarLama = $row['gambar'];
    
        // Hapus gambar lama jika ada
        if (!empty($gambarLama)) {
            $pathGambarLama = 'layouts/assets/img/' . $gambarLama;
            if (file_exists($pathGambarLama)) {
                unlink($pathGambarLama);
            }
        }
    
        // Upload gambar baru
        $gambarBaru = $_FILES['gambar']['name'];
        $gambarBaruTmp = $_FILES['gambar']['tmp_name'];
        $uploadDir = 'layouts/assets/img/';
    
        // Pindahkan file yang diunggah ke folder yang diinginkan
        move_uploaded_file($gambarBaruTmp, $uploadDir . $gambarBaru);
    
        // Update data produk dengan gambar baru
        $sqlUpdate = "UPDATE tb_products
            SET gambar=:gambar, kategori=:kategori, nama_product=:nama_product, panjang=:panjang, tinggi=:tinggi, lebar=:lebar, deskripsi=:deskripsi, harga=:harga
            WHERE id_product=:id_product";
        $stmtUpdate = $this->db->prepare($sqlUpdate);
    
        $stmtUpdate->bindParam(":gambar", $gambarBaru);
        $stmtUpdate->bindParam(":kategori", $kategori);
        $stmtUpdate->bindParam(":nama_product", $nama_product);
        $stmtUpdate->bindParam(":panjang", $panjang);
        $stmtUpdate->bindParam(":tinggi", $tinggi);
        $stmtUpdate->bindParam(":lebar", $lebar);
        $stmtUpdate->bindParam(":deskripsi", $deskripsi);
        $stmtUpdate->bindParam(":harga", $harga);
        $stmtUpdate->bindParam(":id_product", $id);
    
        $stmtUpdate->execute();
    }
    

    public function getGambarById($id)
    {
        $sql = "SELECT gambar FROM tb_products WHERE id_product=:id_product";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_product", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return isset($result['gambar']) ? $result['gambar'] : null;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_products WHERE id_product=:id_product";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id_product", $id);
        $stmt->execute();
    }
}
