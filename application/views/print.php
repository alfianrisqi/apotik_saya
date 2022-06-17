<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h4>APOTEK PANJUL</h4>
    <H4>KALIMANTAN SELATAN</H4>

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
    <table border="1" cellspacing="0" cellpadding="10" class="table" align="center" style="width:100% ;">
        <thead>
            <tr>
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
                <tr style="text-align:center ;">
                    <td><?= $i; ?></td>
                    <td><?= $dtl['obat']; ?></td>
                    <td>Rp. <?= $dtl['harga']; ?></td>
                    <td><?= $dtl['jumlah']; ?></td>
                    <td>Rp. <?= $dtl['total_harga']; ?></td>
                </tr>
                <?php $i++; ?>
                <?php $jumlah += $dtl['jumlah'] ?>
                <?php $total_harga += $dtl['total_harga'] ?>
            <?php endforeach; ?>
            <tr style="font-weight:bold; text-align:center;">
                <td colspan="3">Jumlah Total</td>
                <td><?= $jumlah; ?></td>
                <td>Rp. <?= number_format($total_harga); ?></td>
            </tr>
        </tbody>
    </table>

    <script>
        window.print();
    </script>
</body>

</html>