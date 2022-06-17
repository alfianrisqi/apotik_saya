<?php
$conn = mysqli_connect("localhost", "root", "", "apotek_sarpen");
$query = ("SELECT * FROM pasien");
$result = mysqli_query($conn, $query);
?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="content">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Pasien</h4>
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
                            <div class="container-wrapper">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahObat">
                                    <i class="ti-plus menu-icon">

                                    </i>Tambah Pasien
                                </button>
                                <table class="table table">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Pasien</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No. Telp</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php while ($pasien = mysqli_fetch_assoc($result)) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?>.</th>
                                                <td><?= $pasien['pasien']; ?></td>
                                                <td><?= $pasien['alamat']; ?></td>
                                                <td><?= $pasien['no_telp']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('pasien/edit_pasien/' . $pasien['id']) ?>"><i class="ti-pencil-alt btn btn-success"></i></a>
                                                    <a onclick="javascript: return confirm('Anda yakin hapus')" href="<?= base_url('pasien/hapus/' . $pasien['id']) ?>"><i class="ti-trash btn btn-danger"></i></a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Button trigger modal -->

                            <!-- Modal -->
                            <div class="modal fade" id="tambahObat" tabindex="-1" aria-labelledby="tambahObatLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tambahObatLabel">Tambah Pasien</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form enctype="multipart/form-data" method="POST" action="<?= base_url('pasien/tambah_aksi') ?>">
                                                <div class="form-group">
                                                    <label for="pasien">Pasien</label>
                                                    <input type="text" name="pasien" placeholder="Pasien" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_telp">No. Telp</label>
                                                    <input type="text" name="no_telp" placeholder="No. Telp" class="form-control">
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
                </div>
            </div>
        </div>
    </div>