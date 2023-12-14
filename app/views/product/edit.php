<h2>Edit Form</h2>

<form action="<?php echo URL; ?>/Products/update" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Gambar</label>
        <input type="hidden" name="id" value="<?php echo $data['row']['id_product']; ?>">
        <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="<?php echo $data['row']['gambar']; ?>">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="kategori" placeholder="" value="<?php echo $data['row']['kategori']; ?>">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="nama_product" placeholder="" value="<?php echo $data['row']['nama_product']; ?>">
    </div>

    <div class="row gx-3 mb-3 gy-2 align-items-center">
        <label for="formGroupExampleInput2" class="form-label">Dimensi</label>
        <div class="col-sm-4">
            <div class="input-group">
                <div class="input-group-text">P</div>
                <input type="text" class="form-control" name="panjang" id="specificSizeInputGroupUsername" placeholder="Panjang(cm)" value="<?php echo $data['row']['panjang']; ?>">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="input-group">
                <div class="input-group-text">L</div>
                <input type="text" class="form-control" name="lebar" id="specificSizeInputGroupUsername" placeholder="Lebar(cm)" value="<?php echo $data['row']['lebar']; ?>">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="input-group">
                <div class="input-group-text">T</div>
                <input type="text" class="form-control" name="tinggi" id="specificSizeInputGroupUsername" placeholder="Tinggi(cm)" value="<?php echo $data['row']['tinggi']; ?>">
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
        <textarea type="text" class="form-control" id="formGroupExampleInput2" name="deskripsi" placeholder="" value=""><?php echo $data['row']['deskripsi']; ?></textarea>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Harga</label>
        <input type="number" class="form-control" id="formGroupExampleInput2" name="harga" placeholder="" value="<?php echo $data['row']['harga']; ?>">
    </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>