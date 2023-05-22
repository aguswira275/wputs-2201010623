-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2023 pada 13.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmatkul`
--
create database db_mahasiswa;
CREATE TABLE `tbmatkul` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `sks` varchar(50) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `id_mk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbmatkul`
--

INSERT INTO `tbmatkul` (`id`, `nama`, `sks`, `semester`, `id_mk`) VALUES
(7, 'Basisdata', '20', '2', '81d5ec6c8bc681caabcf6339e3a7a7a8'),
(8, 'Arsitektur Komputer', '12', '4', '6ceaff5862631c7865f4d9dce9829f03'),
(9, 'Pemrograman Web', '20', '2', 'abb4ac27f5998fd66d1e1e720dfd84b2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmhs`
--

CREATE TABLE `tbmhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `id_mhs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbmhs`
--

INSERT INTO `tbmhs` (`id`, `nama`, `nim`, `prodi`, `tgl_lahir`, `jk`, `id_mhs`) VALUES
(19, 'Didok anjay rawr', '9821028174', 'SK', '2112-02-21', 'Laki-laki', 'b4a05210f21a1274d3dc78c535f8d06d'),
(20, 'Buk gek', '456456456', 'DKV', '2002-04-05', 'Laki-laki', '53d7f5dc23a7f1962a4db61d9d1ccc65'),
(21, 'Didok Anjay', '678678678', 'DKV', '2004-03-12', 'Laki-laki', '36c6848e019eedb6e90af8dca0febf72'),
(22, 'Putu Ayu', '890890890', 'KAB', '2004-03-02', 'Perempuan', '2a9bacc0f7462328ee9a9958d40c762c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `email`, `username`, `passkey`, `iduser`) VALUES
(10, 'dharmaa', 'dharma@gmail.com', 'dharmo', '123', '15e3f94d0fe47351db1efa115ef91e42'),
(16, 'didok anjay', 'didok@gmail.co', 'didok', '123', 'e8fb40ff50524caccdd37f7a01bf71a9'),
(17, 'admin', 'admin@gmail.com', 'admin', 'admin', '75d23af433e0cea4c0e45a56dba18b30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbmatkul`
--
ALTER TABLE `tbmatkul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbmhs`
--
ALTER TABLE `tbmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbmatkul`
--
ALTER TABLE `tbmatkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbmhs`
--
ALTER TABLE `tbmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
