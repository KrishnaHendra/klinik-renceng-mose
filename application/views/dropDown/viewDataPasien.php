<?php foreach($data as $d): ?>
<header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-4">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="file"></i></div>
						Detail Data Pasien (<?= $d->nik ?>)
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
	<div class="row">
		<div class="col-12">
			<a href="<?= base_url('home/laporan_pdf_data_pasien/'.$d->id_pasien) ?>" target="_blank" class="btn btn-info btn-block mb-3">Cetak Dokumen PDF Pasien</a>
		</div>
	</div>
	<div class="card">
		<div class="card-header">Data Penanggung Jawab</div>
		<div class="card-body">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<form>
							<div class="form-group">
								<label for="exampleFormControlInput1">No Rekam Medis</label>
								<input class="form-control" id="exampleFormControlInput1" type="text"
									value="<?= $d->no_rekam ?>" readonly>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">No KTP</label>
								<input class="form-control" id="exampleFormControlInput1" type="text"
									value="<?= $d->no_ktp ?>" readonly>
							</div>

						</form>
					</div>
					<div class="col-lg-6">
						<form>
							<div class="form-group">
								<label for="exampleFormControlInput1">Nama Penanggung Jawab</label>
								<input class="form-control" id="exampleFormControlInput1" type="text"
									value="<?= $d->nama_penanggung_jawab ?>" readonly>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Hubungan dengan Pasien</label>
								<input class="form-control" id="exampleFormControlInput1" type="text"
									value="<?= $d->hubungan_pasien ?>" readonly>
							</div>
						</form>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Alamat</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
						readonly><?= $d->alamat ?></textarea>
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
							<div class="form-group">
								<label for="exampleFormControlInput1">Nama Pasien</label>
								<input class="form-control" id="exampleFormControlInput1" type="text" value="<?= $d->nama_pasien ?>" readonly>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">No KTP</label>
								<input class="form-control" id="exampleFormControlInput1" type="text" value="<?= $d->nik ?>" readonly>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Tanggal Masuk</label>
								<div class="input-group date" id="datepicker">
									<input type="text" class="form-control" id="date" value="<?= $d->tgl_masuk ?>" readonly>
									<span class="input-group-append">
										<span class="input-group-text bg-light d-block">
											<i class="fa fa-calendar"></i>
										</span>
									</span>
								</div>
							</div>
							<div class="form-group">
                                <label for="exampleFormControlInput1">Tgl Lahir</label>
                                <input class="form-control" id="exampleFormControlInput1" type="text" value="<?= $d->tgl_lahir ?>" readonly>
							</div>
							<!-- <div class="form-group">
                                <label for="exampleFormControlInput1">Umur</label>
                                <input class="form-control" id="exampleFormControlInput1" type="number" value="<?= $d->umur ?>" readonly>
							</div> -->
							<div class="form-group">
								<label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" id="exampleFormControlSelect1" disabled>
									<option <?php if($d->jenis_kelamin == '') echo "selected"; ?>>Pilihan....</option>
									<option <?php if($d->jenis_kelamin == 'Laki-laki') echo "selected"; ?>>Laki-laki</option>
									<option <?php if($d->jenis_kelamin == 'Perempuan') echo "selected"; ?>>Perempuan</option>
								</select>
							</div>
						</form>
					</div>
					<div class="col-lg-6">
							<div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" readonly><?= $d->alamat_pasien ?></textarea>
                            </div>
						<div class="form-group">
                            <label for="exampleFormControlInput1">Pendidikan Terakhir</label>
                            <input class="form-control" id="exampleFormControlInput1" type="text" value="<?= $d->pendidikan_terakhir ?>" readonly>
                        </div>
						<div class="form-group">
                            <label for="exampleFormControlInput1">Pekerjaan Terakhir</label>
                            <input class="form-control" id="exampleFormControlInput1" type="text" value="<?= $d->pekerjaan_terakhir ?>" readonly>
                        </div>
						<div class="form-group">
							<label for="exampleFormControlSelect1">Status Perkawinan</label>
                            <select class="form-control" id="exampleFormControlSelect1" disabled>
								<option <?php if($d->status_perkawinan == '') echo "selected"; ?>>Pilihan....</option>
								<option <?php if($d->status_perkawinan == 'Sudah menikah') echo "selected"; ?>>Sudah menikah</option>
								<option <?php if($d->status_perkawinan == 'Belum menikah') echo "selected"; ?>>Belum menikah</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect1">Agama</label>
                            <select class="form-control" id="exampleFormControlSelect1" disabled>
								<option <?php if($d->agama == '') echo "selected"; ?>>Pilihan....</option>
								<option <?php if($d->agama == 'Islam') echo "selected"; ?>>Islam</option>
								<option <?php if($d->agama == 'Katolik') echo "selected"; ?>>Katolik</option>
								<option <?php if($d->agama == 'Kristen') echo "selected"; ?>>Kristen</option>
								<option <?php if($d->agama == 'Hindu') echo "selected"; ?>>Hindu</option>
								<option <?php if($d->agama == 'Budha') echo "selected"; ?>>Budha</option>
								<option <?php if($d->agama == 'None') echo "selected"; ?>>None</option>
							</select>
						</div>
					</div>
					</form>
				</div>
				<div class="form-group">
                    <label for="exampleFormControlTextarea1">Alasan Kunjungan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly><?= $d->alasan_kunjungan ?></textarea>
                </div>
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
				<div class="form-group">
                    <label for="exampleFormControlInput1">Usia / Lama Sakit</label>
                    <input class="form-control" id="exampleFormControlInput1" type="text" value="<?= $d->usia_sakit ?>" readonly>
				</div>
				<div class="row">
                    <?php
                        $jenisFaktor = json_decode($d->jenis_faktor);
                    ?>
					<div class="col-xxl-3 col-lg-6">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck1" type="checkbox" <?php if($jenisFaktor->faktor_genetik == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck1">Faktor Genetik</label>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck2" type="checkbox" <?php if($jenisFaktor->faktor_fisik == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck2">Faktor Fisik</label>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck3" type="checkbox" <?php if($jenisFaktor->faktor_sosial == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck3">Faktor Sosial</label>
						</div>
					</div>
				</div>
				<div class="form-group mt-3">
					<label for="exampleFormControlSelect1">Kondisi Umum</label>
                    <select class="form-control" id="exampleFormControlSelect1" disabled>
						<option <?php if($d->kondisi_umum == '') echo "selected"; ?>>Pilihan....</option>
						<option <?php if($d->kondisi_umum == 'Sedang') echo "selected"; ?>>Sedang</option>
						<option <?php if($d->kondisi_umum == 'Parah') echo "selected"; ?>>Parah</option>
					</select>
				</div>
				<div class="row">
                    <?php $jenisPenanganan = json_decode($d->jenis_penanganan_riwayat); ?>
					<div class="col-xxl-3 col-lg-6">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisPenanganan->tangani_sendiri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Tangani Sendiri</label>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($jenisPenanganan->ditangani_ahli == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Ditangani Ahli</label>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($jenisPenanganan->minum_obat == 1) echo "checked"; ?> onclick="return false">
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
                <?php $jenisTanda = json_decode($d->jenis_tanda); ?>
				<div class="row">
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->dengar_suara == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Dengar suara</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($jenisTanda->sedih_murung == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Sedih /
								murung</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($jenisTanda->sulit_tidur == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Sulit tidur</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->kelakuan_aneh == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Kelakuan aneh</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->bicara_banyak == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Bicara banyak</label>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->lihat_sesuatu == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Lihat sesuatu</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($jenisTanda->bingung_gelisah == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Bingung / gelisah</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($jenisTanda->banyak_tidur == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Banyak tidur</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->sulit_rawat_diri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Sulit rawat diri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->bicara_unreality == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Bicara unreality</label>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->perasaan_aneh == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Perasaan aneh</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($jenisTanda->cemas_khawatir == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Cemas / kwatir</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($jenisTanda->aktivitas_kurang == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Aktivitas kurang</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->diam_isolasi_diri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Diam / isolasi diri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->teriak_teriak == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Teriak-teriak</label>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->pikiran_unreality == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Pikiran unreality</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($jenisTanda->curiga_takut == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Curiga / takut</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($jenisTanda->lelah_lemas == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Lelah / lemas</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->melarikan_diri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Melarikan diri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->marah_merusak == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Marah / merusak</label>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->bicara_sendiri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Bicara sendiri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($jenisTanda->sulit_konsentrasi == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Sulit konsentrasi</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($jenisTanda->pegal_nyeri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Pegal / nyeri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->coba_bunuh_diri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Coba bunuh
								diri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisTanda->menyerang == 1) echo "checked"; ?> onclick="return false">
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
            <?php $kondisiTerakhir = json_decode($d->jenis_kondisi) ?>
			<form>
				<div class="row">
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->dengar_suara == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Dengar suara</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($kondisiTerakhir->sedih_murung == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Sedih /
								murung</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($kondisiTerakhir->sulit_tidur == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Sulit tidur</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->kelakuan_aneh == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Kelakuan aneh</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->bicara_banyak == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Bicara banyak</label>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->lihat_sesuatu == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Lihat sesuatu</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($kondisiTerakhir->bingung_gelisah == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Bingung /
								gelisah</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($kondisiTerakhir->banyak_tidur == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Banyak tidur</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->sulit_rawat_diri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Sulit rawat
								diri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->bicara_banyak == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Bicara
								unreality</label>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->perasaan_aneh == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Perasaan aneh</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($kondisiTerakhir->cemas_khawatir == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Cemas /
								kwatir</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($kondisiTerakhir->aktivitas_kurang == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Aktivitas
								kurang</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->diam_isolasi_diri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Diam / isolasi
								diri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->teriak_teriak == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Teriak-teriak</label>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->pikiran_unreality == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Pikiran
								unreality</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($kondisiTerakhir->curiga_takut == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Curiga /
								takut</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($kondisiTerakhir->lelah_lemas == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Lelah / lemas</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->melarikan_diri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Melarikan
								diri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->marah_merusak == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Marah /
								merusak</label>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->bicara_sendiri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Bicara
								sendiri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($kondisiTerakhir->sulit_konsentrasi == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Sulit
								konsentrasi</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($kondisiTerakhir->pegal_nyeri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Pegal / nyeri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->coba_bunuh_diri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Coba bunuh
								diri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($kondisiTerakhir->menyerang == 1) echo "checked"; ?> onclick="return false">
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
							<input class="custom-control-input" id="customRadio1" type="radio" name="customRadio" <?php if($d->tahap_gangguan_kejiwaan == 'ringan') echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customRadio1">Ringan</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-radio">
							<input class="custom-control-input" id="customRadio2" type="radio" name="customRadio" <?php if($d->tahap_gangguan_kejiwaan == 'sedang') echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customRadio2">Sedang</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-radio">
							<input class="custom-control-input" id="customRadio3" type="radio" name="customRadio" <?php if($d->tahap_gangguan_kejiwaan == 'berat') echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customRadio3">Berat</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-radio">
							<input class="custom-control-input" id="customRadio4" type="radio" name="customRadio" <?php if($d->tahap_gangguan_kejiwaan == 'cukup_berat') echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customRadio4">Cukup Berat</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-radio">
							<input class="custom-control-input" id="customRadio5" type="radio" name="customRadio" <?php if($d->tahap_gangguan_kejiwaan == 'sangat_berat') echo "checked"; ?> onclick="return false">
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
                <label for="exampleFormControlInput1" class="text-primary font-weight-bold mt-4">Jenis Penanganan</label>
				<div class="row">
                    <?php $jenisPenangananSaran = json_decode($d->jenis_penanganan); ?>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisPenangananSaran->tangani_sendiri == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Tangani
								Sendiri</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($jenisPenangananSaran->obat_rutin == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Obat Rutin</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($jenisPenangananSaran->konsultasi_spkj == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Konsultasi
								SPKJ</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisPenangananSaran->masuk_rsj == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Masuk RSJ</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisPenangananSaran->masuk_rehab == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Masuk Rehab</label>
						</div>
					</div>
				</div>
                <label for="exampleFormControlInput1" class="text-primary font-weight-bold mt-4">Jenis Pendampingan</label>
				<div class="row mt-3">
                    <?php $jenisPendampingan = json_decode($d->jenis_pendampingan); ?>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck6" type="checkbox" <?php if($jenisPendampingan->pendampingan == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck6">Pendampingan</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisPendampingan->kontrol_obat == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Kontrol Obat</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck5" type="checkbox" <?php if($jenisPendampingan->aktivitas_rutin == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck5">Aktivitas
								Rutin</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisPendampingan->kunjungan == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Kunjungan</label>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="customCheck4" type="checkbox" <?php if($jenisPendampingan->pendaftaran == 1) echo "checked"; ?> onclick="return false">
							<label class="custom-control-label" for="customCheck4">Pendaftaran</label>
						</div>
					</div>
				</div>
				<div class="form-group mt-3 ">
                    <label for="exampleFormControlInput1" class="text-primary font-weight-bold mt-4">Alasan Penanganan</label>
					<div class="row">
						<div class="col-lg-2">
							<div class="custom-control custom-radio">
								<input class="custom-control-input" id="customRadio1" type="radio" name="customRadio" <?php if($d->alasan_penanganan == 'kondisi_stabil') echo "checked"; ?> onclick="return false">
								<label class="custom-control-label" for="customRadio1">Kondisi
									stabil</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="custom-control custom-radio">
								<input class="custom-control-input" id="customRadio2" type="radio" name="customRadio" <?php if($d->alasan_penanganan == 'aktivitas_positif') echo "checked"; ?> onclick="return false">
								<label class="custom-control-label" for="customRadio2">Aktivitas
									positif</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="custom-control custom-radio">
								<input class="custom-control-input" id="customRadio3" type="radio" name="customRadio" <?php if($d->alasan_penanganan == 'tidak_agresif') echo "checked"; ?> onclick="return false">
								<label class="custom-control-label" for="customRadio3">Tidak
									agresif</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="custom-control custom-radio">
								<input class="custom-control-input" id="customRadio4" type="radio" name="customRadio" <?php if($d->alasan_penanganan == 'konsisi_labil') echo "checked"; ?> onclick="return false">
								<label class="custom-control-label" for="customRadio4">Konsisi
									labil</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="custom-control custom-radio">
								<input class="custom-control-input" id="customRadio5" type="radio" name="customRadio" <?php if($d->alasan_penanganan == 'aktivitas_negatif') echo "checked"; ?> onclick="return false">
								<label class="custom-control-label" for="customRadio5">Aktivitas
									negatif</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="custom-control custom-radio">
								<input class="custom-control-input" id="customRadio5" type="radio" name="customRadio" <?php if($d->alasan_penanganan == 'agresif') echo "checked"; ?> onclick="return false">
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
				<div class="form-group">
                    <label for="exampleFormControlTextarea1">Catatan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly><?= $d->note ?></textarea>
                </div>
			</form>
		</div>
	</div>
</div>
<?php endforeach; ?>
