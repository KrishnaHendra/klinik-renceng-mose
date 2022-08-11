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
                            <th>Mulai</th>
                            <th>Berhenti</th>
                            <th>Nama Obat</th>
                            <th>Dosis</th>
                            <th>Jenis</th>
                            <th class="text-center">Pagi</th>
                            <th class="text-center">Siang</th>
                            <th class="text-center">Sore</th>
                            <th class="text-center">Malam</th>
                            <th class="text-center">Evaluasi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($data as $d): ?>
                        <?php $waktu = json_decode($d->waktu); ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= date('d/m/Y', strtotime($d->tgl_mulai)) ?></td>
                            <td><?= date('d/m/Y', strtotime($d->tgl_berhenti)) ?></td>
                            <td><?= $d->nama_obat ?></td>
                            <td><?= $d->dosis ?></td>
                            <td><?= $d->jenis ?></td>
                            <td class="text-center">
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
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-xs btn-warning">Detail</a>
                                <a href="" class="btn btn-xs btn-primary">Tambah</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">Evaluasi Penggunaan Obat</div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Hasil Observasi</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="card">
        <div class="card-header">Catatan Penting</div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Catatan</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>