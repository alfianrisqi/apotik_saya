    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="content">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="font-weight-bold mb-0">Gudang</h4>
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
                                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#tambahObat">
                                    <i class="ti-plus menu-icon">

                                    </i>Tambah Obat
                                </button>
                                <table class="table table">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Obat</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($gudang as $gd) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?>.</th>
                                                <td><?= $gd->obat; ?></td>
                                                <td><?= $gd->stok; ?></td>
                                                <td>Rp. <?= $gd->harga; ?></td>
                                                <td>
                                                    <a href="<?= base_url('gudang/edit_obat/' . $gd->id_obat) ?>"><i class="ti-pencil-alt menu-icon btn btn-success btn-sm"></i></a>
                                                    <a onclick="javascript: return confirm('Anda yakin hapus')" href="<?= base_url('gudang/hapus/' . $gd->id_obat) ?>"><i class="ti-trash menu-icon btn btn-danger btn-sm"></i></a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="tambahObat" tabindex="-1" aria-labelledby="tambahObatLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahObatLabel">Tambah Obat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form enctype="multipart/form-data" method="POST" action="<?= base_url('gudang/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <label for="obat">Obat</label>
                                        <input type="text" name="obat" placeholder="Obat" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="text" name="harga" placeholder="harga" class="form-control">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>