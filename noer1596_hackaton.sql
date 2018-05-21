-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Bulan Mei 2018 pada 09.22
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noer1596_hackaton`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `USERNAME_ADMIN` text NOT NULL,
  `PASSWORD_ADMIN` varchar(10) NOT NULL,
  `folder` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `USERNAME_ADMIN`, `PASSWORD_ADMIN`, `folder`) VALUES
(1, 'adminrs', 'adminrs', 'rumahsakit'),
(2, 'admin', 'admin', 'jasaraharja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gbr`
--

CREATE TABLE `gbr` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `path` varchar(70) NOT NULL,
  `iduser` varchar(20) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `lattitude` varchar(25) NOT NULL,
  `tgl` datetime NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `token` varchar(200) NOT NULL,
  `android` varchar(10) NOT NULL,
  `web` varchar(10) NOT NULL,
  `suka` int(11) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `gambar_id` varchar(75) NOT NULL,
  `gambar_struk` varchar(75) NOT NULL,
  `nm_korban` varchar(30) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat_korban` varchar(50) NOT NULL,
  `ket_korban` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gbr`
--

INSERT INTO `gbr` (`id`, `nama`, `path`, `iduser`, `keterangan`, `longitude`, `lattitude`, `tgl`, `alamat`, `status`, `token`, `android`, `web`, `suka`, `kondisi`, `tipe`, `gambar_id`, `gambar_struk`, `nm_korban`, `nik`, `telp`, `alamat_korban`, `ket_korban`) VALUES
(175, 'taufiqhidayah', 'https://webservice.noer.co.id/gambar/20180520063506am.jpg ', '368', 'acara hackatin', '112.74719666666667', '-7.257228333333334', '2018-05-20 06:35:06', 'jalan patimura', 'menunggu', '', '', 'belum', 0, '', 'berita', '', '', '', '', '', '', ''),
(174, 'taufiqhidayah', 'https://webservice.noer.co.id/gambar/20180520063035am.jpg ', '368', 'kegiatan hackaton', '112.74716666666667', '-7.257248333333333', '2018-05-20 06:30:35', 'jalan pare', 'menunggu', '', '', 'belum', 0, '', 'berita', '', '', '', '', '', '', ''),
(173, 'tata', 'https://webservice.noer.co.id/gambar/20180520062410am.jpg ', '511', 'hackaton', '112.747105', '-7.257249999999999', '2018-05-20 06:24:10', 'jalan patimura', 'menunggu', '', '', 'belum', 0, 'finish', 'kecelakaan', '', '', 'Ando', '42353739', '09384778', 'Kediri', 'luka ringan'),
(172, 'tata', 'https://webservice.noer.co.id/gambar/20180520025720am.jpg ', '511', 'tes', '112.74713333333332', '-7.2573099999999995', '2018-05-20 02:57:20', 'tes', 'menunggu', '', '', 'belum', 0, 'selesai', 'kecelakaan', '', '', 'Supomo', '4234567', '085707297725', 'Jombang', ''),
(176, 'taufiqhidayah', 'https://webservice.noer.co.id/gambar/20180520101638am.jpg ', '368', 'hackaton', '112.74714833333334', '-7.257206666666667', '2018-05-20 10:16:38', 'dekat plaza araya', 'menunggu', '', '', 'belum', 0, 'jemput', 'kecelakaan', '', '', '', '', '', '', ''),
(177, 'taufiqhidayah', 'https://webservice.noer.co.id/gambar/20180520101723am.jpg ', '368', 'jasaraharja', '112.74714833333334', '-7.257206666666667', '2018-05-20 10:17:23', 'dekatnya plaza surabaya', 'menunggu', '', '', 'belum', 0, 'finish', 'kecelakaan', '', '', 'alexis', '6543212356', '085707297725', 'Surabaya', 'luka ringan'),
(178, 'taufiqh', 'https://webservice.noer.co.id/gambar/20180520115633am.jpg ', '101', 'hekej', '112.74713166666668', '-7.2573033333333345', '2018-05-20 11:56:33', 'wjw', 'menunggu', '', '', 'belum', 0, 'baru', 'kecelakaan', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasaraharja`
--

CREATE TABLE `jasaraharja` (
  `id` int(11) NOT NULL,
  `nama_korban` varchar(40) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `foto_id` varchar(75) NOT NULL,
  `foto_kwitansi` varchar(75) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `ID_KOMENTAR` int(11) NOT NULL,
  `ID_BERITA` int(20) NOT NULL,
  `NAMA_KOMENTAR` varchar(40) NOT NULL,
  `TANGGAL_KOMENTAR` datetime NOT NULL,
  `ISI_KOMENTAR` varchar(70) NOT NULL,
  `gbr` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `ID_KOMENTAR` int(11) NOT NULL,
  `ID_BERITA` int(11) DEFAULT NULL,
  `ID_USER` varchar(20) DEFAULT NULL,
  `NAMA_KOMENTAR` text,
  `TANGGAL_KOMENTAR` datetime DEFAULT NULL,
  `ISI_KOMENTAR` text,
  `gbr` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`ID_KOMENTAR`, `ID_BERITA`, `ID_USER`, `NAMA_KOMENTAR`, `TANGGAL_KOMENTAR`, `ISI_KOMENTAR`, `gbr`) VALUES
(1, 124, NULL, 'ryan', '2018-01-28 00:00:00', 'ted', ''),
(2, 125, NULL, 'kamak', '2018-01-30 05:52:42', '', ''),
(3, 127, NULL, 'kamak', '2018-01-31 00:05:13', '', ''),
(4, 128, NULL, 'kamak', '2018-01-31 06:34:03', '', ''),
(5, 134, NULL, 'kamak', '2018-01-31 12:46:14', '', ''),
(6, 132, NULL, 'kamak', '2018-01-31 13:45:57', 'hehe', ''),
(7, 133, NULL, 'kamak', '2018-01-31 13:46:17', 'hehe', ''),
(8, 134, NULL, 'kamak', '2018-01-31 13:46:47', 'ted', ''),
(9, 137, NULL, 'gani', '2018-01-31 14:52:47', '', ''),
(10, 137, NULL, 'gani', '2018-01-31 14:59:09', 'wih rusak banget nih', ''),
(11, 137, NULL, 'gani', '2018-01-31 15:10:16', 'wih rusak banget nih', ''),
(12, 137, NULL, 'kamak', '2018-01-31 15:15:38', 'trs', ''),
(13, 134, NULL, 'kamak', '2018-01-31 15:27:33', 'mantap', ''),
(14, 138, NULL, 'kamak', '2018-01-31 15:46:41', 'wih rusak banget nih', ''),
(15, 135, NULL, 'ryan', '2018-01-31 16:12:29', '', ''),
(16, 135, NULL, 'ryan', '2018-01-31 16:12:36', '', ''),
(17, 139, NULL, 'kamak', '2018-01-31 20:54:09', '', ''),
(18, 139, NULL, 'kamak', '2018-01-31 21:32:49', 'trs', ''),
(19, 141, NULL, 'kamak', '2018-02-01 05:21:31', 'appa nih', ''),
(20, 139, NULL, 'kamak', '2018-02-01 07:24:43', 'tes', ''),
(21, 142, NULL, 'kamak', '2018-02-01 08:05:30', 'tes', ''),
(22, 142, NULL, 'kamak', '2018-02-01 11:40:58', 'tes', ''),
(23, 143, NULL, 'kamak', '2018-02-01 12:26:48', 'coba', ''),
(24, 111, NULL, 'gani', '2018-02-01 13:49:58', 'daerah mana itu gan?', ''),
(25, 111, NULL, 'kamak', '2018-02-01 13:53:27', '', ''),
(26, 111, NULL, 'kamak', '2018-02-01 13:53:46', 'daerah perak itu gan', ''),
(27, 111, NULL, 'kamak', '2018-02-01 14:17:41', 'jalan ini rusak parah', ''),
(28, 111, '3517091710950010', 'kamak', '2018-02-19 00:00:00', NULL, ''),
(111, NULL, '3517116911960002', 'tes', '2018-02-27 00:00:00', NULL, ''),
(112, 111, '3517191912950000', 'tes', '2018-02-03 00:00:00', NULL, ''),
(113, 111, '3517091710950010', NULL, NULL, NULL, ''),
(114, 111, NULL, 'tes', NULL, NULL, ''),
(115, 111, '3517116911960002', 'tes', NULL, NULL, ''),
(116, 111, NULL, 'kamak', '2018-02-03 22:42:29', 'tes', ''),
(117, 145, NULL, 'kamak', '2018-02-05 19:33:30', 'teud', ''),
(118, 145, NULL, 'kamak', '2018-02-05 23:18:56', 'fgfg', 'https://ristahandani75.000webhostapp.com/gambar/20180205111856pm.jpg'),
(119, 146, NULL, 'kamak', '2018-02-06 07:43:37', 'ted', ''),
(120, 150, NULL, 'kamak', '2018-02-11 22:32:03', 'tes', ''),
(121, 138, NULL, 'gani', '2018-02-13 09:29:04', 'tes', ''),
(122, 152, NULL, 'kamak', '2018-02-13 19:49:21', 'tes', ''),
(123, 111, NULL, 'kamak', '2018-02-14 06:58:02', 'tes', ''),
(124, 160, NULL, 'ryan', '2018-04-19 18:27:12', 'nice', ''),
(125, 168, NULL, 'ryan', '2018-05-19 13:09:41', 'bagus', ''),
(126, 168, NULL, 'ryan', '2018-05-19 13:09:46', 'bagus', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif`
--

CREATE TABLE `notif` (
  `id` int(11) NOT NULL,
  `status` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `notif`
--

INSERT INTO `notif` (`id`, `status`) VALUES
(1, 'belum'),
(2, 'sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `ID_REVIEW` int(11) NOT NULL,
  `ID_USER` varchar(20) DEFAULT NULL,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `NAMA_USER` text,
  `ISI_REVIEW` text,
  `TANGGAL_REVIEW` datetime DEFAULT NULL,
  `gambarreview` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`ID_REVIEW`, `ID_USER`, `ID_ADMIN`, `NAMA_USER`, `ISI_REVIEW`, `TANGGAL_REVIEW`, `gambarreview`) VALUES
(14, '', NULL, 'kamak', 'jalan sangat bagus dan halus', '2018-01-31 00:00:00', 'https://ristahandani75.000webhostapp.com/gambar/20180131084942am.jpg '),
(15, '', NULL, 'kamak', 'jalan sangat bagus dan halus', '2018-01-31 00:00:00', 'https://ristahandani75.000webhostapp.com/gambar/20180131084945am.jpg '),
(22, '', NULL, 'kamak', 'bbb', '2018-02-11 22:41:00', 'https://ristahandani75.000webhostapp.com/gambar/20180211104100pm.jpg '),
(23, '', NULL, 'kamak', '', '2018-02-11 22:45:05', 'https://ristahandani75.000webhostapp.com/gambar/20180211104505pm.jpg '),
(24, '', NULL, 'kamak', '', '2018-02-12 06:58:38', 'https://ristahandani75.000webhostapp.com/gambar/20180212065838am.jpg '),
(25, '', NULL, 'kamak', '', '2018-02-12 07:21:55', 'https://ristahandani75.000webhostapp.com/gambar/20180212072155am.jpg ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suka`
--

CREATE TABLE `suka` (
  `id` int(11) NOT NULL,
  `idberita` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `suka` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `suka`
--

INSERT INTO `suka` (`id`, `idberita`, `iduser`, `suka`) VALUES
(1, 12345, 0, 'sudah meny'),
(2, 12345, 0, 'sudah meny'),
(3, 12345, 0, 'sudah meny'),
(4, 146, 12345, 'sudah meny'),
(5, 146, 12345, 'sudah meny'),
(6, 146, 12345, 'sudah meny'),
(7, 146, 12345, 'sudah meny'),
(8, 146, 12345, 'sudah meny'),
(9, 146, 12345, 'sudah meny'),
(10, 146, 12345, 'sudah meny'),
(11, 146, 12345, 'sudah meny'),
(12, 138, 12345, 'sudah meny'),
(13, 147, 12345, 'sudah meny'),
(14, 150, 12345, 'sudah meny'),
(15, 147, 12345, 'sudah meny'),
(16, 150, 12345, 'sudah meny'),
(17, 138, 12345, 'sudah meny'),
(18, 152, 12345, 'sudah meny'),
(19, 111, 12345, 'sudah meny'),
(20, 168, 432, 'sudah meny'),
(21, 168, 368, 'sudah meny');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` varchar(20) NOT NULL,
  `USERNAME` varchar(30) DEFAULT NULL,
  `PASSWORD_USER` varchar(20) DEFAULT NULL,
  `NO_HP` varchar(14) DEFAULT NULL,
  `TGL_DAFTAR` date DEFAULT NULL,
  `ALAMAT_USER` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `USERNAME`, `PASSWORD_USER`, `NO_HP`, `TGL_DAFTAR`, `ALAMAT_USER`) VALUES
('', 'ndjdj', NULL, NULL, NULL, NULL),
('101', 'taufiqh', 'jalan', '08387', '2018-05-20', 'jalan angel'),
('121', '', '', '', '2018-05-19', ''),
('12345', 'kamak', 'kamak00@', '085707297720', '2017-11-03', 'jombang'),
('3517010407960003', 'ryan', 'ryan', '085707297725', '2018-01-15', 'sembung'),
('3517020404950001', 'Eko Budi Satrio', 'eko', '085785894968', '2018-02-01', 'Gudo Jombang'),
('3517091710950010', 'Aulia Akbar Habibie', 'akbar', '0857374390', '2018-02-01', 'Jombang'),
('3517112306960007', 'Eko Candra Dinata', 'machen123', '085655000632', '2018-02-01', 'Ngrumek Nglele Sumobito'),
('3517116911960002', 'dwi pratiwi', '3april2014', '083831724001', '2018-01-14', 'jombang'),
('3517191912950000', '', '', '', '2018-01-26', ''),
('3517191912950001', 'gani', 'ablagablu', '085336333113', '2018-01-14', 'kalianyar jogoroto jombang '),
('3517191912950007', '', '', '', '2018-01-26', ''),
('3517230834000001', 'haha', 'haha', '08543346949979', '2018-01-30', 'bdbdbb'),
('368', 'taufiqhidayah', 'jalan', '08767845', '2018-05-19', 'jalan'),
('432', 'rista', 'rista', '0857072988', '2018-05-19', 'magelang'),
('509', 'tita', 'tita', '0857072988', '2018-05-19', 'jombang'),
('746', 'wiwin', '123', '031', '2018-05-20', 'indonesia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indeks untuk tabel `gbr`
--
ALTER TABLE `gbr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jasaraharja`
--
ALTER TABLE `jasaraharja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`ID_KOMENTAR`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`ID_KOMENTAR`),
  ADD KEY `FK_MEMBERI` (`ID_USER`),
  ADD KEY `FK_TERDAPAT` (`ID_BERITA`);

--
-- Indeks untuk tabel `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID_REVIEW`),
  ADD KEY `FK_MEMILIK` (`ID_ADMIN`),
  ADD KEY `FK_MENULIS` (`ID_USER`);

--
-- Indeks untuk tabel `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gbr`
--
ALTER TABLE `gbr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT untuk tabel `jasaraharja`
--
ALTER TABLE `jasaraharja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komen`
--
ALTER TABLE `komen`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `ID_REVIEW` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `suka`
--
ALTER TABLE `suka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `FK_MEMBERI` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_MEMILIK` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_MENULIS` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
