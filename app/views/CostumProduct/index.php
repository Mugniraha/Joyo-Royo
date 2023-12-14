<div class="cont">
    <div class="pb">
      <a href="<?php echo URL; ?>/CostumProducts/create">+ Tambah Data</a>
    </div>
    <table>
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Tanggal Pemesanan</th>
                <th colspan="2">Bahan</th>
                <th rowspan="2">Warna</th>
                <th rowspan="3">Dimensi Produk</th>
                <th rowspan="2">Jumlah Pesanan</th>
                <th rowspan="2">Metode Pengiriman</th>  
                <th rowspan="2">Keterangan</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th></th>
                <th>Panjang</th>
                <th>Lebar</th>
                <th>Tinggi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1;
        foreach ($data['rows'] as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['tanggal_pemesanan']; ?></td>
                <td><?php echo $row['bahan']; ?></td>
                <td><?php echo $row['warna']; ?></td>
                <td><?php echo $row['panjang']; ?></td>
                <td><?php echo $row['lebar']; ?></td>
                <td><?php echo $row['tinggi']; ?></td>
                <td><?php echo $row['jumlah_pesanan']; ?></td>
                <td><?php echo $row['metode_pengiriman']; ?></td>
                <td><?php echo $row['keterangan']; ?></td>
                <td>
                <a href="<?php echo URL; ?>/CostumProducts/edit/<?php echo $row['pesanan_id']; ?>" class="btn">Edit</a>
                <a href="<?php echo URL; ?>/CostumProducts/delete/<?php echo $row['pesanan_id']; ?>" class="btn" onclick="return confirm('Yakin Mau Hapus ?')">Delete</a>                  
                </td>
            </tr>
            <?php $no++;
        } ?>
        </tbody>
    </table>
</div>
