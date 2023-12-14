<form action="<?php echo URL; ?>/CostumProducts/update" method='post'>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="<?php echo URL; ?>/CostumProducts/index" class="btn btn-secondary">Kembali</a>
        <div class="input1">
        <input type="hidden" name="pesanan_id" value="<?php echo $data['row']['pesanan_id']; ?>">
            <div class="mb-3">
            
                <label for="bahan" class="form-label">Bahan</label>
                <select class="form-select" id="bahan" name="bahan">
                    <option value="" selected disabled><?php echo $data['row']['bahan']; ?></option>
                    <option value="Baja">Baja</option>
                    <option value="Holow">Holow</option>
                    <option value="Alumunium">Alumunium</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label">Warna</label>
                <select class="form-select" id="warna" name="warna">
                    <option value="" selected disabled><?php echo $data['row']['warna']; ?></option>
                    <option value="Hitam">Hitam</option>
                    <option value="Silver">Silver</option>
                    <option value="Putih">Putih</option>
                </select>
            </div>
        </div>
        <div class="size">
            <div class="mb-4">
                <label for="panjang" class="form-label">Panjang</label>
                <input type="number" class="form-control" id="panjang" name="panjang" placeholder="" value="<?php echo $data['row']['panjang']; ?>">
            </div>
            <div class="mb-4">
                <label for="lebar" class="form-label">Lebar</label>
                <input type="number" class="form-control" id="lebar" name="lebar" placeholder="" value="<?php echo $data['row']['lebar']; ?>">
            </div>
            <div class="mb-4">
                <label for="tinggi" class="form-label">Tinggi</label>
                <input type="number" class="form-control" id="tinggi" name="tinggi" placeholder="" value="<?php echo $data['row']['tinggi']; ?>">
            </div>
        </div>
        <div class="input2">
            <div class="mb-3">
                <label for="jumlah_pesanan" class="form-label">Jumlah Pesanan</label>
                <input type="number" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" placeholder="" value="<?php echo $data['row']['jumlah_pesanan']; ?>">
            </div>
            <div class="mb-3">
                <label for="pengiriman" class="form-label">Metode Pengiriman</label>
                <select class="form-select" id="metode_pengiriman" name="metode_pengiriman">
                    <option value="" selected disabled><?php echo $data['row']['metode_pengiriman']; ?></option>
                    <option value="Ambil Ditempat">Ambil Ditempat</option>
                    <option value="Jasa Antar">Jasa Antar</option>
                </select>
            </div>
        </div>
        <div class="input3">
        <div class="mb-3">
                <label for="deskripsi" class="form-label">Tanggal Pemesanan</label>
                <input type="date" class="form-control" id="date" name="tanggal_pemesanan" placeholder="" value="<?php echo $data['row']['tanggal_pemesanan']; ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Keterangan Tambahan</label>
                <textarea class="form-control" id="deskripsi" name="keterangan" rows="6" placeholder="Masukkan deskripsi" ><?php echo $data['row']['keterangan']; ?></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>