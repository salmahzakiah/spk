<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	
 

	<div class="m-3">
    <?= $this->session->flashdata('success'); ?>
    <div class="card rounded">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="mr-auto bd-highlight">
                    <a href="<?= base_url('Periode/tambah_periode'); ?>" class="btn btn-success"><i class="bi bi-plus-lg"></i>
                        <span>Tambah</span>
                    </a>
                </div>
                <div class="">
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="example" class="table table-bordered text-center">
                    <thead style="font-size: 13px;">
                        <tr>
                            <th scope="col" class="align-middle">No</th>
                            <th scope="col" class="align-middle">Nama Periode</th>
                            <th scope="col" class="align-middle">Tanggal Periode</th>
                            <th scope="col" class="align-middle">Kuota</th>
                            <th scope="col" class="align-middle">Keterangan</th>
                            <th scope="col" class="align-middle">Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 13px;">
                        <?php $no = 1; ?>
                        <?php foreach ($periode as $p) : ?>
                            <tr>
                                <th scope="row" style="width: 30px;"><?= $no++; ?></th>
                                <td class="text-left" style="width: 250px;"><?= $p['nama_periode']; ?></td>
                                <td><?php
                                    $date_awal = date_create($p['tanggal_awal']);
                                    $date_akhir = date_create($p['tanggal_akhir']); ?>
                                    <?= date_format($date_awal, "d, M Y"); ?> - <?= date_format($date_akhir, "d, M Y"); ?>
                                </td>
                                <td><?= $p['kuota']; ?> Orang</td>
                                <td><?= $p['keterangan']; ?></td>
                                <td style="width:30px;">
								<a href="<?= base_url('periode/hapus/') . $p['id_periode']; ?>"  class="btn btn-danger"><i class="bi bi-trash"></i></a>
								<div class="my-2"></div>
								<a href="<?= base_url('periode/edit_periode/') . $p['id_periode']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </td>                             
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
