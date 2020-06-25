-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2020 pada 02.54
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
-- Database: `ppdb2020`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswa`
--

CREATE TABLE `datasiswa` (
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `noTelp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `asalSekolah` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ijazah` text DEFAULT NULL,
  `skhun` text DEFAULT NULL,
  `kk` text NOT NULL,
  `fotoNisn` text NOT NULL,
  `ktpOrtu` text NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datasiswa`
--

INSERT INTO `datasiswa` (`nisn`, `nama`, `tempatLahir`, `tanggalLahir`, `jenisKelamin`, `noTelp`, `alamat`, `email`, `asalSekolah`, `foto`, `ijazah`, `skhun`, `kk`, `fotoNisn`, `ktpOrtu`, `jurusan`) VALUES
('001', 'Muhammad Fathurachman', 'Bogor', '2020-06-10', 'Laki-laki', '088709626279', 'Jakarta', 'fathurahman@popbox.asia', 'SMP Dharma Pertiwi', '20191231_152133.jpg', 'Neon Green Garden for Food Education Presentation.pdf', 'Image311019135113.pdf', 'Image311019135113.pdf', 'UJIAN TENGAH SEMESTER - PW1R1.pdf', 'SPK.pdf', 'TKJ'),
('002', 'Ahmad Abi Mulya', 'Jakarta', '2020-06-09', 'Laki-laki', '088765425262', 'Depok', 'fathurpaoel41@gmail.com', 'SMP Dharma Pertiwi', '778-7786050_download-instagram-like-icon-.png', 'sdfsad.pdf', 'asfds.pdf', 'get_waybill_new_2.pdf', 'Surat Pemberitahuan dan Persetujuan Orang Tua (Program Cyber Security Training).pdf', 'UTS.pdf', 'RPL'),
('003', 'Muhammad Surya', 'Jakarta', '2020-06-16', 'Perempuan', '088782676542', 'Bogor', 'farhan@gmail.com', 'SMP Dharma Pertiwi', 'popbox.png', 'Image311019135113.pdf', 'CV gua .pdf', 'CV gua .pdf', 'Image311019135113.pdf', 'Image311019135113.pdf', 'AKUNTANSI'),
('004', 'Turis', 'Belanda', '2020-06-19', 'Perempuan', '086455467872', 'Kp. Belanda Belakang Dapur', 'turis@gmail.com', 'SMP Dharma Pertiwi', '1-17037_instagram-icon-internet-social-website-symbol-instagram-save.png', 'MATERI WORKSHOP MEMBUAT PRESENTASI INTERAKTIF DENGAN MICROSOFT POWERPOINT.pdf', 'Modul Pertemuan 10  merge Sort.pdf', 'BROKEN_HOME_bahanas.pdf.pdf', 'get_waybill_new_2.pdf', 'BROKEN_HOME_bahanas.pdf.pdf', 'RPL'),
('005', 'Muhammad Yasin', 'Tangerang', '2020-06-19', 'Laki-laki', '089634565324', 'Tangerang Selatan', 'yasin@gmail.com', 'SMP Dharma Pertiwi', '3.png', '2020030356573C9042020.pdf', 'Buat-Kamu-Yang-Mau-Jualan-Tapi-Ga-Punya-Produk.pdf', 'Contoh-Literature Riview-1911501284.pdf', 'PROPOSAL_Majelis_Talim_Al-_Muqorrobiin.pdf', 'Surat Pemberitahuan dan Persetujuan Orang Tua (Program Cyber Security Training).pdf', 'AKUNTANSI'),
('006', 'Muhammad Bahran', 'Depok', '2020-03-31', 'Laki-laki', '098622615272', 'Jauh', 'fathurahman21@popbox.asia', 'SMP Dharma Pertiwi', '', '', '', '', '', '', 'AKUNTANSI'),
('1234123', 'ADA', 'bogor', '2020-06-09', 'Laki-laki', '32423', 'SAFS', 'DW@gmail.com', '423423', '', '', '', '', '', '', 'TKJ'),
('424', 'dasdas', 'qwdq', '0024-03-31', 'Laki-laki', '234324', 'ada', 'fathurahman21@popbox.asia', 'asdf', '1.png', '', '', '', '', '', 'OTKP'),
('4243', 'dasdas', 'qwdq', '0024-03-31', 'Laki-laki', '234324', 'ada', 'fathurahman21@popbox.asia', 'asdf', '', '', '', '', '', '', 'TKJ'),
('42433', 'dasdas', 'qwdq', '0024-03-31', 'Laki-laki', '234324', 'ada', 'fathurahman21@popbox.asia', 'asdf', '', '', '', '', '', '', 'OTKP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama`, `username`, `password`) VALUES
(1, 'Admin Admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
