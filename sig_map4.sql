-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2024 pada 13.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_map4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(8) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `alamat`, `deskripsi`, `latitude`, `longitude`) VALUES
(1, 'Hutan Pinus Limpakuwus  Banyumas', 'Hutan Pinus Limpakuwus Jalan Raya Baturraden Timur Km 3,6, Sawah & Hutan, Limpakuwus, Kec. Sumbang, Kabupaten Banyumas, Jawa Tengah 53183', 'Hutan Pinus Limpakuwus ini berada di Desa Limpakuwus Kecamatan Sumbang Kabupaten Banyumas. Jalan menuju Hutan Pinus Limpakuwus sudah beraspal halus, hanya saja penuh dengan tanjakan dan tikungan tajam khas pegunungan. Dari kawasan lokawisata Baturraden.', '-7.3075901', '109.2416324'),
(2, 'Curug Gomblang', 'Dusun III, Kalisalak, Kec. Kedungbanteng, Kabupaten Banyumas, Jawa Tengah 53152', 'Curug Gomblang, adalah air terjun eksotis yang terletak di kaki Gunung Slamet, Kabupaten Banyumas, Provinsi Jawa Tengah.Curug Gomblang merupakan wisata Banyumas yang sangat digandrungi masyarakat, khususnya anak muda yang haus akan konten keren berlatarka', '-7.3237089', '109.1791946'),
(38, 'Curug Telu', 'M6JR+2QP, Sawah & Hutan, Karangsalam, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53151', 'Curug Telu ini berlokasi di Desa Karangsalam Kecamatan Baturraden. Sebelum masuk gerbang pertama Baturraden, kalian bisa belok kanan lalu mengikuti petunjuk jalan. Lokasi Curug Telu bisa diakses menggunakan kendaraan pribadi, motor atau mobil. Walau jalan', '-7.3199069', '109.2397478'),
(39, 'Telaga Sunyi', 'Sawah & Hutan, Limpakuwus, Kec. Sumbang, Kabupaten Banyumas, Jawa Tengah 53183', 'Telaga Sunyi bersumber dari mata air Gunung Slamet. Airnya begitu jernih dan sejuk, sampai warnanya terlihat kebiruan. Bagian dasar kolam sedalam lima meter pun bisa terlihat jelas dengan mata telanjang.', '-7.3060328', '109.240179');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
