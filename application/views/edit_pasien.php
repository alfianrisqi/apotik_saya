    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="content">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="font-weight-bold mb-0">Edit Pasien</h4>
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
                                <div class="form-group">
                                    <?php foreach ($pasien as $psn) : ?>
                                        <form enctype="multipart/form-data" class="col-lg" method="post" action="<?= base_url() . 'pasien/update/' . $psn->id; ?>">
                                            <div class="form-group">
                                                <label for="pasien" style="color:aliceblue ;">Pasien</label>
                                                <input type="text" class="form-control" id="pasien" name="pasien" placeholder="Pasien" value="<?php echo $psn->pasien ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat" style="color:aliceblue ;">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $psn->alamat ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="no_telp" style="color:aliceblue ;">No. Telp</label>
                                                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. Telp" value="<?php echo $psn->no_telp ?>">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="<?= base_url('pasien') ?>"><i class="btn btn-success">Kembali</i></a>
                                        </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>