<h2>Form Order</h2>

                <form action="<?php echo URL; ?>/Products/save" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="kategori" placeholder="" value="">gambar
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="nama_product" placeholder="" value=" ">
                    </div>
                    <div class="row gx-3 mb-3 gy-2 align-items-center">
                        <label for="formGroupExampleInput2" class="form-label">Dimensi</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <div class="input-group-text">P</div>
                                <input type="text" class="form-control" name="panjang" id="specificSizeInputGroupUsername" placeholder="Panjang(cm)">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <div class="input-group-text">L</div>
                                <input type="text" class="form-control" name="lebar" id="specificSizeInputGroupUsername" placeholder="Lebar(cm)">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <div class="input-group-text">T</div>
                                <input type="text" class="form-control" name="tinggi" id="specificSizeInputGroupUsername" placeholder="Tinggi(cm)">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
                        <textarea type="text" class="form-control" id="formGroupExampleInput2" name="deskripsi" placeholder="" value=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="formGroupExampleInput2" name="harga" placeholder="" value="">
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
</form>