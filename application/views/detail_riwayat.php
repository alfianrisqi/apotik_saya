    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="content">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="font-weight-bold mb-0">Detail Riwayat</h4>

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
                                <table class="table">
                                    <tr>
                                        <td>Nama Pasien</td>
                                        <td>:</td>
                                        <td><?= $samlong['pasien']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td><?= $samlong['alamat']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telepon</td>
                                        <td>:</td>
                                        <td><?= $samlong['no_telp']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pembelian</td>
                                        <td>:</td>
                                        <td><?= $samlong['tanggal_pembelian']; ?></td>
                                    </tr>
                                </table>
                                <br>
                                <section class="content">
                                    <table class="table">
                                        <thead>
                                            <tr style="text-align:center;">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama obat</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Total Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php $total_harga = 0; ?>
                                            <?php $jumlah = 0; ?>
                                            <?php foreach ($detail as $dtl) : ?>
                                                <tr style="text-align:center;">
                                                    <td><?= $i; ?></td>
                                                    <td><?= $dtl['obat']; ?></td>
                                                    <td>Rp. <?= number_format($dtl['harga']); ?></td>
                                                    <td><?= $dtl['jumlah']; ?></td>
                                                    <td>Rp. <?= number_format($dtl['total_harga']); ?></td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php $jumlah += $dtl['jumlah'] ?>
                                                <?php $total_harga += $dtl['total_harga'] ?>
                                            <?php endforeach; ?>
                                            <tr style="font-weight:bold; text-align:center;">
                                                <td colspan="3">Jumlah Total </td>
                                                <td><?= $jumlah; ?></td>
                                                <td>Rp. <?= number_format($total_harga); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>