    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="content">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="font-weight-bold mb-0">Pembelian Obat</h4>
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
                                <div class="page-content">
                                    <!-- Page Header-->
                                    <section class="content m-2">

                                        <div class="container-fluid">
                                            <form class="col-lg" method="post" action="<?= base_url('pemesanan/tambah') ?>">
                                                <div class="form-group">
                                                    <label for="">Pasien</label>
                                                    <select name="pasien" id="pasien" class="form-control" onchange="ambil_pasien()">
                                                        <option value="" class="form-control">Pilih Pasien</option>
                                                        <?php foreach ($pasien as $psn) : ?>
                                                            <option value="<?= $psn['pasien'] ?>" data-alamat="<?= $psn['alamat'] ?>" data-no-telp="<?= $psn['no_telp'] ?>"><?= $psn['pasien'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_telp">Nomor Telepon</label>
                                                    <input type="text" class="form-control" id="no-telp" name="no_telp" placeholder="Nomor Telepon" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal_pembelian">Tanggal Pembelian</label>
                                                    <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian" placeholder="Tanggal">
                                                </div>
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="color:black;">No</th>
                                                            <th scope="col" style="color:black;">Obat</th>
                                                            <th scope="col" style="color:black;">Harga</th>
                                                            <th scope="col" style="color:black;">Jumlah</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1.</th>
                                                            <td>
                                                                <select name="obat[]" id="obat-1" class="form-control" onchange="ambil_harga(1)">
                                                                    <option style="color:black ;" class="form-control">Pilih Obat</option>
                                                                    <?php foreach ($gudang as $gd) : ?>
                                                                        <option style="color:black ;" value="<?= $gd['id_obat'] ?>" data-harga="<?= $gd['harga']; ?>"><?= $gd['obat']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input style="color:black ;" type="text" id="harga-1" name="harga[]" class="form-control" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="text" id="jumlah-1" name="jumlah[]" class="form-control">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2.</th>
                                                            <td>
                                                                <select name="obat[]" id="obat-2" class="form-control" onchange="ambil_harga(2)">
                                                                    <option value="">Pilih Obat</option>
                                                                    <?php foreach ($gudang as $gd) : ?>
                                                                        <option value="<?= $gd['id_obat'] ?>" data-harga="<?= $gd['harga']; ?>"><?= $gd['obat']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input style="color:black ;" type="text" id="harga-2" name="harga[]" class="form-control" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="text" id="jumlah-2" name="jumlah[]" class="form-control">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3.</th>
                                                            <td>
                                                                <select name="obat[]" id="obat-3" class="form-control" onchange="ambil_harga(3)">
                                                                    <option value="">Pilih Obat</option>
                                                                    <?php foreach ($gudang as $gd) : ?>
                                                                        <option value="<?= $gd['id_obat'] ?>" data-harga="<?= $gd['harga']; ?>"><?= $gd['obat']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input style="color:black ;" type="text" id="harga-3" name="harga[]" class="form-control" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="text" id="jumlah-3" name="jumlah[]" class="form-control">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>

                                        <!-- Button trigger modal -->
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $('#obat-1').on('change', function() {

        })

        function ambil_harga(id) {
            let harga = $(`#obat-${id} option:selected`).data('harga')
            $(`#harga-${id}`).val(harga)
        }

        function ambil_pasien() {
            let alamat = $(`#pasien option:selected`).data(`alamat`)
            let no_telp = $(`#pasien option:selected`).data(`no-telp`)

            $(`#alamat`).val(alamat)
            $(`#no-telp`).val(no_telp)
        }
    </script>