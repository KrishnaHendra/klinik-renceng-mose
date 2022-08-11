-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2022 pada 17.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rencengmose`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tambahan`
--

CREATE TABLE `data_tambahan` (
  `id_data_tambahan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tahap_gangguan_kejiwaan` varchar(255) NOT NULL,
  `jenis_penanganan` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jenis_penanganan`)),
  `jenis_pendampingan` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jenis_pendampingan`)),
  `alasan_penanganan` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_tambahan`
--

INSERT INTO `data_tambahan` (`id_data_tambahan`, `id_pasien`, `tahap_gangguan_kejiwaan`, `jenis_penanganan`, `jenis_pendampingan`, `alasan_penanganan`, `note`, `created_at`, `updated_at`) VALUES
(1, 9, 'berat', '{\"tangani_sendiri\":0,\"obat_rutin\":1,\"konsultasi_spkj\":0,\"masuk_rsj\":1,\"masuk rehab\":0}', '{\"pendampingan\":0,\"kontrol_obat\":0,\"aktivitas_rutin\":1,\"kunjungan\":0,\"pendaftaran\":0}', 'tidak_agresif', '', '2022-08-08 17:51:04', '2022-08-08 17:51:04'),
(2, 10, 'cukup_berat', '{\"tangani_sendiri\":0,\"obat_rutin\":1,\"konsultasi_spkj\":0,\"masuk_rsj\":1,\"masuk rehab\":0}', '{\"pendampingan\":0,\"kontrol_obat\":0,\"aktivitas_rutin\":1,\"kunjungan\":0,\"pendaftaran\":0}', 'tidak_agresif', 'Catatan', '2022-08-08 17:55:35', '2022-08-08 17:55:35'),
(4, 12, 'berat', '{\"tangani_sendiri\":1,\"obat_rutin\":1,\"konsultasi_spkj\":1,\"masuk_rsj\":0,\"masuk rehab\":0}', '{\"pendampingan\":1,\"kontrol_obat\":1,\"aktivitas_rutin\":1,\"kunjungan\":1,\"pendaftaran\":0}', 'konsisi_labil', 'Perlu rawat inap +- 2 hari', '2022-08-11 21:00:25', '2022-08-11 21:00:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasi_penggunaan_obat`
--

CREATE TABLE `evaluasi_penggunaan_obat` (
  `id_evaluasi` int(11) NOT NULL,
  `id_penggunaan_obat` int(11) NOT NULL,
  `date` date NOT NULL,
  `hasil_observasi` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `catatan_evaluasi` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `evaluasi_penggunaan_obat`
--

INSERT INTO `evaluasi_penggunaan_obat` (`id_evaluasi`, `id_penggunaan_obat`, `date`, `hasil_observasi`, `tindakan`, `catatan_evaluasi`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-08-11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget ligula dolor. Suspendisse in odio.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget ligula dolor. Suspendisse in odio.', 'Penting', 1, '2022-08-11 11:56:41', '2022-08-11 11:56:41'),
(2, 1, '2022-08-11', 'observasi', 'tindakan', 'catatan\r\n', 1, '2022-08-11 12:11:51', '2022-08-11 12:11:51'),
(3, 2, '2022-08-11', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Baik', 1, '2022-08-11 12:12:08', '2022-08-11 12:12:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi_terakhir`
--

CREATE TABLE `kondisi_terakhir` (
  `id_kondisi_terakhir` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `jenis_kondisi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jenis_kondisi`)),
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kondisi_terakhir`
--

INSERT INTO `kondisi_terakhir` (`id_kondisi_terakhir`, `id_pasien`, `jenis_kondisi`, `created_at`, `updated_at`) VALUES
(2, 9, '{\"dengar_suara\":1,\"sedih_murung\":0,\"sulit_tidur\":0,\"kelakuan_aneh\":1,\"bicara_banyak\":1,\"lihat_sesuatu\":0,\"bingung_gelisah\":1,\"banyak_tidur\":1,\"sulit_rawat_diri\":0,\"bicara_unreality\":0,\"perasaan_aneh\":1,\"cemas_khawatir\":1,\"aktivitas_kurang\":1,\"diam_isolasi_diri\":1,\"teriak_teriak\":1,\"pikiran_unreality\":0,\"curiga_takut\":0,\"lelah_lemas\":1,\"melarikan_diri\":1,\"marah_merusak\":0,\"bicara_sendiri\":0,\"sulit_konsentrasi\":1,\"pegal_nyeri\":1,\"coba_bunuh_diri\":1,\"menyerang\":1}', '2022-08-08 17:45:24', '2022-08-08 17:45:24'),
(3, 10, '{\"dengar_suara\":1,\"sedih_murung\":0,\"sulit_tidur\":0,\"kelakuan_aneh\":0,\"bicara_banyak\":0,\"lihat_sesuatu\":1,\"bingung_gelisah\":0,\"banyak_tidur\":1,\"sulit_rawat_diri\":0,\"bicara_unreality\":0,\"perasaan_aneh\":1,\"cemas_khawatir\":0,\"aktivitas_kurang\":0,\"diam_isolasi_diri\":0,\"teriak_teriak\":1,\"pikiran_unreality\":1,\"curiga_takut\":0,\"lelah_lemas\":1,\"melarikan_diri\":0,\"marah_merusak\":0,\"bicara_sendiri\":0,\"sulit_konsentrasi\":1,\"pegal_nyeri\":0,\"coba_bunuh_diri\":0,\"menyerang\":1}', '2022-08-08 17:55:35', '2022-08-08 17:55:35'),
(5, 12, '{\"dengar_suara\":1,\"sedih_murung\":0,\"sulit_tidur\":0,\"kelakuan_aneh\":0,\"bicara_banyak\":0,\"lihat_sesuatu\":0,\"bingung_gelisah\":1,\"banyak_tidur\":0,\"sulit_rawat_diri\":1,\"bicara_unreality\":0,\"perasaan_aneh\":0,\"cemas_khawatir\":0,\"aktivitas_kurang\":1,\"diam_isolasi_diri\":0,\"teriak_teriak\":0,\"pikiran_unreality\":0,\"curiga_takut\":1,\"lelah_lemas\":1,\"melarikan_diri\":1,\"marah_merusak\":0,\"bicara_sendiri\":0,\"sulit_konsentrasi\":0,\"pegal_nyeri\":1,\"coba_bunuh_diri\":0,\"menyerang\":1}', '2022-08-11 21:00:25', '2022-08-11 21:00:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_masuk` date NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(128) NOT NULL,
  `pekerjaan_terakhir` varchar(128) NOT NULL,
  `status_perkawinan` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `alasan_kunjungan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nik`, `nama_pasien`, `tgl_lahir`, `tgl_masuk`, `umur`, `jenis_kelamin`, `alamat_pasien`, `pendidikan_terakhir`, `pekerjaan_terakhir`, `status_perkawinan`, `agama`, `alasan_kunjungan`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(9, '3507889088112233', 'Krishna Hendra', '2000-02-20', '2022-08-05', 29, 'Laki-laki', 'Malang', 'S1', 'Programmer', 'Belum menikah', 'Islam', 'Kunjungan', '2022-08-08 17:45:23', 1, '2022-08-08 13:55:10', 3),
(10, '3507001988273382', 'Zulfano Rizqullah', '2000-02-20', '2022-08-08', 22, 'Laki-laki', 'Sidoarjo', 'SLTA', 'Programmer', 'Belum menikah', 'Hindu', 'Kunjungan', '2022-08-08 17:55:35', 3, '2022-08-08 17:55:35', 3),
(12, '3507889188273364', 'Tari Syahadju', '2000-02-20', '2022-08-11', 18, 'Perempuan', 'Malang', 'SLTP', 'Pelajar', 'Belum menikah', 'Islam', 'Alasan Kunjungan', '2022-08-11 21:00:24', 2, '2022-08-11 21:00:24', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_kesehatan`
--

CREATE TABLE `pemeriksaan_kesehatan` (
  `id_pemeriksaan_kesehatan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `date` date NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tekanan_darah` int(11) NOT NULL,
  `temperatur` varchar(128) NOT NULL,
  `nadi` int(11) NOT NULL,
  `keterangan_tambahan` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemeriksaan_kesehatan`
--

INSERT INTO `pemeriksaan_kesehatan` (`id_pemeriksaan_kesehatan`, `id_pasien`, `date`, `berat_badan`, `tekanan_darah`, `temperatur`, `nadi`, `keterangan_tambahan`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 9, '2022-08-11', 55, 128, '22', 86, 'Sehat', 1, '2022-08-11 09:18:00', '2022-08-11 09:18:00'),
(2, 10, '2022-08-11', 62, 132, '32', 96, 'Tidak sehat', 1, '2022-08-11 09:18:35', '2022-08-11 09:18:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penanggung_jawab`
--

CREATE TABLE `penanggung_jawab` (
  `id_penangung_jawab` int(11) NOT NULL,
  `no_rekam` varchar(128) NOT NULL,
  `nama_penanggung_jawab` varchar(255) NOT NULL,
  `hubungan_pasien` varchar(128) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_ktp` varchar(128) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penanggung_jawab`
--

INSERT INTO `penanggung_jawab` (`id_penangung_jawab`, `no_rekam`, `nama_penanggung_jawab`, `hubungan_pasien`, `alamat`, `no_ktp`, `id_pasien`, `created_at`, `updated_at`) VALUES
(5, 'RKM1659955421', 'Fahri Zaki', 'Keluarga', 'Malang', '3507881900192283', 9, '2022-08-08 17:45:23', '2022-08-08 17:45:23'),
(6, 'RKM1659955915', 'Sabilla', 'Keluarga', 'Sidoarjo', '3507661899201102', 10, '2022-08-08 17:55:35', '2022-08-08 17:55:35'),
(8, 'RKM1660226294', 'Kirana Ovelina', 'Keluarga', 'Kambingan', '3507889099187723', 12, '2022-08-11 21:00:25', '2022-08-11 21:00:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaan_obat`
--

CREATE TABLE `penggunaan_obat` (
  `id_penggunaan_obat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berhenti` date NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `dosis` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `waktu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`waktu`)),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penggunaan_obat`
--

INSERT INTO `penggunaan_obat` (`id_penggunaan_obat`, `id_pasien`, `tgl_mulai`, `tgl_berhenti`, `nama_obat`, `dosis`, `jenis`, `waktu`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 9, '2022-08-01', '2022-08-06', 'Alpentin', '3', 'Kapsul', '{\"pagi\":1,\"siang\":1,\"sore\":1,\"malam\":0}', 0, 1, '2022-08-11 10:00:53', '2022-08-11 10:00:53'),
(2, 9, '2022-08-01', '2022-08-06', 'Amodium', '2', 'Tablet', '{\"pagi\":1,\"siang\":0,\"sore\":0,\"malam\":1}', 0, 1, '2022-08-11 10:04:11', '2022-08-11 10:04:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkembangan_kondisi_kesehatan`
--

CREATE TABLE `perkembangan_kondisi_kesehatan` (
  `id_perkembangan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `date` date NOT NULL,
  `farmokoterapi_before` varchar(128) NOT NULL,
  `farmokoterapi_after` varchar(128) NOT NULL,
  `kondisi_kesehatan` varchar(128) NOT NULL,
  `terapi_sosial_dll` varchar(128) NOT NULL,
  `catatan_staff` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perkembangan_kondisi_kesehatan`
--

INSERT INTO `perkembangan_kondisi_kesehatan` (`id_perkembangan`, `id_pasien`, `date`, `farmokoterapi_before`, `farmokoterapi_after`, `kondisi_kesehatan`, `terapi_sosial_dll`, `catatan_staff`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 10, '2022-08-10', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy te', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy te', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy te', 'terapi sosial dan pijit', 'tes', 1, '2022-08-11 09:26:45', '2022-08-11 09:26:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_sakit`
--

CREATE TABLE `riwayat_sakit` (
  `id_riwayat_sakit` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `usia_sakit` int(11) NOT NULL,
  `jenis_faktor` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jenis_faktor`)),
  `kondisi_umum` varchar(255) NOT NULL,
  `jenis_penanganan` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jenis_penanganan`)),
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_sakit`
--

INSERT INTO `riwayat_sakit` (`id_riwayat_sakit`, `id_pasien`, `usia_sakit`, `jenis_faktor`, `kondisi_umum`, `jenis_penanganan`, `created_at`, `updated_at`) VALUES
(1, 9, 3, '{\"faktor_genetik\":1,\"faktor_fisik\":0,\"faktor_sosial\":1}', 'Sedang', '{\"tangani_sendiri\":1,\"ditangani_ahli\":0,\"minum_obat\":1}', '2022-08-08 17:45:23', '2022-08-08 17:45:23'),
(2, 10, 5, '{\"faktor_genetik\":1,\"faktor_fisik\":1,\"faktor_sosial\":0}', 'Parah', '{\"tangani_sendiri\":0,\"ditangani_ahli\":1,\"minum_obat\":1}', '2022-08-08 17:55:35', '2022-08-08 17:55:35'),
(4, 12, 2, '{\"faktor_genetik\":1,\"faktor_fisik\":1,\"faktor_sosial\":1}', 'Sedang', '{\"tangani_sendiri\":1,\"ditangani_ahli\":0,\"minum_obat\":1}', '2022-08-11 21:00:25', '2022-08-11 21:00:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Dokter'),
(2, 'Suster'),
(3, 'Apoteker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanda_awal_sakit`
--

CREATE TABLE `tanda_awal_sakit` (
  `id_tanda_awal_sakit` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `jenis_tanda` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jenis_tanda`)),
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanda_awal_sakit`
--

INSERT INTO `tanda_awal_sakit` (`id_tanda_awal_sakit`, `id_pasien`, `jenis_tanda`, `created_at`, `updated_at`) VALUES
(2, 9, '{\"dengar_suara\":1,\"sedih_murung\":1,\"sulit_tidur\":0,\"kelakuan_aneh\":0,\"bicara_banyak\":0,\"lihat_sesuatu\":0,\"bingung_gelisah\":1,\"banyak_tidur\":1,\"sulit_rawat_diri\":0,\"bicara_unreality\":0,\"perasaan_aneh\":0,\"cemas_khawatir\":1,\"aktivitas_kurang\":0,\"diam_isolasi_diri\":1,\"teriak_teriak\":0,\"pikiran_unreality\":0,\"curiga_takut\":1,\"lelah_lemas\":1,\"melarikan_diri\":0,\"marah_merusak\":0,\"bicara_sendiri\":0,\"sulit_konsentrasi\":0,\"pegal_nyeri\":1,\"coba_bunuh_diri\":1,\"menyerang\":1}', '2022-08-08 17:45:24', '2022-08-08 17:45:24'),
(3, 10, '{\"dengar_suara\":1,\"sedih_murung\":1,\"sulit_tidur\":0,\"kelakuan_aneh\":0,\"bicara_banyak\":0,\"lihat_sesuatu\":0,\"bingung_gelisah\":1,\"banyak_tidur\":1,\"sulit_rawat_diri\":1,\"bicara_unreality\":1,\"perasaan_aneh\":0,\"cemas_khawatir\":1,\"aktivitas_kurang\":1,\"diam_isolasi_diri\":0,\"teriak_teriak\":0,\"pikiran_unreality\":1,\"curiga_takut\":0,\"lelah_lemas\":0,\"melarikan_diri\":0,\"marah_merusak\":0,\"bicara_sendiri\":1,\"sulit_konsentrasi\":0,\"pegal_nyeri\":1,\"coba_bunuh_diri\":0,\"menyerang\":1}', '2022-08-08 17:55:35', '2022-08-08 17:55:35'),
(5, 12, '{\"dengar_suara\":1,\"sedih_murung\":0,\"sulit_tidur\":0,\"kelakuan_aneh\":0,\"bicara_banyak\":1,\"lihat_sesuatu\":1,\"bingung_gelisah\":0,\"banyak_tidur\":1,\"sulit_rawat_diri\":0,\"bicara_unreality\":0,\"perasaan_aneh\":0,\"cemas_khawatir\":0,\"aktivitas_kurang\":0,\"diam_isolasi_diri\":1,\"teriak_teriak\":0,\"pikiran_unreality\":1,\"curiga_takut\":1,\"lelah_lemas\":1,\"melarikan_diri\":0,\"marah_merusak\":0,\"bicara_sendiri\":0,\"sulit_konsentrasi\":1,\"pegal_nyeri\":0,\"coba_bunuh_diri\":1,\"menyerang\":1}', '2022-08-11 21:00:25', '2022-08-11 21:00:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(36) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL,
  `aktif` int(1) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role_id`, `aktif`, `created_at`, `updated_at`) VALUES
('1', 'Dokter Renceng', 'dokter', '$2y$10$aDaijQp/7p4IYrc32JFwUOeplcvj55VxugoeFdR4QKfSvstS.5tdK', 1, 1, 1660227861, 1660227861),
('2', 'Suster Renceng', 'suster', '$2y$10$l2opn2LmUtWBKZnDCNw7qe0zIxE9CNpe5dvt8xGmL5ak5hliLintW', 2, 1, 1660227894, 1660227894),
('3', 'Bruder Renceng', 'bruder', '$2y$10$BYR4NbWjWI9Nuct3z/D5su/ZmCZILulBNGeiPY7Z3ULYnSPAIPKuO', 2, 1, 1660227910, 1660227910),
('4', 'Apoteker Renceng', 'apoteker', '$2y$10$y72M2voxHHZ3Y3tG9oq8L.B7Nhe8giu6YeTzYpLtb1YIsieWO2hTa', 3, 1, 1660227950, 1660227950);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_tambahan`
--
ALTER TABLE `data_tambahan`
  ADD PRIMARY KEY (`id_data_tambahan`);

--
-- Indeks untuk tabel `evaluasi_penggunaan_obat`
--
ALTER TABLE `evaluasi_penggunaan_obat`
  ADD PRIMARY KEY (`id_evaluasi`);

--
-- Indeks untuk tabel `kondisi_terakhir`
--
ALTER TABLE `kondisi_terakhir`
  ADD PRIMARY KEY (`id_kondisi_terakhir`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `pemeriksaan_kesehatan`
--
ALTER TABLE `pemeriksaan_kesehatan`
  ADD PRIMARY KEY (`id_pemeriksaan_kesehatan`);

--
-- Indeks untuk tabel `penanggung_jawab`
--
ALTER TABLE `penanggung_jawab`
  ADD PRIMARY KEY (`id_penangung_jawab`);

--
-- Indeks untuk tabel `penggunaan_obat`
--
ALTER TABLE `penggunaan_obat`
  ADD PRIMARY KEY (`id_penggunaan_obat`);

--
-- Indeks untuk tabel `perkembangan_kondisi_kesehatan`
--
ALTER TABLE `perkembangan_kondisi_kesehatan`
  ADD PRIMARY KEY (`id_perkembangan`);

--
-- Indeks untuk tabel `riwayat_sakit`
--
ALTER TABLE `riwayat_sakit`
  ADD PRIMARY KEY (`id_riwayat_sakit`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanda_awal_sakit`
--
ALTER TABLE `tanda_awal_sakit`
  ADD PRIMARY KEY (`id_tanda_awal_sakit`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_tambahan`
--
ALTER TABLE `data_tambahan`
  MODIFY `id_data_tambahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `evaluasi_penggunaan_obat`
--
ALTER TABLE `evaluasi_penggunaan_obat`
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kondisi_terakhir`
--
ALTER TABLE `kondisi_terakhir`
  MODIFY `id_kondisi_terakhir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_kesehatan`
--
ALTER TABLE `pemeriksaan_kesehatan`
  MODIFY `id_pemeriksaan_kesehatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penanggung_jawab`
--
ALTER TABLE `penanggung_jawab`
  MODIFY `id_penangung_jawab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penggunaan_obat`
--
ALTER TABLE `penggunaan_obat`
  MODIFY `id_penggunaan_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perkembangan_kondisi_kesehatan`
--
ALTER TABLE `perkembangan_kondisi_kesehatan`
  MODIFY `id_perkembangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `riwayat_sakit`
--
ALTER TABLE `riwayat_sakit`
  MODIFY `id_riwayat_sakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tanda_awal_sakit`
--
ALTER TABLE `tanda_awal_sakit`
  MODIFY `id_tanda_awal_sakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
