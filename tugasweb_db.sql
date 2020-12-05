-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2020 pada 11.41
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasweb_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_buku`
--

CREATE TABLE `input_buku` (
  `id_buku` int(255) NOT NULL,
  `nama_pengarang` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tempat_buku` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tahun_terbit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `input_buku`
--

INSERT INTO `input_buku` (`id_buku`, `nama_pengarang`, `judul`, `penerbit`, `tempat_buku`, `status`, `tahun_terbit`) VALUES
(33, 'maula al falaqi', 'basis data 2', 'jambi', 'Rak 001', 'belum di pinjam', 2019),
(34, 'mira sitiya', 'teknologi informasi', 'merangin', 'Rak 002', 'belum di pinjam', 2020),
(35, 'reza', 'keaman basis data', 'kerinci', 'Rak 003', 'belum di pinjam', 20220),
(36, 'anita', 'bahasa inggris', 'tanjung jabung timur', 'Rak 001', 'belum di pinjam', 2020),
(37, 'budiman', 'bahasa indonesia', 'medan', 'Rak 002', 'belum di pinjam', 2020),
(38, 'santo', 'basis data 1', 'jakarta', 'Rak 004', 'dipinjam', 2018),
(39, 'amira', 'teknologi keamanan', 'jawa barat', 'Rak 001', 'belum di pinjam', 2019),
(40, 'nupus', 'novel', 'jambi', 'Rak 011', 'dipinjam', 2019),
(41, 'galang', 'desain grafis', 'sungai penuh', 'Rak 90', 'dipinjam', 2019),
(42, 'balsem', 'filsafat', 'medan', 'Rak 29', 'dipinjam', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pinjam`
--

CREATE TABLE `tabel_pinjam` (
  `id_pinjam` int(255) NOT NULL,
  `id_buku` int(255) NOT NULL,
  `nama_pinjam` varchar(255) NOT NULL,
  `tanggal_pinjam` varchar(255) NOT NULL,
  `tanggal_kembali` varchar(255) NOT NULL,
  `status_pinjam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_pinjam`
--

INSERT INTO `tabel_pinjam` (`id_pinjam`, `id_buku`, `nama_pinjam`, `tanggal_pinjam`, `tanggal_kembali`, `status_pinjam`) VALUES
(29, 40, 'miraaa', '2020-12-24', '2020-12-30', 'dipinjam'),
(30, 41, 'aziz ', '2020-12-24', '2020-12-25', 'dipinjam'),
(31, 42, 'alif', '2020-12-24', '2020-12-09', 'dipinjam'),
(32, 38, 'maull aja', '2020-12-17', '2020-12-16', 'dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(12) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `password`, `level`) VALUES
(19, 'maulaalfalaqi12@gmail.com', 'admin', '12345678', 'admin'),
(20, 'maulaalfalaqi@gmail.com', 'maula al falaqi', '12345678', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `input_buku`
--
ALTER TABLE `input_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tabel_pinjam`
--
ALTER TABLE `tabel_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `input_buku`
--
ALTER TABLE `input_buku`
  MODIFY `id_buku` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tabel_pinjam`
--
ALTER TABLE `tabel_pinjam`
  MODIFY `id_pinjam` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
