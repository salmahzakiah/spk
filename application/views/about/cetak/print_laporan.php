<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <style>
        .tabelAtas {
            text-align: center;
        }
    </style>
    <script>
        window.print();
    </script>
</head>


<body>
    <div align="center">
        <h2> Laporan Penerimaan Dana Bantuan Pendidikan</h2>
        <!-- <div align="left">
            <div class="d-flex flex-row">
                <div class="">
                    Periode : <?= $dari; ?>
                </div>
                <div class="mx-2">
                    <span>-</span>
                </div>
                <div class="">
                    <?= $sampai; ?>
                </div>
            </div>
        </div> -->
        <table class="tabelAtas mt-5">
            <tr>
                <th rowspan="5">
                    <img src="<?= base_url('assets/img/profile/logo.jpeg'); ?>" height="100px">
                </th>
            </tr>
                <td style="font-size: 28px;">MADRASAH IBTIDAIYAH AT-TAUBAH</td>
            </tr>
            <tr>
                <td style="font-size: 28px;">(MIAT)</td>
            </tr>
            <tr>
                <td>NOTARIS : YUNITA ARISTINA, SH. M.Kn No.AHU-006.AH.O2.O2-Th.2013</td>
            </tr>
            <tr>
                <td>Sekretariat : Jl Kemakmuran No.7 Kel.Margajaya Bekasi Selatan Telp.(021)8896 4612</td>
            </tr>
        </table>
        <hr>
        <br>
        <table border="1" style="width: 100%; text-align: center;" class="mt-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Nama<br>OrangTua</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status Penerima</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $total_dana = 0;
                foreach ($penerima as $p) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td style="text-align: left;"><?= $p['nama']; ?></td>
                        <td style="text-align: left;"><?= $p['nik']; ?></td>
						<td style="text-align: left;"><?= $p['kelas']; ?></td>
                        <td style="text-align: left;"><?= $p['nama_orangtua']; ?></td>
                        <td style="text-align: left;"><?= $p['alamat']; ?></td>
                        <td><?= $p['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br><br>
        <div align="Right" class="mt-5">
            <table>
                <tr>
                    <td>Bekasi, <?php echo date("d M Y") ?></td>
                </tr>
                <tr>
                    <td>Kepala MI AT-TAUBAH</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><?= $nama_terang; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
