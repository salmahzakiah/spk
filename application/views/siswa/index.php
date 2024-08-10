<!-- DataTales Example -->
<div class="container mt-3">
	<div class="card shadow mb-5">
		<div class="card-header py-3 d-flex justify-content-between">
		  	<h6 class="m-0 font-weight-bold text-primary"><?= $title_page; ?></h6>
		</div>
			<div class="m-3">
        <div class="card rounded">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="mr-1">
                        <a href="<?= base_url('siswa/tambah_siswa/') . $id_periode; ?>" class="btn btn-success <?php if ($cek_periode == 0) echo "disabled"; ?>"><i class="bi bi-plus-lg"></i> Tambah</span></a>
                    </div>
                    <div class="dropdown mr-auto">
                        <button class="btn btn-warning <?php if ($cek_periode == 0) echo "disabled"; ?>" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-clock"></i> Periode <i class="bi bi-caret-down-fill"></i>
                        </button>
                        <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuButton">
                            <?php foreach ($periode as $p) : ?>
                                <a class="dropdown-item" href="<?php echo base_url('siswa/periode/') . $p['id_periode'] ?>">
                                    <?php
                                    $tgl_awal = date_create($p['tanggal_awal']);
                                    $tgl_akhir = date_create($p['tanggal_akhir']);

                                    echo $p['nama_periode'] . " (" . date_format($tgl_awal, ('d M Y')) . ' - ' . date_format($tgl_akhir, 'd M Y') . ")";
                                    ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <?= $this->session->flashdata('import'); ?>

                <hr>
                <div class="table-responsive">
                    <table id="example" class="table table-bordered text-center">
                        <thead style="font-size: 11px;">
                            <tr>
                                <th scope="col" class="align-middle">No</th>
                                <th scope="col" class="align-middle">Nama</th>
                                <th scope="col" class="align-middle">NIK</th>
                                <th scope="col" class="align-middle">Alamat</th>
                                <th scope="col" class="align-middle">Kelas</th>
                                <th scope="col" class="align-middle">Nama <br> OrangTua</th>
                                <th scope="col" class="align-middle">Pekerjaan</th>
                                <th scope="col" class="align-middle">Penghasilan Rata-Rata</th>
                                <th scope="col" class="align-middle">Jumlah<br> Saudara <br></th>
                                <th scope="col" class="align-middle">Status <br> Siswa</th>
                                <th scope="col" class="align-middle">Jarak Rumah -<br>Madrasah</th>
                                <th scope="col" class="align-middle">Transportrasi <br> Rumah-Madrasah</th>
                                <th scope="col" class="align-middle">Status Tempat <br> Tinggal Siswa</th>
                                <th scope="col" class="align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 11px;">
                            <?php $no = 1; ?>
                            <?php foreach ($siswa as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td class="text-left"><?= $p['nama']; ?></td>
                                    <td><?= $p['nik']; ?></td>
                                    <td><?= $p['alamat']; ?></td>
                                    <td><?= $p['kelas']; ?></td>
                                    <td><?= $p['nama_orangtua']; ?></td>
                                    <td><?= $p['pekerjaan']; ?></td>
                                    <td><?= $p['penghasilan']; ?></td>
                                    <td><?= $p['tanggungan']; ?></td>
                                    <td><?= $p['status_siswa']; ?></td>
                                    <td><?= $p['jarak_rumah']; ?></td>
                                    <td><?= $p['transportasi']; ?></td>
                                    <td><?= $p['tempat_tinggal']; ?></td>
                                    <td style="width:30px;">
									<a href="<?= base_url('siswa/hapus/') . $p['id_siswa']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
								<div class="my-2"></div>
								<a href="<?= base_url('siswa/edit_siswa/') . $p['id_siswa']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

			</div>
		</div>
	</div>
</div>

