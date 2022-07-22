<header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="file"></i></div>
                        Register Data Pasien Baru
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
        <div class="card-header">Data Penanggung Jawab</div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group"><label for="exampleFormControlInput1">No Rekam
                                    Medis</label><input class="form-control" id="exampleFormControlInput1" type="">
                            </div>
                            <div class="form-group"><label for="exampleFormControlInput1">No
                                    KTP</label><input class="form-control" id="exampleFormControlInput1" type=""></div>

                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group"><label for="exampleFormControlInput1">Nama
                                    Penanggung
                                    Jawab</label><input class="form-control" id="exampleFormControlInput1" type="name"></div>
                            <div class="form-group"><label for="exampleFormControlInput1">Hubungan
                                    dengan
                                    Pasien</label><input class="form-control" id="exampleFormControlInput1" type="">
                            </div>
                        </form>
                    </div>



                </div>
                <div class="form-group"><label for="exampleFormControlTextarea1">Alamat</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Data Pasien</div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group"><label for="exampleFormControlInput1">Nama
                                    Pasien</label><input class="form-control" id="exampleFormControlInput1" type=""></div>
                            <div class="form-group"><label for="exampleFormControlInput1">No
                                    KTP</label><input class="form-control" id="exampleFormControlInput1" type="name"></div>
                            <div class="form-group"><label for="exampleFormControlInput1">Tanggal
                                    Masuk</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" id="date" />
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-light d-block">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group"><label for="exampleFormControlInput1">Umur</label><input class="form-control" id="exampleFormControlInput1" type=""></div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label><select class="form-control" id="exampleFormControlSelect1">
                                    <option selected>Pilihan....</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group"><label for="exampleFormControlTextarea1">Alamat</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea></div>
                        </form>
                        <div class="form-group"><label for="exampleFormControlInput1">Pendidikan
                                Terakhir</label><input class="form-control" id="exampleFormControlInput1" type=""></div>
                        <div class="form-group"><label for="exampleFormControlInput1">Pekerjaan
                                Terakhir</label><input class="form-control" id="exampleFormControlInput1" type=""></div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status Perkawinan</label><select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Pilihan....</option>
                                <option>Sudah menikah</option>
                                <option>Belum menikah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Agama</label><select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Pilihan....</option>
                                <option>Islam</option>
                                <option>Katolik</option>
                                <option>Kristen</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>None</option>
                            </select>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="form-group"><label for="exampleFormControlTextarea1">Alasan
                        Kunjungan</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Riwayat Sakit & Penanganan</div>
        <div class="card-body">
            <form>
                <div class="form-group"><label for="exampleFormControlInput1">Usia / Lama
                        Sakit</label><input class="form-control" id="exampleFormControlInput1" type="">
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck1" type="checkbox">
                            <label class="custom-control-label" for="customCheck1">Faktor
                                Genetik</label>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck2" type="checkbox">
                            <label class="custom-control-label" for="customCheck2">Faktor Fisik</label>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck3" type="checkbox">
                            <label class="custom-control-label" for="customCheck3">Faktor Sosial</label>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlSelect1">Kondisi Umum</label><select class="form-control" id="exampleFormControlSelect1">
                        <option selected>Pilihan....</option>
                        <option>Stabil</option>
                        <option>Labil</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Tangani
                                Sendiri</label>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Ditangani
                                Ahli</label>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Minum Obat</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Tanda - Tanda Awal Sakit</div>
        <div class="card-body">
            <form>
                <!-- <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                      </div> -->
                <div class="row">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Dengar suara</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Sedih /
                                murung</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Sulit tidur</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Kelakuan aneh</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Bicara banyak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Lihat sesuatu</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Bingung /
                                gelisah</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Banyak tidur</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Sulit rawat
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Bicara
                                unreality</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Perasaan aneh</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Cemas /
                                kwatir</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Aktivitas
                                kurang</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Diam / isolasi
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Teriak-teriak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Pikiran
                                unreality</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Curiga /
                                takut</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Lelah / lemas</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Melarikan
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Marah /
                                merusak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Bicara
                                sendiri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Sulit
                                konsentrasi</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Pegal / nyeri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Coba bunuh
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Menyerang</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Kondisi Terakhir</div>
        <div class="card-body">
            <form>
                <!-- <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                      </div> -->
                <div class="row">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Dengar suara</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Sedih /
                                murung</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Sulit tidur</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Kelakuan aneh</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Bicara banyak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Lihat sesuatu</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Bingung /
                                gelisah</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Banyak tidur</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Sulit rawat
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Bicara
                                unreality</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Perasaan aneh</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Cemas /
                                kwatir</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Aktivitas
                                kurang</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Diam / isolasi
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Teriak-teriak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Pikiran
                                unreality</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Curiga /
                                takut</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Lelah / lemas</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Melarikan
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Marah /
                                merusak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Bicara
                                sendiri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Sulit
                                konsentrasi</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Pegal / nyeri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Coba bunuh
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Menyerang</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Tahap Gangguan Kejiwaan</div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
                            <label class="custom-control-label" for="customRadio1">Ringan</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
                            <label class="custom-control-label" for="customRadio2">Sedang</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
                            <label class="custom-control-label" for="customRadio3">Berat</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
                            <label class="custom-control-label" for="customRadio4">Cukup Berat</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="customRadio5" type="radio" name="customRadio">
                            <label class="custom-control-label" for="customRadio5">Sangat Berat</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Saran dari Panti</div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Tangani
                                Sendiri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Obat Rutin</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Konsultasi
                                SPKJ</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Masuk RSJ</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Masuk Rehab</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck6" type="checkbox">
                            <label class="custom-control-label" for="customCheck6">Pendampingan</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Kontrol Obat</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck5" type="checkbox">
                            <label class="custom-control-label" for="customCheck5">Aktivitas
                                Rutin</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Kunjungan</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="customCheck4" type="checkbox">
                            <label class="custom-control-label" for="customCheck4">Pendaftaran</label>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3 "><label for="exampleFormControlInput1" class="text-primary font-weight-bold mt-4">Alasan
                        Penanganan</label>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
                                <label class="custom-control-label" for="customRadio1">Kondisi
                                    stabil</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
                                <label class="custom-control-label" for="customRadio2">Aktivitas
                                    positif</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
                                <label class="custom-control-label" for="customRadio3">Tidak
                                    agresif</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
                                <label class="custom-control-label" for="customRadio4">Konsisi
                                    labil</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="customRadio5" type="radio" name="customRadio">
                                <label class="custom-control-label" for="customRadio5">Aktivitas
                                    negatif</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="customRadio5" type="radio" name="customRadio">
                                <label class="custom-control-label" for="customRadio5">Agresif</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">Catatan Penting Lainnya</div>
        <div class="card-body">
            <form>
                <div class="form-group"><label for="exampleFormControlTextarea1">Catatan</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div>
            </form>
        </div>
    </div>
</div>