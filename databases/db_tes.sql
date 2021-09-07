-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2021 pada 22.16
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_makanan`
--

CREATE TABLE `bahan_makanan` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_bahan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan_makanan`
--

INSERT INTO `bahan_makanan` (`id`, `id_kategori`, `nama_bahan`) VALUES
(1, 1, 'bawang,cabe 2 siung'),
(7, 5, 'Garam,cabai,bawang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_makanan`
--

CREATE TABLE `kategori_makanan` (
  `id` int(11) NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_makanan`
--

INSERT INTO `kategori_makanan` (`id`, `kategori`) VALUES
(1, 'Bumbu Masakan 1'),
(5, 'Bumbu Ikan Nila Pedas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep_makanan`
--

CREATE TABLE `resep_makanan` (
  `id` int(11) NOT NULL,
  `id_bahan` int(11) NOT NULL,
  `nama_makanan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep_makanan`
--

INSERT INTO `resep_makanan` (`id`, `id_bahan`, `nama_makanan`) VALUES
(13, 1, 'Opor Ayam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan_makanan`
--
ALTER TABLE `bahan_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_makanan`
--
ALTER TABLE `kategori_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `resep_makanan`
--
ALTER TABLE `resep_makanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan_makanan`
--
ALTER TABLE `bahan_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori_makanan`
--
ALTER TABLE `kategori_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `resep_makanan`
--
ALTER TABLE `resep_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
