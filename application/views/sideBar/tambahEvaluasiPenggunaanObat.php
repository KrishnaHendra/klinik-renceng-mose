<header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="file"></i></div>
                        Tambah Obat Pasien
                    </h1>
                    <!-- <div class="page-header-subtitle">A simplified page header for use with the dashboard layout</div> -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<!-- Main page content-->

<div class="container mt-4 pt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-1">
                    <a href="<?= base_url('home/tambahObat/'.$obat[0]->id_pasien) ?>" class="btn btn-xs btn-danger"><i class="fa fa-angle-left mr-1"></i> Back</a> 
                </div>
                <div class="col-11 text-center">
                    <i class="fa fa-file"></i> Evaluasi Penggunaan Obat</div>
                </div>
            </div>
        <div class="card-body">
            <?php foreach($obat as $o): ?>
            <form action="<?= base_url('admin/postEvaluasiObat') ?>" method="post">
                <input type="hidden" name="id_penggunaan_obat" value="<?= $o->id_penggunaan_obat ?>">
                <input type="hidden" name="id_pasien" value="<?= $o->id_pasien ?>">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nama Pasien</label>
                            <input type="text" class="form-control" value="<?= $o->nama_pasien ?>" readonly>
                        </div>  
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Umur Pasien</label>
                            <input type="text" class="form-control" value="<?= $o->umur ?> Tahun" readonly>
                        </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nama Obat</label>
                            <input type="text" class="form-control" value="<?= $o->nama_obat ?>" readonly>
                        </div> 
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tanggal_evaluasi">Tanggal</label>
                            <input type="date" name="tanggal_evaluasi" class="form-control" id="tanggal_evaluasi" value="<?= date('Y-m-d') ?>" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="hasil_observasi">Hasil Observasi</label>
                    <textarea class="form-control" name="hasil_observasi" id="hasil_observasi" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tindakan">Tindakan</label>
                    <textarea class="form-control" name="tindakan" id="tindakan" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <textarea class="form-control" name="catatan" id="catatan" rows="3"></textarea>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <button class="btn btn-primary float-right my-3" type="submit">Simpan</button>
    </form>
</div>
