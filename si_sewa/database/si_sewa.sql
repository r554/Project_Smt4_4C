-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 05.52
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_sewa`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `pemilik_properti`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `pemilik_properti` (
`kd_properti` int(11)
,`nik_pemilik` varchar(16)
,`Nama` varchar(30)
,`jenis_properti` varchar(20)
,`harga` varchar(10)
,`Alamat` varchar(50)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `kd_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `alamat_admin` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kecamatan`
--

CREATE TABLE `tabel_kecamatan` (
  `kd_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kelurahan`
--

CREATE TABLE `tabel_kelurahan` (
  `kd_kelurahan` int(11) NOT NULL,
  `kd_kecamatan` int(11) NOT NULL,
  `nama_kelurahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pemilik_properti`
--

CREATE TABLE `tabel_pemilik_properti` (
  `nik_pemilik` varchar(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto_profil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pemilik_properti`
--

INSERT INTO `tabel_pemilik_properti` (`nik_pemilik`, `Nama`, `Alamat`, `no_telepon`, `email`, `username`, `password`, `foto_profil`) VALUES
('3338796846759863', 'Agus hadi', 'Jl kaca piring panti jember', '081167538765', 'gus@gmaail.com', 'agus1', '1', 'asdjad.jpg'),
('3338796846759864', 'Susi Yanto', 'jl bungur 23 gebang jember', '083897687345', 'sus@yahoo.com', 'susi', '1', 'dfsdsf.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penyewa`
--

CREATE TABLE `tabel_penyewa` (
  `nik_penyewa` varchar(16) NOT NULL,
  `nama_penyewa` varchar(30) NOT NULL,
  `alamat_penyewa` varchar(50) NOT NULL,
  `no_penyewa` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto_penyewa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_properti`
--

CREATE TABLE `tabel_properti` (
  `kd_properti` int(11) NOT NULL,
  `nik_pemilik` varchar(16) NOT NULL,
  `jenis_properti` varchar(20) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `foto1` varchar(30) NOT NULL,
  `foto2` varchar(30) NOT NULL,
  `foto3` varchar(30) NOT NULL,
  `foto4` varchar(30) NOT NULL,
  `foto5` varchar(30) NOT NULL,
  `status properti` varchar(20) NOT NULL,
  `Deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_properti`
--

INSERT INTO `tabel_properti` (`kd_properti`, `nik_pemilik`, `jenis_properti`, `harga`, `Alamat`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `status properti`, `Deskripsi`) VALUES
(1, '3338796846759863', 'Rumah', '5000000', 'Perum Gading Permai No 1', 'depan.jpg', 'depan2.jpg', 'depan3.jpg', 'depan4.jpg', 'depan5.jpg', 'Tersedia', 'Rumah Minimalis harga murah kamar tidur 2. Air PDAM listrik 450 VA'),
(2, '3338796846759864', 'Tanah', '1200000', 'Jl Manggisan Gebang Jember', 'f.jpg', 's.jpg', 's.jpg', 'dfs.jpg', 'sxdf.jpg', 'Tersedia', 'Tanah subur luas 1 Hektar air lancar terakhir ditanam tembakau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `kd_transaksi` int(11) NOT NULL,
  `nik_pemilik` varchar(16) NOT NULL,
  `nik_penyewa` varchar(16) NOT NULL,
  `lama_waktu_penyewaan` varchar(20) NOT NULL,
  `tgl_awal_penyewaan` date NOT NULL,
  `tgl_penyewaan_berakhir` date NOT NULL,
  `tgl_pembayaran_terakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'rizaldi', 'c4ca4238a0b923820dcc509a6f75849b', 'Rizaldi Maulidia Achmad', 'admin'),
(2, 'siska', 'c4ca4238a0b923820dcc509a6f75849b', 'Siska Melina Rachman', 'operator'),
(3, 'o', 'd95679752134a2d9eb61dbd7b91c4bcc', 'o', 'admin'),
(4, 'm', 'a9ddcf51419881bdee445181e32ede58', 'm', 'admin');

-- --------------------------------------------------------

--
-- Struktur untuk view `pemilik_properti`
--
DROP TABLE IF EXISTS `pemilik_properti`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemilik_properti`  AS  select `tabel_properti`.`kd_properti` AS `kd_properti`,`tabel_properti`.`nik_pemilik` AS `nik_pemilik`,`tabel_pemilik_properti`.`Nama` AS `Nama`,`tabel_properti`.`jenis_properti` AS `jenis_properti`,`tabel_properti`.`harga` AS `harga`,`tabel_properti`.`Alamat` AS `Alamat` from (`tabel_properti` join `tabel_pemilik_properti` on((`tabel_properti`.`nik_pemilik` = `tabel_pemilik_properti`.`nik_pemilik`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indeks untuk tabel `tabel_kecamatan`
--
ALTER TABLE `tabel_kecamatan`
  ADD PRIMARY KEY (`kd_kecamatan`);

--
-- Indeks untuk tabel `tabel_kelurahan`
--
ALTER TABLE `tabel_kelurahan`
  ADD PRIMARY KEY (`kd_kelurahan`);

--
-- Indeks untuk tabel `tabel_pemilik_properti`
--
ALTER TABLE `tabel_pemilik_properti`
  ADD PRIMARY KEY (`nik_pemilik`);

--
-- Indeks untuk tabel `tabel_penyewa`
--
ALTER TABLE `tabel_penyewa`
  ADD PRIMARY KEY (`nik_penyewa`);

--
-- Indeks untuk tabel `tabel_properti`
--
ALTER TABLE `tabel_properti`
  ADD PRIMARY KEY (`kd_properti`),
  ADD UNIQUE KEY `nik_pemilik` (`nik_pemilik`);

--
-- Indeks untuk tabel `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`kd_transaksi`),
  ADD UNIQUE KEY `nik_pemilik` (`nik_pemilik`),
  ADD UNIQUE KEY `nik_penyewa` (`nik_penyewa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_kecamatan`
--
ALTER TABLE `tabel_kecamatan`
  MODIFY `kd_kecamatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_kelurahan`
--
ALTER TABLE `tabel_kelurahan`
  MODIFY `kd_kelurahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_properti`
--
ALTER TABLE `tabel_properti`
  MODIFY `kd_properti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  MODIFY `kd_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_kelurahan`
--
ALTER TABLE `tabel_kelurahan`
  ADD CONSTRAINT `tabel_kelurahan_ibfk_1` FOREIGN KEY (`kd_kelurahan`) REFERENCES `tabel_kecamatan` (`kd_kecamatan`);

--
-- Ketidakleluasaan untuk tabel `tabel_properti`
--
ALTER TABLE `tabel_properti`
  ADD CONSTRAINT `tabel_properti_ibfk_1` FOREIGN KEY (`nik_pemilik`) REFERENCES `tabel_pemilik_properti` (`nik_pemilik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD CONSTRAINT `tabel_transaksi_ibfk_1` FOREIGN KEY (`nik_pemilik`) REFERENCES `tabel_pemilik_properti` (`nik_pemilik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_transaksi_ibfk_2` FOREIGN KEY (`nik_penyewa`) REFERENCES `tabel_penyewa` (`nik_penyewa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
