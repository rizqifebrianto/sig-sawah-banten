-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2024 pada 10.52
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
  `id_sawah` int(8) NOT NULL,
  `nama_daerah` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_sawah`, `nama_daerah`, `alamat`, `deskripsi`, `latitude`, `longitude`) VALUES
(1, 'Sawah Kabupaten Lebak', 'Kabupaten Lebak, Provinsi Banten', 'Kabupaten Lebak merupakan salah satu kabupaten yang berada di Provinsi Banten. Kabupaten Lebak memiliki 28 kecamatan, 5 kelurahan, dan 340 desa serta memiliki luas wilayah sebesar 3.426,56 km². Pada tahun 2023 menurut data dari Badan Pusat Statistik (BPS) Provinsi Banten, Kabupaten Lebak memiliki luas lahan panen padi sebesar 78.158 Hektare, memproduksi padi sebesar 396.559 GKG ton, dan memproduksi beras sebanyak 225.852 ton. (Sumber : id.wikipedia.org & banten.bps.go.id)', '-6.6050494', '106.1862641'),
(2, 'Sawah Kota Cilegon', 'Kota Cilegon, Provinsi Banten', 'Kota Cilegon merupakan salah satu kota yang berada di Provinsi Banten. Kota Cilegon memiliki 8 kecamatan dan 43 kelurahan serta memiliki luas wilayah 175,50 km². Pada tahun 2023 menurut data dari Badan Pusat Statistik (BPS) Provinsi Banten, Kota Cilegon memiliki luas lahan panen padi sebesar 1.687 Hektare, memproduksi padi sebesar 8.983 GKG ton, dan memproduksi beras sebanyak 5.116 ton. (Sumber : id.wikipedia.org & banten.bps.go.id)', '-5.9919235', '106.0342306'),
(3, 'Sawah Kota Serang', 'Kota Serang, Provinsi Banten', 'Kota Serang merupakan salah satu kota yang berada di Provinsi Banten. Kota Serang memiliki  6 kecamatan dan 67 kelurahan serta memiliki luas wilayah sebesar 266,71 km² . Pada tahun 2023 menurut data dari Badan Pusat Statistik (BPS) Provinsi Banten, Kota Serang memiliki luas lahan panen padi sebesar 10.501 Hektare, memproduksi padi sebesar 57.527 GKG ton, dan memproduksi beras sebanyak 32.764 ton. (Sumber : id.wikipedia.org & banten.bps.go.id)', '-6.1147484', '106.1535254'),
(4, 'Sawah Kabupaten Pandeglang', 'Kabupaten Pandeglang, Provinsi Banten', 'Kabupaten Pandeglang merupakan salah satu kabupaten yang berada di Provinsi Banten. Kabupaten Pandeglang memiliki 35 kecamatan, 13 kelurahan dan 326 desa serta memiliki luas wilayah sebesar 2.746,89 km². Pada tahun 2023 menurut data dari Badan Pusat Statistik (BPS) Provinsi Banten, Kabupaten Pandeglang memiliki luas lahan panen padi sebesar 87.158 Hektare, memproduksi padi sebesar 481.002 GKG ton, dan memproduksi beras sebanyak 273.945 ton. (Sumber : id.wikipedia.org & banten.bps.go.id)', '-6.3343136', '106.1024518'),
(5, 'Sawah Kabupaten Tangerang', 'Kabupaten Tangerang, Provinsi Banten', 'Kabupaten Tangerang merupakan salah satu kabupaten yang berada di Provinsi Banten. Kabupaten Tangerang memiliki 29 kecamatan, 28 kelurahan, dan 246 desa serta memiliki luas wilayah sebesar 1.011,86 km². Pada tahun 2023 menurut data dari Badan Pusat Statistik (BPS) Provinsi Banten, Kabupaten Tangerang memiliki luas lahan panen padi sebesar 55.305 Hektare, memproduksi padi sebesar 290.083 GKG ton, dan memproduksi beras sebanyak 165.211 ton. (Sumber : id.wikipedia.org & banten.bps.go.id)', '-6.1900469', '106.4427998'),
(6, 'Sawah Kota Tangerang', 'Kota Tangerang, Provinsi Banten', 'Kota Tangerang merupakan salah satu kota yang berada di Provinsi Banten. Kota Tangerang memiliki 13 kecamatan dan 104 kelurahan serta memiliki luas wilayah sebesar 153,93 km². Pada tahun 2023 menurut data dari Badan Pusat Statistik (BPS) Provinsi Banten, Kota Tangerang memiliki luas lahan panen padi sebesar 525 Hektare, memproduksi padi sebesar 3.263 GKG ton, dan memproduksi beras sebanyak 1.858 ton. (Sumber : id.wikipedia.org & banten.bps.go.id)', '-6.1726694', '106.6268317'),
(7, 'Sawah Kabupaten Serang', 'Kabupaten Serang, Provinsi Banten', 'Kabupaten Serang merupakan salah satu kabupaten yang berada di Provinsi Banten. Kabupaten Serang memiliki 29 kecamatan dan 326 desa serta memiliki luas wilayah sebesar 1.469,66 km². Pada tahun 2023 menurut data dari Badan Pusat Statistik (BPS) Provinsi Banten, Kabupaten Serang memiliki luas lahan panen padi sebesar 77.725 Hektare, memproduksi padi sebesar 449.067 GKG ton, dan memproduksi beras sebanyak 255.758 ton. (Sumber : id.wikipedia.org & banten.bps.go.id)', '-6.2283891', '106.0749499');

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
  ADD PRIMARY KEY (`id_sawah`);

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
  MODIFY `id_sawah` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
