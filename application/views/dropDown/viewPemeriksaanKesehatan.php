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
<!-- Main page content-->
<div class="container">
    <div class="row">
		<div class="col-12">
			<a href="<?= base_url('home/laporan_pdf_pemeriksaan_kesehatan/'. $pasien[0]->id_pasien) ?>" target="_blank" class="btn btn-info btn-block mb-3">Cetak Dokumen PDF Pemeriksaan Kesehatan</a>
		</div>
	</div> 
    <div class="card">
        <div class="card-header text-primary"><i class="fa fa-file"></i> Cek Kesehatan Vital</div>
        <div class="card-body">
            <?php foreach($pasien as $p): ?>
            <div class="alert alert-primary">
                <div class="row">
                    <div class="col-6 text-center" style="border-right: 1px solid #0061F2;">
                        <h5 class="m-0">
                            <span class="font-weight-normal"><i class="fa fa-angle-right"></i> Nama Pasien <i class="fa fa-angle-left"></i></span> <br> 
                            <b><?= $p->nama_pasien ?></b>
                        </h5>
                    </div>
                    <div class="col-6 text-center">
                        <h5 class="m-0">
                            <span class="font-weight-normal"><i class="fa fa-angle-right"></i> Umur Pasien <i class="fa fa-angle-left"></i></span> <br> 
                            <b><?= $p->umur ?> Tahun</b>
                        </h5>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Berat Badan</th>
                            <th>Tekanan Darah</th>
                            <th>Temperatur</th>
                            <th>Nadi</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($data as $d): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><i class="fa fa-calendar"></i> <?= date('d M Y', strtotime($d->date)) ?></td>
                            <td><?= $d->berat_badan ?> Kg</td>
                            <td><?= $d->tekanan_darah ?></td>
                            <td><?= $d->temperatur ?>&#8451;</td>
                            <td><?= $d->nadi ?></td>
                            <td><?= $d->keterangan_tambahan ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>