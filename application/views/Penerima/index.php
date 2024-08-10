<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

 

<!-- Content -->
<div class="m-3">

    <?= $this->session->flashdata('success'); ?>

    <div class="card rounded">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="mr-1">
                </div>
                <div class="dropdown mr-auto">
                    <button class="btn btn-warning <?php if ($cek_periode == 0) echo "disabled"; ?>" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-clock"></i> Periode <i class="bi bi-caret-down-fill"></i>
                    </button>
                    <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuButton">
                        <?php foreach ($periode as $p) : ?>
                            <a class="dropdown-item" href="<?php echo base_url('penerima/periode/') . $p['id_periode'] ?>">
                                <?php
                                $tgl_awal = date_create($p['tanggal_awal']);
                                $tgl_akhir = date_create($p['tanggal_akhir']);

                                echo  $p['nama_periode'] . ' (' . date_format($tgl_awal, ('d M Y')) . ' - ' . date_format($tgl_akhir, 'd M Y') . ')';
                                ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="example" class="table table-bordered text-center">
                    <thead style="font-size: 13px;">
                        <tr>
                            <th scope="col" class="align-middle">No</th>
                            <th scope="col" class="align-middle">Nama</th>
                            <th scope="col" class="align-middle">NIK</th>
                            <th scope="col" class="align-middle">Kelas</th>
                            <th scope="col" class="align-middle">Nama <br> OrangTua</th>
                            <th scope="col" class="align-middle">Pekerjaan</th>
                            <th scope="col" class="align-middle">Jumlah <br> Tanggungan<br></th>
                            <th scope="col" class="align-middle">Penghasilan</th>
                            <th scope="col" class="align-middle">Status <br> Siswa</th>
                            <th scope="col" class="align-middle">Status <br> Penerima</th>
                            <th scope="col" class="align-middle">Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 13px;">
                        <?php $no = 1; ?>
                        <?php foreach ($penerima as $p) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td class="text-left"><?= $p['nama']; ?></td>
                                <td><?= $p['nik']; ?></td>
                                <td><?= $p['kelas']; ?></td>
                                <td><?= $p['nama_orangtua']; ?></td>
                                <td><?= $p['pekerjaan']; ?></td>
                                <td><?= $p['tanggungan']; ?></td>
                                <td><?= $p['penghasilan']; ?></td>
                                <td><?= $p['status_siswa']; ?></td>
                                <td><?= $p['status']; ?></td>
                                <td style="width:30px;">
								<a href="<?= base_url('penerima/hapus_penerima/') . $p['id_penerima']; ?>" class="btn btn-danger" style="height: 38px;"><i class="bi bi-trash pt-2"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
