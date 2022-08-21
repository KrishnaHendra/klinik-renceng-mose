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
                    <!-- Form Register -->
                    <form action="<?= base_url('admin/postRegister') ?>" method="post">
                            <div class="form-group">
                                <label for="no_rekam">No Rekam Medis</label>
                                <input class="form-control" name="no_rekam" id="no_rekam" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="no_ktp">No KTP</label>
                                <input class="form-control" name="no_ktp" id="no_ktp" type="text" required>
                            </div>

                    </div>
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama_penanggung_jawab">Nama Penanggung Jawab</label>
                                <input class="form-control" name="nama_penanggung_jawab" id="nama_penanggung_jawab" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="hubungan_pasien">Hubungan dengan Pasien</label>
                                <input class="form-control" name="hubungan_pasien" id="hubungan_pasien" type="text" required>
                            </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat_penanggung_jawab">Alamat</label>
                    <textarea class="form-control" name="alamat_penanggung_jawab" id="alamat_penanggung_jawab" rows="3"></textarea>
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
                            <div class="form-group"><label for="nama_pasien">Nama
                                    Pasien</label><input class="form-control" name="nama_pasien" id="nama_pasien" type=""></div>
                            <div class="form-group"><label for="nik_pasien">No
                                    KTP</label><input class="form-control" name="nik_pasien" id="nik_pasien" type="name"></div>
                            <div class="form-group"><label for="tgl_masuk_pasien">Tanggal
                                    Masuk</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="date" class="form-control" name="tgl_masuk_pasien" id="tgl_masuk_pasien" />
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-light d-block">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tgl Lahir</label>
                                <input class="form-control" name="tgl_lahir" id="tgl_lahir" type="date">
                            </div>
                            <!-- <div class="form-group">
                                <label for="umur_pasien">Umur</label>
                                <input class="form-control" name="umur_pasien" id="umur_pasien" type="number">
                            </div> -->
                            <div class="form-group">
                                <label for="jk_pasien">Jenis Kelamin</label>
                                <select class="form-control" name="jk_pasien" id="jk_pasien" required>
                                    <option selected>Pilihan....</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="alamat_pasien">Alamat</label>
                            <textarea class="form-control" name="alamat_pasien" id="alamat_pasien" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_terakhir_pasien">Pendidikan Terakhir</label>
                            <input class="form-control" name="pendidikan_terakhir_pasien" id="pendidikan_terakhir_pasien" type="text">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_terakhir_pasien">Pekerjaan Terakhir</label>
                            <input class="form-control" name="pekerjaan_terakhir_pasien" id="pekerjaan_terakhir_pasien" type="text">
                        </div>
                        <div class="form-group">
                            <label for="status_perkawinan_pasien">Status Perkawinan</label>
                            <select class="form-control" name="status_perkawinan_pasien" id="status_perkawinan_pasien" required>
                                <option selected>Pilihan....</option>
                                <option>Sudah menikah</option>
                                <option>Belum menikah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="agama_pasien">Agama</label>
                            <select class="form-control" id="agama_pasien" name="agama_pasien">
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
                </div>
                <div class="form-group">
                    <label for="alasan_kunjungan_pasien">Alasan Kunjungan</label>
                    <textarea class="form-control" name="alasan_kunjungan_pasien" id="alasan_kunjungan_pasien" rows="3"></textarea>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Riwayat Sakit & Penanganan</div>
        <div class="card-body">
                <div class="form-group">
                    <label for="usia_sakit">Usia / Lama Sakit</label>
                    <input class="form-control" name="usia_sakit" id="usia_sakit" type="number">
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="jenis_faktor[]" id="faktor_genetik" type="checkbox" value="faktor_genetik">
                            <label class="custom-control-label" for="faktor_genetik">Faktor Genetik</label>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="jenis_faktor[]" id="faktor_fisik" type="checkbox" value="faktor_fisik">
                            <label class="custom-control-label" for="faktor_fisik">Faktor Fisik</label>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="jenis_faktor[]" id="faktor_sosial" type="checkbox" value="faktor_sosial">
                            <label class="custom-control-label" for="faktor_sosial">Faktor Sosial</label>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="kondisi_umum">Kondisi Umum</label>
                    <select class="form-control" name="kondisi_umum" id="kondisi_umum">
                        <option selected>- Pilih Kondisi -</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Parah">Parah</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="jenis_penanganan[]" id="tangani_sendiri" type="checkbox" value="tangani_sendiri">
                            <label class="custom-control-label" for="tangani_sendiri">Tangani Sendiri</label>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="jenis_penanganan[]" id="ditangani_ahli" type="checkbox" value="ditangani_ahli">
                            <label class="custom-control-label" for="ditangani_ahli">Ditangani Ahli</label>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="jenis_penanganan[]" id="minum_obat" type="checkbox" value="minum_obat">
                            <label class="custom-control-label" for="minum_obat">Minum Obat</label>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Tanda - Tanda Awal Sakit</div>
        <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="dengar_suara" type="checkbox" value="dengar_suara">
                            <label class="custom-control-label" for="dengar_suara">Dengar suara</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="sedih_murung" type="checkbox" value="sedih_murung">
                            <label class="custom-control-label" for="sedih_murung">Sedih / murung</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="sulit_tidur" type="checkbox" value="sulit_tidur">
                            <label class="custom-control-label" for="sulit_tidur">Sulit tidur</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="kelakuan_aneh" type="checkbox" value="kelakuan_aneh">
                            <label class="custom-control-label" for="kelakuan_aneh">Kelakuan aneh</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="bicara_banyak" type="checkbox" value="bicara_banyak">
                            <label class="custom-control-label" for="bicara_banyak">Bicara banyak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="lihat_sesuatu" type="checkbox" value="lihat_sesuatu">
                            <label class="custom-control-label" for="lihat_sesuatu">Lihat sesuatu</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="bingung_gelisah" type="checkbox" value="bingung_gelisah">
                            <label class="custom-control-label" for="bingung_gelisah">Bingung /
                                gelisah</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="banyak_tidur" type="checkbox" value="banyak_tidur">
                            <label class="custom-control-label" for="banyak_tidur">Banyak tidur</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="sulit_rawat_diri" type="checkbox" value="sulit_rawat_diri">
                            <label class="custom-control-label" for="sulit_rawat_diri">Sulit rawat diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="bicara_unreality" type="checkbox" value="bicara_unreality">
                            <label class="custom-control-label" for="bicara_unreality">Bicara unreality</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="perasaan_aneh" type="checkbox" value="perasaaan_aneh">
                            <label class="custom-control-label" for="perasaan_aneh">Perasaan aneh</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="cemas_khawatir" type="checkbox" value="cemas_khawatir">
                            <label class="custom-control-label" for="cemas_khawatir">Cemas / kwatir</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="aktivitas_kurang" type="checkbox" value="aktivitas_kurang">
                            <label class="custom-control-label" for="aktivitas_kurang">Aktivitas kurang</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="diam_isolasi_diri" type="checkbox" value="diam_isolasi_diri">
                            <label class="custom-control-label" for="diam_isolasi_diri">Diam / isolasi diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="teriak_teriak" type="checkbox" value="teriak_teriak">
                            <label class="custom-control-label" for="teriak_teriak">Teriak-teriak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="pikiran_unreality" type="checkbox" value="pikiran_unreality">
                            <label class="custom-control-label" for="pikiran_unreality">Pikiran
                                unreality</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="curiga_takut" type="checkbox" value="curiga_takut">
                            <label class="custom-control-label" for="curiga_takut">Curiga / takut</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="lelah_lemas" type="checkbox" value="lelah_lemas">
                            <label class="custom-control-label" for="lelah_lemas">Lelah / lemas</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="melarikan_diri" type="checkbox" value="melarikan_diri">
                            <label class="custom-control-label" for="melarikan_diri">Melarikan diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="marah_merusak" type="checkbox" value="marah_merusak">
                            <label class="custom-control-label" for="marah_merusak">Marah / merusak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="bicara_sendiri" type="checkbox" value="bicara_sendiri">
                            <label class="custom-control-label" for="bicara_sendiri">Bicara sendiri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="sulit_konsentrasi" type="checkbox" value="sulit_konsentrasi">
                            <label class="custom-control-label" for="sulit_konsentrasi">Sulit konsentrasi</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="pegal_nyeri" type="checkbox" value="pegal_nyeri">
                            <label class="custom-control-label" for="pegal_nyeri">Pegal / nyeri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="coba_bunuh_diri" type="checkbox" value="coba_bunuh_diri">
                            <label class="custom-control-label" for="coba_bunuh_diri">Coba bunuh
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="tanda_sakit[]" id="menyerang" type="checkbox" value="menyerang">
                            <label class="custom-control-label" for="menyerang">Menyerang</label>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Kondisi Terakhir</div>
        <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="dengar_suara2" type="checkbox" value="dengar_suara">
                            <label class="custom-control-label" for="dengar_suara2">Dengar suara</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="sedih_murung2" type="checkbox" value="sedih_murung">
                            <label class="custom-control-label" for="sedih_murung2">Sedih /
                                murung</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="sulit_tidur2" type="checkbox" value="sulit_tidur">
                            <label class="custom-control-label" for="sulit_tidur2">Sulit tidur</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="kelakuan_aneh2" type="checkbox" value="kelakuan_aneh">
                            <label class="custom-control-label" for="kelakuan_aneh2">Kelakuan aneh</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="bicara_banyak2" type="checkbox" value="bicara_banyak">
                            <label class="custom-control-label" for="bicara_banyak2">Bicara banyak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="lihat_sesuatu2" type="checkbox" value="lihat_sesuatu">
                            <label class="custom-control-label" for="lihat_sesuatu2">Lihat sesuatu</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="bingung_gelisah2" type="checkbox" value="bingung_gelisah">
                            <label class="custom-control-label" for="bingung_gelisah2">Bingung /
                                gelisah</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="banyak_tidur2" type="checkbox" value="banyak_tidur">
                            <label class="custom-control-label" for="banyak_tidur2">Banyak tidur</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="sulit_rawat_diri2" type="checkbox" value="sulit_rawat_diri">
                            <label class="custom-control-label" for="sulit_rawat_diri2">Sulit rawat
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="bicara_unreality2" type="checkbox" value="bicara_unreality">
                            <label class="custom-control-label" for="bicara_unreality2">Bicara
                                unreality</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="perasaan_aneh2" type="checkbox" value="perasaan_aneh">
                            <label class="custom-control-label" for="perasaan_aneh2">Perasaan aneh</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="cemas_khawatir2" type="checkbox" value="cemas_khawatir">
                            <label class="custom-control-label" for="cemas_khawatir2">Cemas /
                                kwatir</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="aktivitas_kurang2" type="checkbox" value="aktivitas_kurang">
                            <label class="custom-control-label" for="aktivitas_kurang2">Aktivitas
                                kurang</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="diam_isolasi_diri2" type="checkbox" value="diam_isolasi_diri">
                            <label class="custom-control-label" for="diam_isolasi_diri2">Diam / isolasi
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="teriak_teriak2" type="checkbox" value="teriak_teriak">
                            <label class="custom-control-label" for="teriak_teriak2">Teriak-teriak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="pikiran_unreality2" type="checkbox" value="pikiran_unreality">
                            <label class="custom-control-label" for="pikiran_unreality2">Pikiran
                                unreality</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="curiga_takut2" type="checkbox" value="curiga_takut">
                            <label class="custom-control-label" for="curiga_takut2">Curiga /
                                takut</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="lelah_lemas2" type="checkbox" value="lelah_lemas">
                            <label class="custom-control-label" for="lelah_lemas2">Lelah / lemas</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="melarikan_diri2" type="checkbox" value="melarikan_diri">
                            <label class="custom-control-label" for="melarikan_diri2">Melarikan
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="marah_merusak2" type="checkbox" value="marah_merusak">
                            <label class="custom-control-label" for="marah_merusak2">Marah /
                                merusak</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="bicara_sendiri2" type="checkbox" value="bicara_sendiri">
                            <label class="custom-control-label" for="bicara_sendiri2">Bicara
                                sendiri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="sulit_konsentrasi2" type="checkbox" value="sulit_konsentrasi">
                            <label class="custom-control-label" for="sulit_konsentrasi2">Sulit
                                konsentrasi</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="pegal_nyeri2" type="checkbox" value="pegal_nyeri">
                            <label class="custom-control-label" for="pegal_nyeri2">Pegal / nyeri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="coba_bunuh_diri2" type="checkbox" value="coba_bunuh_diri">
                            <label class="custom-control-label" for="coba_bunuh_diri2">Coba bunuh
                                diri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="kondisi_terakhir[]" id="menyerang2" type="checkbox" value="menyerang">
                            <label class="custom-control-label" for="menyerang2">Menyerang</label>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Tahap Gangguan Kejiwaan</div>
        <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" name="gangguan_jiwa" id="ringan" type="radio" value="ringan">
                            <label class="custom-control-label" for="ringan">Ringan</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" name="gangguan_jiwa" id="sedang" type="radio" value="sedang">
                            <label class="custom-control-label" for="sedang">Sedang</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" name="gangguan_jiwa" id="berat" type="radio" value="berat">
                            <label class="custom-control-label" for="berat">Berat</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" name="gangguan_jiwa" id="cukup_berat" type="radio" value="cukup_berat">
                            <label class="custom-control-label" for="cukup_berat">Cukup Berat</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" name="gangguan_jiwa" id="sangat_berat" type="radio" value="sangat_berat">
                            <label class="custom-control-label" for="sangat_berat">Sangat Berat</label>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Saran dari Panti</div>
        <div class="card-body">
            <label for="exampleFormControlInput1" class="text-primary font-weight-bold mt-4">Jenis Penanganan</label>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="saran_panti_penanganan[]" id="tangani_sendiri2" type="checkbox" value="tangani_sendiri">
                            <label class="custom-control-label" for="tangani_sendiri2">Tangani
                                Sendiri</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="saran_panti_penanganan[]" id="obat_rutin2" type="checkbox" value="obat_rutin">
                            <label class="custom-control-label" for="obat_rutin2">Obat Rutin</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="saran_panti_penanganan[]" id="konsultasi_spkj2" type="checkbox" value="konsultasi_spkj">
                            <label class="custom-control-label" for="konsultasi_spkj2">Konsultasi
                                SPKJ</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="saran_panti_penanganan[]" id="masuk_rsj2" type="checkbox" value="masuk_rsj">
                            <label class="custom-control-label" for="masuk_rsj2">Masuk RSJ</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="saran_panti_penanganan[]" id="masuk_rehab2" type="checkbox" value="masuk_rehab">
                            <label class="custom-control-label" for="masuk_rehab2">Masuk Rehab</label>
                        </div>
                    </div>
                </div>
                <label for="exampleFormControlInput1" class="text-primary font-weight-bold mt-4">Jenis Pendampingan</label>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="saran_panti_pendampingan[]" id="pendampingan" type="checkbox" value="pendampingan">
                            <label class="custom-control-label" for="pendampingan">Pendampingan</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="saran_panti_pendampingan[]" id="kontrol_obat" type="checkbox" value="kontrol_obat">
                            <label class="custom-control-label" for="kontrol_obat">Kontrol Obat</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="saran_panti_pendampingan[]" id="aktivitas_rutin" type="checkbox" value="aktivitas_rutin">
                            <label class="custom-control-label" for="aktivitas_rutin">Aktivitas
                                Rutin</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="saran_panti_pendampingan[]" id="kunjungan" type="checkbox" value="kunjungan">
                            <label class="custom-control-label" for="kunjungan">Kunjungan</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="saran_panti_pendampingan[]" id="pendaftaran" type="checkbox" value="pendaftaran">
                            <label class="custom-control-label" for="pendaftaran">Pendaftaran</label>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3 ">
                    <label for="exampleFormControlInput1" class="text-primary font-weight-bold mt-4">Alasan Penanganan</label>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" name="alasan_penanganan" id="kondisi_stabil" type="radio" value="kondisi_stabil">
                                <label class="custom-control-label" for="kondisi_stabil">Kondisi
                                    stabil</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" name="alasan_penanganan" id="aktivitas_positif" type="radio" value="aktivitas_positif">
                                <label class="custom-control-label" for="aktivitas_positif">Aktivitas
                                    positif</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" name="alasan_penanganan" id="tidak_agresif" type="radio" value="tidak_agresif">
                                <label class="custom-control-label" for="tidak_agresif">Tidak
                                    agresif</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" name="alasan_penanganan" id="konsisi_labil" type="radio" value="konsisi_labil">
                                <label class="custom-control-label" for="konsisi_labil">Konsisi
                                    labil</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" name="alasan_penanganan" id="aktivitas_negatif" type="radio" value="aktivitas_negatif">
                                <label class="custom-control-label" for="aktivitas_negatif">Aktivitas
                                    negatif</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" name="alasan_penanganan" id="agresif" type="radio" value="agresif">
                                <label class="custom-control-label" for="agresif">Agresif</label>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">Catatan Penting Lainnya</div>
        <div class="card-body">
                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <textarea class="form-control" name="catatan" id="catatan" rows="3"></textarea>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-block btn-primary my-4">Submit</button>
    </form>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if($this->session->flashdata('success')){ ?>
    Swal.fire(
        'Berhasil',
        'Data pasien telah ditambahkan!',
        'success'
    );    
    <?php } ?>  
</script>