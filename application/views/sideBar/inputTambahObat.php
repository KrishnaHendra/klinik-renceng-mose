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
<div class="container">
    <div class="card">
        <div class="card-header">Pengunaan Obat</div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ">
                        <form>
                            <div class="form-group"><label for="exampleFormControlInput1">Tanggal
                                    Mulai</label><input class="form-control" id="exampleFormControlInput1" type=""></div>
                        </form>
                        <form>
                            <div class="form-group"><label for="exampleFormControlInput1">Nama
                                    Obat</label><input class="form-control" id="exampleFormControlInput1" type=""></div>
                        </form>
                        <form>
                            <div class="form-group"><label for="exampleFormControlInput1">Jenis</label><input class="form-control" id="exampleFormControlInput1" type=""></div>
                        </form>
                    </div>

                    <div class="col-lg-6">
                        <form>
                            <div class="form-group"><label for="exampleFormControlInput1">Tanggal
                                    Berhenti</label><input class="form-control" id="exampleFormControlInput1" type=""></div>
                        </form>

                        <form>
                            <div class="form-group"><label for="exampleFormControlInput1">Dosis</label><input class="form-control" id="exampleFormControlInput1" type=""></div>
                        </form>

                        <form>

                            <div class="form-group"><label for="exampleFormControlInput1">Waktu</label>
                            </div>

                            <div class="row">
                                <div class="custom-control custom-checkbox col-lg-2 ml-2">
                                    <input class="custom-control-input" id="customCheck1" type="checkbox">
                                    <label class="custom-control-label" for="customCheck1">Pagi</label>
                                </div>
                                <div class="custom-control custom-checkbox col-lg-3">
                                    <input class="custom-control-input" id="customCheck2" type="checkbox">
                                    <label class="custom-control-label" for="customCheck2">Siang</label>
                                </div>
                                <div class="custom-control custom-checkbox col-lg-3">
                                    <input class="custom-control-input" id="customCheck3" type="checkbox">
                                    <label class="custom-control-label" for="customCheck3">Sore</label>
                                </div>
                                <div class="custom-control custom-checkbox col-lg-3">
                                    <input class="custom-control-input" id="customCheck3" type="checkbox">
                                    <label class="custom-control-label" for="customCheck3">Malam</label>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>



            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">Evaluasi Penggunaan Obat</div>
        <div class="card-body">
            <form>
                <div class="form-group"><label for="exampleFormControlInput1">Tanggal</label>
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" id="date" />
                        <span class="input-group-append">
                            <span class="input-group-text bg-light d-block">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="form-group"><label for="exampleFormControlTextarea1">Hasil Observasi
                    </label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group"><label for="exampleFormControlTextarea1">Tindakan</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">Catatan Penting</div>
        <div class="card-body">
            <form>
                <div class="form-group"><label for="exampleFormControlTextarea1">Catatan</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div>
            </form>
        </div>
    </div>
</div>