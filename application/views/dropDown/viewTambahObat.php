<header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="file"></i></div>
                        Tambahan Obat Dokter
                    </h1>
                    <!-- <div class="page-header-subtitle">A simplified page header for use with the dashboard layout</div> -->
                </div>
            </div>
        </div>
    </div>
</header>



<div class="container mt-5">
    <div class="row">
		<div class="col-12">
			<a href="<?= base_url('home/laporan_pdf_pemeriksaan_kesehatan/'. $pasien[0]->id_pasien) ?>" target="_blank" class="btn btn-info btn-block mb-3">Cetak Dokumen PDF Pemeriksaan Kesehatan</a>
		</div>
	</div>     

    <div class="card">
        <div class="card-header"><i class="fa fa-file"></i> Penambahan Obat</div>
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
                            <th class="text-center">Tgl Mulai</th>
                            <th class="text-center">Tgl Berhenti</th>
                            <th>Nama Obat</th>
                            <th>Dosis</th>
                            <!-- <th>Jenis</th> -->
                            <th>Catatan</th>
                            <th>Ket</th>
                            <!-- <th class="text-center">Pagi</th>
                            <th class="text-center">Siang</th>
                            <th class="text-center">Sore</th>
                            <th class="text-center">Malam</th> -->
                            <th class="text-center">Evaluasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($data as $d): ?>
                        <?php $waktu = json_decode($d->waktu); ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text-center">
                                <small>
                                    <?= date('d/m/Y', strtotime($d->tgl_mulai)) ?>
                                </small>
                            </td>
                            <td class="text-center">
                                <small>
                                    <?= date('d/m/Y', strtotime($d->tgl_berhenti)) ?>
                                </small>
                            </td>
                            <td><?= $d->nama_obat ?> <span class="text-primary">(<?= $d->jenis ?>)</span></td>
                            <td><?= $d->dosis ?></td>
                            <!-- <td><?= $d->jenis ?></td> -->
                            <td><?= $d->catatan_obat ?></td>
                            <td><?= $d->keterangan_obat ?></td>
                            <!-- <td class="text-center">
                                <?php if($waktu->pagi == 1){ ?>
                                    <i class="fa fa-check-circle text-success"></i>
                                <?php } else{ ?>
                                    <i class="fa fa-times-circle text-danger"></i>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <?php if($waktu->siang == 1){ ?>
                                    <i class="fa fa-check-circle text-success"></i>
                                <?php } else{ ?>
                                    <i class="fa fa-times-circle text-danger"></i>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <?php if($waktu->sore == 1){ ?>
                                    <i class="fa fa-check-circle text-success"></i>
                                <?php } else{ ?>
                                    <i class="fa fa-times-circle text-danger"></i>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <?php if($waktu->malam == 1){ ?>
                                    <i class="fa fa-check-circle text-success"></i>
                                <?php } else{ ?>
                                    <i class="fa fa-times-circle text-danger"></i>
                                <?php } ?>
                            </td> -->
                            <td class="text-center">
                                <a href="#modalEvaluasiPenggunaanObat<?= $d->id_penggunaan_obat ?>" data-toggle="modal" class="btn btn-xs btn-warning p-2"><i class="fa fa-eye"></i> </a>
                                <a href="<?= base_url('home/tambahEvaluasiPenggunaanObat/'.$d->id_penggunaan_obat) ?>" class="btn btn-xs btn-primary p-2"><i class="fa fa-plus-circle"></i> </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


<?php foreach($data as $d): ?>
<div class="modal fade" id="modalEvaluasiPenggunaanObat<?= $d->id_penggunaan_obat ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalEvaluasiPenggunaanObat<?= $d->id_penggunaan_obat ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEvaluasiPenggunaanObat<?= $d->id_penggunaan_obat ?>Label"><i class="fa fa-file"></i> Detail Evaluasi Penggunaan Obat</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success" style="border-radius: 0;">
                            <div class="row">
                                <div class="col-6 text-center" style="border-right: 1px solid green;">
                                    <h5 class="m-0 font-weight-normal">
                                        - OBAT - <br>
                                        <b><?= $d->nama_obat ?> (<?= $d->jenis ?>)</b>
                                    </h5>
                                </div>
                                <div class="col-6 text-center">
                                    <h5 class="m-0 font-weight-normal">
                                        - PASIEN - <br>
                                        <b><?= $pasien[0]->nama_pasien ?> (<?= $pasien[0]->umur ?> Tahun)</b>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered table-hover" style="font-size: 13px !important;">
                            <thead class="bg-light">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Tanggal</th>
                                    <th>Hasil Observasi</th>
                                    <th>Tindakan</th>
                                    <th>Catatan</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($evaluasiObat as $e): ?>
                                <?php if($e->id_penggunaan_obat == $d->id_penggunaan_obat){ ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= date('d/m/Y', strtotime($e->date)) ?></td>
                                    <td><?= $e->hasil_observasi ?></td>
                                    <td><?= $e->tindakan ?></td>
                                    <td><?= $e->catatan_evaluasi ?></td>
                                    <td class="text-center"><?= date('d/m/Y H:i', strtotime($e->created_at)) ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('admin/deleteEvaluasiObat/'.$e->id_evaluasi) ?>" onclick="return confirm('Apakah anda yakin akan menghapus data evaluasi ini?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i> </a>
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" type="button" data-dismiss="modal">Close</button>
                <!-- <button class="btn btn-primary" type="button">Understood</button> -->
            </div>
        </div>
    </div>
</div> 
<?php endforeach; ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if($this->session->flashdata('success_evaluasi')){ ?>
        Swal.fire(
            'Berhasil',
            'Data evaluasi penggunaan obat telah ditambahkan!',
            'success'
        );    
    <?php } ?>  
    <?php if($this->session->flashdata('delete_evaluasi')){ ?>
        Swal.fire(
            'Berhasil',
            'Data evaluasi penggunaan obat telah dihapus!',
            'info'
        );    
    <?php } ?>  
</script>