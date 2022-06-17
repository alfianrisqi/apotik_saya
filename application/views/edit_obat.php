    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="content">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="font-weight-bold mb-0">Edit Obat</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="container-wrapper">
                                <?php foreach ($gudang as $gd) : ?>
                                    <form enctype="multipart/form-data" class="col-lg" method="post" action="<?= base_url() . 'gudang/update/' . $gd->id_obat; ?>">
                                        <div class="form-group">
                                            <label for="obat" style="color:black ;">Obat</label>
                                            <input type="text" class="form-control" id="obat" name="obat" placeholder="Nomor Struk" value="<?php echo $gd->obat ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="harga" style="color:black ;">Harga</label>
                                            <input type=" text" class="form-control" id="harga" name="harga" placeholder="Nomor Struk" value="<?php echo $gd->harga ?>">
                                        </div><br>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="<?= base_url('gudang') ?>"><i class="btn btn-success">Kembali</i></a>
                                    </form>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>