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
<div class="container mb-5">
    <div class="card">
        <div class="card-header">Pengunaan Obat</div>
        <div class="card-body">
            <form action="<?= base_url('admin/postPenggunaanObat') ?>" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="pasien">Pasien <small class="text-danger">*</small></label>
                            <select name="pasien" id="pasien" class="form-control selectpicker" data-live-search="true" required>
                                <option value="">- Pilih Pasien -</option>
                                <?php foreach($pasien as $p): ?>
                                <option value="<?= $p->id_pasien ?>"><?= $p->nama_pasien ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="form-group">
                            <label for="tgl_mulai">Tanggal Mulai</label>
                            <input class="form-control" name="tgl_mulai" id="tgl_mulai" type="date" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_obat">Nama Obat</label>
                            <input class="form-control" name="nama_obat" id="nama_obat" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input class="form-control" name="jenis" id="jenis" type="text" required>
                        </div>
                    </div>

                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tgl_berhenti">Tanggal Berhenti</label>
                                <input class="form-control" name="tgl_berhenti" id="tgl_berhenti" type="date" required>
                            </div>
                            <div class="form-group">
                                <label for="dosis">Dosis</label>
                                <input class="form-control" name="dosis" id="dosis" type="number" required>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <div class="row">
                                    <div class="custom-control custom-checkbox col-lg-2 ml-2">
                                        <input class="custom-control-input" name="waktu[]" id="waktu_pagi" value="pagi" type="checkbox">
                                        <label class="custom-control-label" for="waktu_pagi">Pagi</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-lg-3">
                                        <input class="custom-control-input" name="waktu[]" id="waktu_siang" value="siang" type="checkbox">
                                        <label class="custom-control-label" for="waktu_siang">Siang</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-lg-3">
                                        <input class="custom-control-input" name="waktu[]" id="waktu_sore" value="sore" type="checkbox">
                                        <label class="custom-control-label" for="waktu_sore">Sore</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-lg-3">
                                        <input class="custom-control-input" name="waktu[]" id="waktu_malam" value="malam" type="checkbox">
                                        <label class="custom-control-label" for="waktu_malam">Malam</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>
    <button class="btn btn-primary float-right my-3" type="submit">Simpan</button>
    </form>

</div>
