-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 19.40
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
('11e66f11-f7d0-11ec-9cf6-ac1f6bab945e', 'Krisna Hendra', 'krisna', '$2y$10$HCgByWqgFs0KD251wf8/BOuAT5Bjcx16JvCQP3dRTwcsBDjea4Zp2', 1, 1, 1598287122, 1598287122),
('1e543bd9-f7d0-11ec-9cf6-ac1f6bab945e', 'Haifa Shalsabella', 'haifa', '$2y$10$eGD2RTGOXQNhKtDnkQhvju8SKcO6SOzQwow6aCEgh1zWI6S48dncW', 2, 1, 1598288265, 1598288265),
('d53c00c8-f7d0-11ec-a20d-6045cbb5513b', 'Dokter Testing', 'dokter', '$2y$10$qVq8bEM3E7nxgeGYM88xLOd6q.Fds6qanrpYOJNfgkxKqXo9p5IF2', 1, 1, 1656523684, 1656523684),
('e1fc93c7-f7d0-11ec-a20d-6045cbb5513b', 'Suster Testing', 'suster', '$2y$10$FOSEV3OTuEURgxY6o93qrek4fQSsyQpFYKWYa3Am4DWVq5EqQKZ0O', 2, 1, 1656523706, 1656523706),
('ea9170ff-f7d0-11ec-a20d-6045cbb5513b', 'Apoteker Testing', 'apoteker', '$2y$10$R0h5q/uuNceVxv7413HZi.7/BUKB7jDD7hgFkOTge0/4OuTgVyAqi', 3, 1, 1656523720, 1656523720);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
