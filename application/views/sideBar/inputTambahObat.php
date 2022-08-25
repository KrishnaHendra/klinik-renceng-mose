<style>
    .radius-0{
        border-radius: 0px !important;
    }
</style>
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
            <!-- New -->
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
                            <label for="tgl_mulai">Tanggal Mulai</label>
                            <input class="form-control" name="tgl_mulai" id="tgl_mulai" type="date" required>
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="tgl_berhenti">Tanggal Berhenti</label>
                            <input class="form-control" name="tgl_berhenti" id="tgl_berhenti" type="date" required>
                        </div>         
                    </div>
                </div>
                
                <button id="addRow" type="button" class="btn btn-info mb-2"><i class="fa fa-plus-circle"></i> Tambah Obat</button> 
                <!-- Data Obat -->
                <div class="row">
                    <div class="col-lg-12">
                        <div id="inputFormRow">
                        <div class="card shadow-none radius-0">
                            <div class="card-header radius-0 py-2 bg-light text-dark">
                            <div class="row">
                                    <div class="col-6 my-auto ">DATA OBAT</div>
                                    <div class="col-6 my-auto text-right"><button type="button" class="btn btn-light">- </button></div>
                            </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama_obat">Nama Obat</label>
                                            <input class="form-control" name="nama_obat[]" id="nama_obat" type="text" required>
                                        </div> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="dosis">Dosis</label>
                                            <input class="form-control" name="dosis[]" id="dosis" type="text" required>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="jenis">Jenis</label>
                                            <input class="form-control" name="jenis[]" id="jenis" type="text" required>
                                        </div>                                            
                                    </div>
                                    <div class="col-6">
                                        <!-- <div class="form-group">
                                            <label for="waktu">Waktu</label>
                                            <div class="row" style="margin-bottom: 1.6rem !important;">
                                                <div class="col-lg-3">
                                                    <label class="container p-0 m-0">
                                                        <input type="hidden" name="waktu_pagi[]" value="false">
                                                        <input type="checkbox" name="waktu_pagi[]" value="true">
                                                        <span class="checkmark"></span>
                                                        Pagi
                                                    </label> 
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="container p-0 m-0">
                                                        <input type="hidden" name="waktu_siang[]" value="false">
                                                        <input type="checkbox" name="waktu_siang[]" value="true">
                                                        <span class="checkmark"></span>
                                                        Siang
                                                    </label> 
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="container p-0 m-0">
                                                        <input type="hidden" name="waktu_sore[]" value="false">
                                                        <input type="checkbox" name="waktu_sore[]" value="true">
                                                        <span class="checkmark"></span>
                                                        Sore
                                                    </label> 
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="container p-0 m-0">
                                                        <input type="hidden" name="waktu_malam[]" value="false">
                                                        <input type="checkbox" name="waktu_malam[]" value="true">
                                                        <span class="checkmark"></span>
                                                        Malam
                                                    </label> 
                                                </div>
                                            </div>
                                        </div>  -->
                                        <div class="form-group">
                                            <label for="catatan">Catatan</label>
                                            <input class="form-control" name="catatan[]" id="catatan" type="text">
                                        </div>                                         
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <input class="form-control" name="keterangan[]" id="keterangan" type="text">
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>  
                        </div>                                   
                    </div>
                </div>

                <div id="newRow" class="row"></div>
                
                <!-- End Data Obat  -->

            <!-- End New -->
                <!-- <div class="row mt-5">
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
                </div>  -->
                <!-- <div class="row">
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
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <input class="form-control" name="catatan" id="catatan" type="text">
                        </div>
                    </div>

                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tgl_berhenti">Tanggal Berhenti</label>
                                <input class="form-control" name="tgl_berhenti" id="tgl_berhenti" type="date" required>
                            </div>
                            <div class="form-group">
                                <label for="dosis">Dosis</label>
                                <input class="form-control" name="dosis" id="dosis" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <div class="row" style="margin-bottom: 1.6rem !important;">
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
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input class="form-control" name="keterangan" id="keterangan" type="text">
                            </div> 
                    </div>
                </div> -->
        </div>
    </div>
    <button class="btn btn-primary float-right my-3" type="submit">Simpan</button>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
    // add row
    let number = 1;
    $("#addRow").click(function () {
        var html = '';
        html += '<div class="col-lg-12">';
        html += '<div id="inputFormRow">';
        html += '<div class="card shadow-none radius-0 mt-3">';
        html += '<div class="card-header radius-0 py-2 bg-light text-dark">';
        html += '<div class="row">';
        html += '<div class="col-6 my-auto">DATA OBAT</div>';
        html += '<div class="col-6 my-auto text-right"><button id="removeRow" type="button" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button></div>';
        html += '</div>';
        html += '</div>';
        html += '<div class="card-body">';
        // Content
        html += '<div class="row">';
        html += '<div class="col-6">';
        html += '<div class="form-group">';
        html += '<label>Nama Obat</label><input class="form-control" name="nama_obat[]" type="text" required></input>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-6">';
        html += '<div class="form-group">';
        html += '<label>Dosis</label><input class="form-control" name="dosis[]" type="text" required></input>';
        html += '</div>';        
        html += '</div>';
        html += '</div>';
        // End Content
        // Content
        html += '<div class="row">';
        html += '<div class="col-6">';
        html += '<div class="form-group">';
        html += '<label>Jenis</label><input class="form-control" name="jenis[]" type="text"></input>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-6">';
        html += '<div class="form-group">';
        html += '<label for="catatan">Catatan</label>';        
        html += '<input class="form-control" name="catatan[]" id="catatan" type="text">';           
        html += '</div>';        
        html += '</div>';
        html += '</div>';
        // End Content
        // Content
        html += '<div class="row">';
        html += '<div class="col-12">';
        html += '<div class="form-group">';
        html += '<label>Keterangan</label><input class="form-control" name="keterangan[]" type="text"></input>';
        html += '</div>';        
        html += '</div>';
        html += '</div>';
        // End Content
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
        $('.selectpicker').selectpicker('refresh'); 
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        console.log($(this).closest('#inputFormRow'));
        $(this).closest('#inputFormRow').remove();
    });     
</script>