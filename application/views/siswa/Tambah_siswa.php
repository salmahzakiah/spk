<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="m-3">
	<div class="card-header py-3 d-flex justify-content-between">
    </div>
		

<?php if (count($pekerjaan) == 0) { ?>
	<div class="alert alert-warning mt-3 alert-dismissible fade show" role="alert">
		Subkriteria pekerjaan masih kosong, silahkan menambahkan subkriteria pekerjaan terlebih dahulu 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php } 
if (count($status_siswa) == 0) { ?>
	<div class="alert alert-warning mt-3 alert-dismissible fade show" role="alert">
		Subkriteria status siswa masih kosong, silahkan menambahkan subkriteria status siswa terlebih dahulu 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php } 
if (count($jarak_rumah) == 0) { ?>
	<div class="alert alert-warning mt-3 alert-dismissible fade show" role="alert">
		Subkriteria jarak rumah masih kosong, silahkan menambahkan subkriteria pekerjaan terlebih dahulu 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php } 
if (count($transportasi) == 0) { ?>
	<div class="alert alert-warning mt-3 alert-dismissible fade show" role="alert">
		Subkriteria transportasi masih kosong, silahkan menambahkan subkriteria pekerjaan terlebih dahulu 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php } 
if (count($tempat_tinggal) == 0) { ?>
	<div class="alert alert-warning mt-3 alert-dismissible fade show" role="alert">
		Subkriteria tempat tinggal masih kosong, silahkan menambahkan subkriteria pekerjaan terlebih dahulu 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php } ?>

<div class="card rounded">
	<div class="card-body">
		<form class="mx-5 mt-3" method="post" action="<?= base_url('siswa/input/') . $id_periode; ?>">
			<div class="form-group">
				<label for="InputNama">Nama Lengkap</label>
				<input type="text" name="nama" class="form-control" id="InputNama" placeholder="Masukan Nama" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label for="InputNik">NIK</label>
				<input type="text" name="nik" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))" id="InputNik" placeholder="Masukan NIK" autocomplete="off">
			</div>
			<div class="form-group">
				<label for="InputAlamat">Alamat</label>
				<textarea name="alamat" class="form-control" id="InputAlamat" rows="3" placeholder="Masukan Alamat" autocomplete="off"></textarea>
			</div>
			<div class="form-group">
				<label for="kelas">Kelas</label>
				<input type="text" name="kelas" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))" id="kelas" style="width: 240px;" placeholder="Masukan Kelas" autocomplete="off">
			</div>
			<div class="form-group">
				<label for="nama_orangtua">Nama OrangTua</label>
				<input type="text" name="nama_orangtua" class="form-control" id="nama_orangtua" style="width: 240px;" placeholder="Masukan Nama Ayah/Ibu" autocomplete="off">
			</div>
			<div class="form-group">
				<label for="InputPekerjaan">Pekerjaan</label>
				<select name="pekerjaan" class="form-control" style="width: 240px;" id="InputPekerjaan" required>
					<option value="" selected disabled>Pilih Pekerjaan</option>
					<?php foreach ($pekerjaan as $p) : ?>
						<option value="<?= $p['nama_subkriteria']; ?>"><?= $p['nama_subkriteria']; ?></option>
					<?php endforeach; ?>
					<?php foreach ($pekerjaan_setara as $ps) : ?>
						<option value="<?= $ps['nama_pekerjaansama']; ?>"><?= $ps['nama_pekerjaansama']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group" id="textInputPekerjaan" style="display: none;">
				<label for="InputPekerjaanText">Masukan Pekerjaan</label>
				<input type="text" name="pekerjaanInput" id="pekerjaan" class="form-control" style="width: 240px;">
			</div>
			<div class="form-group w-25">
				<label for="InputPenghasilan">Penghasilan</label>
				<input type="text" name="penghasilan" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))" style="width: 240px;" id="InputPenghasilan" placeholder="Masukan Angka" autocomplete="off">
			</div>
			
			<div class="form-group">
				<label for="tanggungan">Jumlah Saudara</label>
				<input type="text" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))" name="tanggungan" class="form-control" id="tanggungan" style="width: 240px;" placeholder="Masukan Jumlah Saudara" autocomplete="off">
			</div>
			<div class="form-group w-25">
				<label for="InputStatus_Siswa">Status Siswa</label>
				<select name="status_siswa" class="form-control" id="InputStatus_Siswa" style="width: 240px;" required>
					<option value="" selected disabled>Pilih Status Siswa</option>
					<?php foreach ($status_siswa as $sp) : ?>
						<option value="<?= $sp['nama_subkriteria']; ?>"><?= $sp['nama_subkriteria']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group w-25">
				<label for="InputJarak_Rumah">Jarak Rumah-Madrasah</label>
				<select name="jarak_rumah" class="form-control" id="InputJarak_Rumah" style="width: 240px;" required>
					<option value="" selected disabled>Pilih Jarak Rumah</option>
					<?php foreach ($jarak_rumah as $sp) : ?>
						<option value="<?= $sp['nama_subkriteria']; ?>"><?= $sp['nama_subkriteria']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group w-25">
				<label for="InputTransportasi">Transportasi Rumah-Madrasah</label>
				<select name="transportasi" class="form-control" id="InputTransportasi" style="width: 240px;" required>
					<option value="" selected disabled>Pilih Transportasi</option>
					<?php foreach ($transportasi as $sp) : ?>
						<option value="<?= $sp['nama_subkriteria']; ?>"><?= $sp['nama_subkriteria']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group w-25">
				<label for="InputTempat_Tinggal">Status Tempat Tinggal Siswa</label>
				<select name="tempat_tinggal" class="form-control" id="InputTempat_Tinggal" style="width: 240px;" required>
					<option value="" selected disabled>Pilih Tempat Tinggal</option>
					<?php foreach ($tempat_tinggal as $sp) : ?>
						<option value="<?= $sp['nama_subkriteria']; ?>"><?= $sp['nama_subkriteria']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<?php
			// Validasi input
			$pekerjaan_valid = is_array($pekerjaan) || $pekerjaan instanceof Countable;
			$status_siswa_valid = is_array($status_siswa) || $status_siswa instanceof Countable;
			$jarak_rumah_valid = is_array($jarak_rumah) || $jarak_rumah instanceof Countable;
			$transportasi_valid = is_array($transportasi) || $transportasi instanceof Countable;
			$tempat_tinggal_valid = is_array($tempat_tinggal) || $tempat_tinggal instanceof Countable;

			// Set disabled jika salah satu variabel tidak valid atau kosong
			$disabled = !$pekerjaan_valid || !$status_siswa_valid || !$jarak_rumah_valid || !$transportasi_valid || !$tempat_tinggal_valid ||
						count($pekerjaan) == 0 || count($status_siswa) == 0 || count($jarak_rumah) == 0 || count($transportasi) == 0 || count($tempat_tinggal) == 0;
			?>
			<a href="<?= base_url('siswa'); ?>" class="btn btn-warning mr-2"><i class="bi bi-arrow-left-short"></i>Kembali</a>
			<button type="submit" class="btn btn-primary float-right" <?php if ($disabled) echo "disabled"; ?>>
				<i class="bi bi-save"></i> Simpan
			</button>
		</form>
	</div>
</div>
</div>

 



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
