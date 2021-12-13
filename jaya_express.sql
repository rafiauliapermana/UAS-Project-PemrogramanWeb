-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2021 pada 09.27
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaya_express`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'adminjaya', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman_tabel`
--

CREATE TABLE `pengiriman_tabel` (
  `id` varchar(50) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tgl_kirim` datetime DEFAULT NULL,
  `tgl_perkiraan` date DEFAULT NULL,
  `tgl_sampai` datetime DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `kontak_pengirim` varchar(50) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `kontak_penerima` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengiriman_tabel`
--

INSERT INTO `pengiriman_tabel` (`id`, `tgl_masuk`, `jenis`, `tgl_kirim`, `tgl_perkiraan`, `tgl_sampai`, `status`, `nama_pengirim`, `alamat_pengirim`, `kontak_pengirim`, `nama_penerima`, `alamat_penerima`, `kontak_penerima`, `keterangan`, `bukti`) VALUES
('IN100000', '2021-12-10 22:35:26', 'Instant', '2021-12-11 00:29:46', '2021-12-13', NULL, 'Dalam Perjalanan', 'asdasd', 'asdasd', 'asdasd', 'asdas', 'dasda', 'asdas', 'dasdas', NULL),
('IN100002', '2021-12-11 08:07:53', 'Instant', NULL, NULL, NULL, 'Belum Dikirim', 'farhan', 'kemayoran', '2424242', 'adi', 'padang', '424242', 'faaf', NULL),
('KV00001', '2021-12-06 00:00:00', 'Konvensional', '2021-12-07 00:00:00', '2021-12-10', '2021-12-08 00:00:00', 'Selesai', 'Udin Sanidin', 'Kebon Kosong, Kemayoran, Jakarta Pusat, DKI Jakarta, 10630', '081211112222', 'Bambang', 'Tegalsari, Tegalsari, Surabaya, Jawa Timur, 60265', '089533334444', 'Barang elektronik', 'KV00001.jpg'),
('KV00002', '2021-12-09 00:00:00', 'Konvensional', '2021-12-10 00:00:00', '2021-12-13', NULL, 'Dalam Perjalanan', 'Udin Sanidin', 'Kebon Kosong, Kemayoran, Jakarta Pusat, DKI Jakarta, 10630', '081211112222', 'Bambang', 'Tegalsari, Tegalsari, Surabaya, Jawa Timur, 60265', '089533334444', 'Barang elektronik', NULL),
('ND00001', '2021-12-10 21:55:27', 'Next Day', NULL, NULL, NULL, 'Belum Dikirim', 'Ujang', 'Kemayoran', '08121452', 'Mahmut', 'Jogja', '08136666', 'Baju', NULL),
('SD100001', '2021-12-11 00:47:16', 'Same Day', '2021-12-11 08:23:17', '2021-12-14', NULL, 'Dalam Perjalanan', 'Jordan', 'Apron', '012452', 'Iqbal', 'Serdang', '12454', 'Alat elektronik', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `refund_tabel`
--

CREATE TABLE `refund_tabel` (
  `id` int(11) NOT NULL,
  `refund_group_name` varchar(50) NOT NULL,
  `refund_refrence_id` varchar(30) NOT NULL,
  `bank_vendor` varchar(30) NOT NULL,
  `bank_account_number` varchar(30) NOT NULL,
  `bank_account_name` varchar(30) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `alasan` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `refund_tabel`
--

INSERT INTO `refund_tabel` (`id`, `refund_group_name`, `refund_refrence_id`, `bank_vendor`, `bank_account_number`, `bank_account_name`, `kontak`, `alasan`, `status`) VALUES
(10, 'IN', 'IN-001', 'BRI', '078401016681537', 'Joko anwar', '08314789222', 'Salah alamat', 'accept'),
(11, 'KV', 'KV004', 'BRI', '078401016681537', 'Ari Untung', '08314789222', 'Kurang uang', 'request');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengiriman_tabel`
--
ALTER TABLE `pengiriman_tabel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `refund_tabel`
--
ALTER TABLE `refund_tabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `refund_tabel`
--
ALTER TABLE `refund_tabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
