<h2>produk</h2>

<a href="<?php echo URL; ?>/Products/input" class="btn">Input Order</a>

<table id="dtb">
    <thead>
        <tr class="my-auto">
            <th rowspan="2" class="align-middle">No</th>
            <th rowspan="2" class="align-middle">Gambar</th>
            <th rowspan="2" class="align-middle">kategori</th>
            <th rowspan="2" class="align-middle">Nama produk</th>
            <th colspan="3" class="text-center">Dimensi (cm)</th>
            <th rowspan="2" class="align-middle">Deskripsi</th>
            <th rowspan="2" class="align-middle">Harga</th>
            <th rowspan="2" class="align-middle">Aksi</th>
        </tr>
        <tr>
            <th>Panjang</th>
            <th>Lebar</th>
            <th>Tinggi</th>
        </tr>
    </thead>`

    <?php $no = 1;
    foreach ($data['rows'] as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><img src="layouts/assets/img/<?php echo $row['gambar']; ?>" alt="" width="60%"></td>
                <td><?php echo $row['kategori']; ?></td>
                <td><?php echo $row['nama_product']; ?></td>
                <td><?php echo $row['panjang']; ?></td>
                <td><?php echo $row['tinggi']; ?></td>
                <td><?php echo $row['lebar']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td>
                    <a href="<?php echo URL; ?>/Products/edit/<?php echo $row['id_product']; ?>" class="btn">Edit</a>
                    <br> <br>
                    <a href="<?php echo URL; ?>/Products/delete/<?php echo $row['id_product']; ?>" class="btn" onclick="return confirm('Are you sure?')" style="margin-top: 5px;">Delete</a>
                </td>
            </tr>
    <?php $no++;
    } ?>

</table>