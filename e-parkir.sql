-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2023 pada 12.08
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-parkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `stnk` varchar(25) NOT NULL,
  `tanggal_keluar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `nim`, `nama`, `brand`, `stnk`, `tanggal_keluar`) VALUES
(1, '21.01.4660', 'Raihan Aji Safitra', 'Vario', 'A 6566 DS', '2023-07-28 09:08:05'),
(2, '21.01.4660', 'Raihan Aji Safitra', 'Vario', 'A 6566 DS', '2023-07-28 09:11:46'),
(4, '21.10.4719', 'galih', 'Vixion', 'B 6285 UVI dfd', '2023-07-28 08:26:37'),
(5, '21.01.4660', 'Aziz', 'Beat', 'B 3422 ABD', '2023-07-28 09:04:16'),
(6, '21.01.4718', 'Rizal', 'Supra', 'AA 2442 BC', '2023-07-28 09:04:55'),
(7, '21.01.4686', 'Diska', 'Kharisma', 'A 1234 DF', '2023-07-28 09:05:30'),
(8, '21.01.4667', 'catur', 'scupu', 'B 2322 cv', '2023-07-28 09:52:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `no_hp`, `password`, `level`) VALUES
(1, 'Galih', 'galih@gmail.com', '1234', '$2y$10$AK4hxsW3kR516pMCEn', 3),
(2, 'budi', 'budi@gmail.com', '1234', '$2y$10$EwiTYaYQTQlp00kqdA', 3),
(3, 'aji', 'aji@gmial.com', '1234', '$2y$10$r.yxrpKBs4st0bCd/6', 3),
(4, 'Galih', 'galih@gmail.com', '123456', '$2y$10$Gi3q17yKikST06UKof', 3),
(5, 'Galih', 'galih@gmail.com', '123', '$2y$10$QUTmQJ4ncIjUBXwRoj', 3),
(6, 'Galih', 'galih1@gmail.com', '1234', '12345', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
