<h2>Order Jasa Service</h2>

<a href="<?php echo URL; ?>/Orders/input" class="btn">Input Order</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NOMOR TELEPON</th>
            <th>JENIS JASA</th>
            <th>DESKRIPSI MASALAH</th>
            <th>LOKASI</th>
            <th>TANGGAL PENGERJAAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['telpon']; ?></td>
                  <td><?php echo $row['jenisJasa']; ?></td>
                  <td><?php echo $row['deskripsi']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['tanggal']; ?></td>
                  <td><a href="<?php echo URL; ?>/Orders/edit/<?php echo $row['order_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/Orders/delete/<?php echo $row['order_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>