<h2>Form Order</h2>

<form action="<?php echo URL; ?>/Orders/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>NOMOR TELEPON</td>
            <td><input type="number" name="telpon" required></td>
        </tr>
        <tr>
            <td>Jenis Jasa</td>
            <td><input type="text" name="jenisJasa" required></td>
        </tr>
        <tr>
            <td>DESKRIPSI MASALAH</td>
            <td><input type="text" name="deskripsi" required></td>
        </tr>
        <tr>
            <td>LOKASI</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>TANGGAL PENGERJAAN</td>
            <td><input type="date" name="tanggal" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>