    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="content">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="font-weight-bold mb-0">Tambah data faktur</h4>
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
                                    <section>

                                        <div class="container-fluid">
                                            <form class="col-lg" method="post" action="<?= base_url('faktur/tambah_faktur') ?>">
                                                <div class="form-group">
                                                    <label for="no_struk">No. Struk</label>
                                                    <input type="text" class="form-control" id="no_struk" name="no_struk" placeholder="Nomor Struk">
                                                </div><br>
                                                <div class="form-group">
                                                    <label for="supplier">Supplier</label>
                                                    <input type="text" class="form-control" id="supplier" name="supplier" placeholder="Supplier">
                                                </div><br>
                                                <div class="form-group">
                                                    <label for="tanggal_pembelian">Tanggal Pembelian</label>
                                                    <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian" placeholder="Tanggal">
                                                </div><br>
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
                                                                <select name="obat[]" id="obat-1" style="color:black ;" class="form-control" onchange="ambil_harga(1)">
                                                                    <option>Pilih Obat</option>
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
                                                                <select style="color:black ;" name="obat[]" id="obat-2" class="form-control" onchange="ambil_harga(2)">
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
                                                                <select style="color:black ;" name="obat[]" id="obat-3" class="form-control" onchange="ambil_harga(3)">
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
                                                <button class="btn btn-primary">Simpan</button>
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
    </script>