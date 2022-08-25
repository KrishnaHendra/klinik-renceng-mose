<header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="file"></i></div>
                        Pemeriksaan Kesehatan
                    </h1>
                    <!-- <div class="page-header-subtitle">A simplified page header for use with the dashboard layout</div> -->
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">Penambahan Data</div>
        <div class="card-body">
            <div class="container">
                <form action="<?= base_url('admin/postPemeriksaanKesehatan') ?>" method="post">
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
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input class="form-control" id="tanggal" name="tanggal" type="date" required>
                            </div>
                            <div class="form-group">
                                <label for="berat_badan">Berat Badan</label>
                                <input class="form-control" id="berat_badan" name="berat_badan" type="number" required>
                            </div>
                            <div class="form-group">
                                <label for="tekanan_darah">Tekanan Darah</label>
                                <input class="form-control" id="tekanan_darah" name="tekanan_darah" type="text" required>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="temperatur">Temperatur</label>
                            <input class="form-control" id="temperatur" name="temperatur" type="" required>
                        </div>
                        <div class="form-group">
                            <label for="nadi">Nadi</label>
                            <input class="form-control" id="nadi" name="nadi" type="" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-right px-4" type="submit">Submit</button>
                </form> 
            </div>
        </div>
    </div>
</div>