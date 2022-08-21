<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        Dashboard
                    </h1>
                    <div class="page-header-subtitle">Klinik Renceng Mose</div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-n10">
    
    <div class="card mb-4">
        <div class="card-header"><i class="fa fa-users"></i> LIST DATA PASIEN</div>
        <div class="card-body">
            <?php if(count($pasien) == 0){ ?>
                <div class="row">
                    <div class="col text-center">
                        <img src="https://wppals.com/wp-content/uploads/2021/05/Error.jpg" alt="img" width="400px"> <br>
                        <h3 class="my-2 text-danger">
                            Belum ada data pasien untuk saat ini.
                        </h3>
                    </div>
                </div>
            <?php }else{ ?>
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Rekam</th>
                                <th>Nama</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Tanggal Masuk</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pasien as $p): ?>
                                <tr>
                                    <td><?= $p->no_rekam ?></td>
                                    <td><?= $p->nama_pasien ?></td>
                                    <!-- <td class="text-center"><?= $p->umur ?> Tahun</td> -->
                                    <td class="text-center"><?= date('d M Y', strtotime($p->tgl_lahir)) ?></td>
                                    <td class="text-center"><?= date('d M Y', strtotime($p->tgl_masuk)) ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#modalEditPasien<?= $p->id_pasien ?>">Edit</button>
                                        <button class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#modalHapusPasien<?= $p->id_pasien ?>">Hapus</button>
                                        <button class="btn btn-sm btn-warning dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Detail</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="<?= base_url('home/dataPasien/').$p->id_pasien ?>">Data Pasien</a>
                                            <a class="dropdown-item" href="<?= base_url('home/pemeriksaanKesehatan/'.$p->id_pasien) ?>">Pemeriksaan Kesehatan</a>
                                            <a class="dropdown-item" href="<?= base_url('home/perkembanganKondisi/'.$p->id_pasien) ?>">Perkembangan Kondisi Kesehatan</a>
                                            <a class="dropdown-item" href="<?= base_url('home/tambahObat/'.$p->id_pasien) ?>">Pemeriksaan Oleh Doctor</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div> 
            <?php } ?>
            
        </div>
    </div>
</div>

<?php foreach($pasien as $p): ?>
<div class="modal fade" id="modalEditPasien<?= $p->id_pasien ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalEditPasien<?= $p->id_pasien ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-primary" id="modalEditPasien<?= $p->id_pasien ?>Label"><i class="fa fa-user-edit"></i> Edit Data Pasien</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/editPasien') ?>" method="post">
                    <input type="hidden" name="id_pasien" value="<?= $p->id_pasien ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $p->nama_pasien ?>">
                            </div>                            
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="number" class="form-control" name="nik" id="nik" value="<?= $p->nik ?>">
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control" name="umur" id="umur" value="<?= $p->umur ?>">
                            </div>                            
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $p->tgl_lahir ?>">
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_masuk">Tanggal Masuk</label>
                                <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk" value="<?= $p->tgl_masuk ?>"> 
                            </div>                            
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="" <?php if($p->jenis_kelamin == '') echo "selected"; ?>>- Pilih -</option>
                                    <option value="Laki-laki" <?php if($p->jenis_kelamin == 'Laki-laki') echo "selected"; ?>>Laki-laki</option>
                                    <option value="Perempuan" <?php if($p->jenis_kelamin == 'Perempuan') echo "selected"; ?>>Perempuan</option>
                                </select>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status_perkawinan">Status Perkawinan</label>
                                <select name="status_perkawinan" class="form-control">
                                    <option value="" <?php if($p->status_perkawinan == '') echo "selected"; ?>>- Pilih -</option>
                                    <option value="Belum menikah" <?php if($p->status_perkawinan == 'Belum menikah') echo "selected"; ?>>Belum menikah</option>
                                    <option value="Sudah menikah" <?php if($p->status_perkawinan == 'Sudah menikah') echo "selected"; ?>>Sudah menikah</option>
                                </select> 
                            </div>                            
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" value="<?= $p->pendidikan_terakhir ?>">
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pekerjaan_terakhir">Pekerjaan Terakhir</label>
                                <input type="text" class="form-control" name="pekerjaan_terakhir" id="pekerjaan_terakhir" value="<?= $p->pekerjaan_terakhir ?>">
                            </div>                            
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <select name="agama" class="form-control">
                                    <option value="" <?php if($p->agama == '') echo "selected"; ?>>- Pilih -</option>
                                    <option <?php if($p->agama == 'Islam') echo "selected"; ?>>Islam</option>
                                    <option <?php if($p->agama == 'Katolik') echo "selected"; ?>>Katolik</option>
                                    <option <?php if($p->agama == 'Kristen') echo "selected"; ?>>Kristen</option>
                                    <option <?php if($p->agama == 'Hindu') echo "selected"; ?>>Hindu</option>
                                    <option <?php if($p->agama == 'Budha') echo "selected"; ?>>Budha</option>
                                    <option <?php if($p->agama == 'None') echo "selected"; ?>>None</option> 
                                </select> 
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $p->alamat_pasien ?>">
                            </div>                            
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alasan_kunjungan">Alasan Kunjungan</label>
                                <textarea name="alasan_kunjungan" rows="4" class="form-control" style="resize: none;"><?= $p->alasan_kunjungan ?></textarea>
                            </div>  
                        </div>
                    </div> 
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalHapusPasien<?= $p->id_pasien ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapusPasien<?= $p->id_pasien ?>Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapusPasien<?= $p->id_pasien ?>Title"><i class="fa fa-user-times"></i> Hapus Data Pasien</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body text-center">
                <img src="https://wppals.com/wp-content/uploads/2021/05/Error.jpg" alt="img" width="300px" class="mb-3"> <br>
                Apakah anda yakin akan menghapus data pasien bernama <b><?= $p->nama_pasien ?></b> ?
                <form action="<?= base_url('admin/hapusPasien') ?>" method="POST">
                    <input type="hidden" name="id_pasien" value="<?= $p->id_pasien ?>">
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php endforeach; ?>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if($this->session->flashdata('success')){ ?>
        Swal.fire(
            'Berhasil',
            'Data pasien telah ditambahkan!',
            'success'
        );    
    <?php } ?>  
    <?php if($this->session->flashdata('success_edit')){ ?>
        Swal.fire(
            'Berhasil',
            'Data pasien telah diubah!',
            'success'
        );    
    <?php } ?>  
    <?php if($this->session->flashdata('success_hapus')){ ?>
        Swal.fire(
            'Berhasil',
            'Data pasien telah dihapus!',
            'info'
        );    
    <?php } ?>  

    <?php if($this->session->flashdata('success_pemeriksaan_kesehatan')){ ?>
        Swal.fire(
            'Berhasil',
            'Data pemeriksaan kesehatan berhasil ditambahkan!',
            'success'
        );    
    <?php } ?>
    
    <?php if($this->session->flashdata('success_perkembangan_kondisi')){ ?>
        Swal.fire(
            'Berhasil',
            'Data perkembangan kondisi kesehatan berhasil ditambahkan!',
            'success'
        );    
    <?php } ?>   

    <?php if($this->session->flashdata('success_penggunaan_obat')){ ?>
        Swal.fire(
            'Berhasil',
            'Data penggunaan obat berhasil ditambahkan!',
            'success'
        );    
    <?php } ?>   
</script>
