<header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="file"></i></div>
                        Perkembangan Kondisi Kesehatan
                    </h1>
                    <!-- <div class="page-header-subtitle">A simplified page header for use with the dashboard layout</div> -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Penambahan Data</div>
        <div class="card-body">
            <form action="<?= base_url('admin/postPerkembanganKondisiKesehatan') ?>" method="POST">
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
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input class="form-control" name="tanggal" id="tanggal" type="date" required>
                </div>
                <div class="form-group">
                    <label for="farmokoterapi_before">Farmokoterapi (Sebelum Kunjungan)</label>
                    <textarea class="form-control" name="farmokoterapi_before" id="farmokoterapi_before" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="kondisi_kesehatan">Kondisi Kesehatan</label>
                    <textarea class="form-control" name="kondisi_kesehatan" id="kondisi_kesehatan" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="farmokoterapi_after">Farmokoterapi (Setelah Kunjungan)</label>
                    <textarea class="form-control" name="farmokoterapi_after" id="farmokoterapi_after" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="terapi_sosial_dll">Psikoterapi, Terapi Sosial, Dll</label>
                    <textarea class="form-control" name="terapi_sosial_dll" id="terapi_sosial_dll" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="catatan_staff">Catatan Staff</label>
                    <textarea class="form-control" name="catatan_staff" id="catatan_staff" rows="3"></textarea>
                </div>
                <button class="btn btn-primary float-right px-4" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>