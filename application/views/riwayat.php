    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="content">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="font-weight-bold mb-0">Riwayat</h4>
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

                                <section class="content">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Pasien</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No. Telp</th>
                                                <th scope="col">Tgl. Pembelian</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($riwayat as $dtl) : ?>
                                                <tr>
                                                    <th><?= $i; ?></th>
                                                    <td><?= $dtl['pasien']; ?></td>
                                                    <td><?= $dtl['alamat']; ?></td>
                                                    <td><?= $dtl['no_telp']; ?></td>
                                                    <td><?= $dtl['tanggal_pembelian']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('riwayat/detail_riwayat/' . $dtl['id']) ?>"><i class="ti-search menu-icon btn btn-warning"></i></a>
                                                        <a onclick="javascript: return confirm('Anda yakin hapus')" href="<?= base_url('riwayat/hapus/' . $dtl['id']) ?>"><i class="ti-trash menu-icon btn btn-danger"></i></a>
                                                        <a onclick="window.print('riwayat/print/' . $dtl['id'])" href="<?= base_url('riwayat/print/' . $dtl['id']) ?>"><i class="ti-printer menu-icon btn btn-success"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>