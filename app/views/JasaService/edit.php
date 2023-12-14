<h2>Edit Form</h2>

<form action="<?php echo URL; ?>/Orders/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['order_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>NOMOR TELEPON</td>
            <td><input type="number" name="telpon" value="<?php echo $data['row']['telpon']; ?>" required></td>
        </tr>
        <tr>
            <td>Jenis Jasa</td>
            <td><input type="text" name="jenisJasa" value="<?php echo $data['row']['jenisJasa']; ?>" required></td>
        </tr>
        <tr>
            <td>DESKRIPSI MASALAH</td>
            <td><input type="text" name="deskripsi" value="<?php echo $data['row']['deskripsi']; ?>" required></td>
        </tr>
        <tr>
            <td>LOKASI</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>TANGGAL PENGERJAAN</td>
            <td><input type="date" name="tanggal" value="<?php echo $data['row']['tanggal']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>