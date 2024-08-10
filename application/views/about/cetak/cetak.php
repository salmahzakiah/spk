<!-- Content -->
<div class="m-3">
        <div class="card-body">
            <h6>Berdasarkan Periode Penerimaan Dengan SPK</h6>
            <label class="font-italic" style="font-size: 12px;">*Menggunakan fitur ini akan terurut seperti pada di sistem</label>
            <form method="POST" target="_blank" action="<?= base_url('about/printlaporanSkor'); ?>">
                <div class="form-group row">
                    <label for="inputPeriode" class="col-sm-2 col-form-label">Pilih Periode</label>
                    <div class="col-sm-10">
                        <select name="periodeAHP" id="periode" class="form-control" style="width: 270px;">
                            <?php foreach ($useAHP as $p) : ?>
                                <option value="<?= $p['id_periode']; ?>"><?= $p['nama_periode']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary " name="submit" value="Print Laporan" <?php if ($cek_periode == 0) echo "disabled"; ?>>
                </div>
            </form>
        </div>
    </div>
</div>
