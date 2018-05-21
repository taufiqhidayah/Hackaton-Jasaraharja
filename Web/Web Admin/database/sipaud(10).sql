-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 29 Apr 2018 pada 03.42
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `sipaud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `folder` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `folder`) VALUES
('01', 'admin', 'admin', 'Admin SIPAUD', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspek_kegiatan`
--

CREATE TABLE IF NOT EXISTS `aspek_kegiatan` (
  `id_aspek` int(20) NOT NULL AUTO_INCREMENT,
  `id_kegiatan` varchar(20) NOT NULL,
  `nama_aspek` varchar(300) NOT NULL,
  PRIMARY KEY (`id_aspek`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data untuk tabel `aspek_kegiatan`
--

INSERT INTO `aspek_kegiatan` (`id_aspek`, `id_kegiatan`, `nama_aspek`) VALUES
(33, '2918030143', 'menyebut macam-macam kitab suci'),
(29, '2918030143', 'menyebut agaman yang dianut'),
(28, '2918030143', 'menyebut nama-nama agama yang ada di Indonesia.'),
(23, '0417110448', 'Menggambar bebas dengan berbagai media (kapur tulis, pensil warna, krayon)'),
(24, '0417110448', 'Menggambar orang dengan lengkap dan proporsional'),
(25, '0417110448', 'Meniru melipat kertas sederhana'),
(26, '0417110448', 'Meronce dengan berbagai media (manik-manik, sedotan, kertas, daun, dll)'),
(27, '0417110448', 'Menganyam dengan berbagai media misal kain perca, daun, sedotan, kertas, dll'),
(32, '2918030143', 'menyebutkan tempat-tempat ibadah'),
(34, '2918030143', 'menyebut kitab suci yang dianut'),
(35, '2918030201', 'Menyebutkan simbol-simbol huruf vokal dan konsonan yang dikenal di lingkungan sekitar'),
(36, '2918030201', 'Menyebutkan nama-nama benda yang suara huruf awalnya sama'),
(37, '2918030201', 'Menyebutkan kata-kata yang mempunyai huruf awal yang sama, misal: bola, buku, baju, dll'),
(38, '2918030201', 'Menghubungkan gambar/benda dengan kata'),
(39, '2918030212', 'Dapat melaksanakan tugas kelompok'),
(40, '2918030212', 'Dapat berkerja sama dengan teman'),
(45, '2918030228', 'Berjalan mundur, berjalan 2-3 meter sambil membawa beban'),
(42, '2918030212', 'Mau berbagi dengan teman'),
(43, '2918030212', 'Saling membantu sesama teman'),
(44, '2918030212', 'Sabar menunggu giliran'),
(46, '2918030228', 'Meloncat dari ketinggian 30-50 cm'),
(47, '2918030228', 'Memanjat, bergantung dan berayun'),
(48, '2918030228', 'Berdiri dengan tumit diatas satu kaki dengan seimbang'),
(49, '2918030228', 'Berlari sambil melompat dengan berbagai variasi'),
(50, '2918030228', 'Bermain dengan simpai'),
(51, '2918030248', 'Menunjuk dan mencari sebanyak-banyaknya benda berdasarkan fungsi'),
(52, '2918030248', 'Mengelompokkan benda dengan berbagai cara menurut fungsinya misalnya : peralatn makan, peralatan mandi, peralatan kebersihan, dll'),
(53, '2918030248', 'Menyebutkan dan menceritaka perbedaan dua buah benda'),
(54, '2918030248', 'Membuat kegiatan yang akan dilakukan anak'),
(55, '2918030248', 'Mengungkapkan sebab akibat. Misalnya mengapa gigi sakit dll'),
(56, '2918030248', 'Mengajak teman untuk bermain'),
(57, '0418040416', 'Sepak Bola');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE IF NOT EXISTS `catatan` (
  `id_catatan` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `id_kelas` varchar(40) NOT NULL,
  `isi` text NOT NULL,
  `tgl` varchar(30) NOT NULL,
  `id_wali` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `nis`, `id_kelas`, `isi`, `tgl`, `id_wali`) VALUES
('180324122756', '31121109', '2318030503', 'Sakit Perut', '0000-00-00', '01121'),
('180330110748', '121009', '2817100435', 'minggu ini anak agak pendiam. mohon orang tua lebih memperhatikan', '03/29/2018', '2817100431'),
('180402014530', '31121109', '2318030503', 'sakitt gigi', '04/03/2018', '01121'),
('180402020313', '31121109', '2318030503', 'sakitt gigi', '04/03/2018', '01121'),
('180402020507', '1211132', '2817100439', 'Sakit Kepala', '04/04/2018', '01121');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_pertumbuhan`
--

CREATE TABLE IF NOT EXISTS `catatan_pertumbuhan` (
  `id_catatan` varchar(30) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `id_semester` varchar(30) NOT NULL,
  `id_kelas` varchar(40) NOT NULL,
  `tinggi` varchar(30) NOT NULL,
  `berat` varchar(30) NOT NULL,
  `gigi` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  PRIMARY KEY (`id_catatan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `catatan_pertumbuhan`
--

INSERT INTO `catatan_pertumbuhan` (`id_catatan`, `nis`, `id_semester`, `id_kelas`, `tinggi`, `berat`, `gigi`, `tanggal`) VALUES
('2318031134', '31121109', '1', '2318030503', '130', '25', 'Gigi susu Lengkap', '2018-01-08'),
('2418031258', '31121109', '1', '2318030503', '133', '36', 'Gigi susu Lengkap', '2018-01-10'),
('2918031224', '121134', '1', '0517110304', '100', '18', 'mulai tumbuh', '29 3 2018'),
('3018031124', '121009', '1', '2817100435', '90', '20', 'lengkap', '29/03/2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `tgl_feedback` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `status` enum('S','B') NOT NULL,
  PRIMARY KEY (`id_feedback`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nis`, `tgl_feedback`, `isi`, `status`) VALUES
('443344', '31121109', '12-10-2018', 'mantap jiwa juragan', 'S'),
('211211', '1211132', '11-09-2018', 'Jos Gandos', 'S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` varchar(20) NOT NULL,
  `id_semester` varchar(40) NOT NULL,
  `minggu` varchar(20) NOT NULL,
  `tgl1` varchar(20) NOT NULL,
  `tgl2` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_semester`, `minggu`, `tgl1`, `tgl2`) VALUES
('0417110435', '1', 'Minggu 1', '11/01/2017', '11/04/2017'),
('0417110402', '1', 'minggu 2', '11/05/2017', '11/09/2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_kegiatan` varchar(30) NOT NULL,
  `kegiatan` varchar(30) NOT NULL,
  `id_kelas` varchar(40) NOT NULL,
  `id_jadwal` varchar(40) NOT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `kegiatan`, `id_kelas`, `id_jadwal`) VALUES
('0118040119', 'Nilai Agama dan Moral', '2817100439', '0417110402'),
('0417110448', 'Seni', '2817100439', '0417110402'),
('0418040416', 'Permainan', '2817100439', '0417110435'),
('2918030143', 'Nilai Agama dan Moral', '2817100439', '0417110435'),
('2918030201', 'Bahasa', '2817100439', '0417110435'),
('2918030212', 'Sosial Emosional', '2817100439', '0417110435'),
('2918030228', 'Fisik Motorik', '2817100435', '0417110435'),
('2918030248', 'Kognitif', '2817100439', '0417110402');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepsek`
--

CREATE TABLE IF NOT EXISTS `kepsek` (
  `id_kepsek` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `folder` varchar(40) NOT NULL,
  PRIMARY KEY (`id_kepsek`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kepsek`
--

INSERT INTO `kepsek` (`id_kepsek`, `username`, `password`, `alamat`, `folder`) VALUES
('1', 'kepsek', 'kepsek', 'jombang', 'kepsek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(20) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) NOT NULL,
  `id_aspek` varchar(20) NOT NULL,
  `id_kelas` varchar(40) NOT NULL,
  `nilai` text NOT NULL,
  `id_jadwal` varchar(30) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `id_aspek`, `id_kelas`, `nilai`, `id_jadwal`) VALUES
(50, '31121109', '18', '2318030503', '4', '0417110435'),
(51, '31121109', '21', '2318030503', '1', '0417110435'),
(52, '31121109', '18', '2817100439', '3', '0417110435'),
(53, '31121109', '21', '2817100439', '2', '0417110435'),
(54, '31121109', '35', '2817100439', '3', '0417110435'),
(55, '31121109', '36', '2817100439', '3', '0417110435'),
(56, '31121109', '37', '2817100439', '3', '0417110435'),
(57, '31121109', '38', '2817100439', '3', '0417110435'),
(58, '31121109', '51', '2817100439', '4', '0417110402'),
(59, '31121109', '52', '2817100439', '3', '0417110402'),
(60, '31121109', '53', '2817100439', '3', '0417110402'),
(61, '31121109', '54', '2817100439', '4', '0417110402'),
(62, '31121109', '55', '2817100439', '4', '0417110402'),
(63, '31121109', '56', '2817100439', '4', '0417110402'),
(64, '1211132', '35', '2817100439', '4', '0417110435'),
(65, '1211132', '36', '2817100439', '4', '0417110435'),
(66, '1211132', '37', '2817100439', '4', '0417110435'),
(67, '1211132', '38', '2817100439', '4', '0417110435'),
(68, '121009', '45', '2817100435', '2', '0417110435'),
(69, '121009', '46', '2817100435', '3', '0417110435'),
(70, '121009', '47', '2817100435', '2', '0417110435'),
(71, '121009', '48', '2817100435', '3', '0417110435'),
(72, '121009', '49', '2817100435', '3', '0417110435'),
(73, '121009', '50', '2817100435', '3', '0417110435');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id_pengumuman` varchar(40) NOT NULL,
  `pengumuman` text NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `tgl_acara` varchar(50) NOT NULL,
  `tgl` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `pengumuman`, `perihal`, `kegiatan`, `tgl_acara`, `tgl`) VALUES
('180401011638', 'Jalan Sehat Mengelilingi Desa setempat', 'Penting', 'Jalan-jalan', '07-04-2018', '01-04-2018'),
('180422074729', 'Memperingati Hut Ke 73 RI', 'Penting', 'Pentas Seni', '12-05-2018', '22-04-2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg_siswa`
--

CREATE TABLE IF NOT EXISTS `reg_siswa` (
  `id_sub_kelas` varchar(30) NOT NULL,
  `id_kelas` varchar(40) NOT NULL,
  `nis` varchar(40) NOT NULL,
  `no_absen` varchar(10) NOT NULL,
  PRIMARY KEY (`id_sub_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `reg_siswa`
--

INSERT INTO `reg_siswa` (`id_sub_kelas`, `id_kelas`, `nis`, `no_absen`) VALUES
('1017121108', '2817100439', '31121109', '1'),
('2718040120', '2817100435', '1211111121', '4'),
('1017121150', '2817100439', '1211132', '2'),
('1017121102', '0517110304', '121134', '1'),
('1017120124', '2817100435', '121009', '2'),
('1017120112', '2817100435', '1210098', '3'),
('2318030506', '2318030503', '31121109', '1'),
('2218040649', '2817100435', '1211132', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg_wali_kelas`
--

CREATE TABLE IF NOT EXISTS `reg_wali_kelas` (
  `id_kelas` varchar(40) NOT NULL,
  `nama_kelas` varchar(40) NOT NULL,
  `id_wali` varchar(40) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `reg_wali_kelas`
--

INSERT INTO `reg_wali_kelas` (`id_kelas`, `nama_kelas`, `id_wali`) VALUES
('2817100439', 'B2 2017', '01121'),
('2817100435', 'B1 2017', '2817100431'),
('0517110304', 'A1 2017', '0517110342'),
('2318030503', 'A2 2017', '01121');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id_semester` varchar(20) NOT NULL,
  `TA` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  PRIMARY KEY (`id_semester`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `TA`, `semester`) VALUES
('1', '2017/2018', 'semester 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(40) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kel` enum('L','P') NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_ayah` varchar(60) NOT NULL,
  `nama_ibu` varchar(60) NOT NULL,
  `pekerjaan_ayah` varchar(40) NOT NULL,
  `pekerjaan_ibu` varchar(40) NOT NULL,
  `alamat_ayah` varchar(40) NOT NULL,
  `alamat_ibu` varchar(40) NOT NULL,
  `no_telp_ayah` varchar(40) NOT NULL,
  `no_telp_ibu` varchar(40) NOT NULL,
  `golda` varchar(40) NOT NULL,
  `anak_ke` varchar(40) NOT NULL,
  `agama` varchar(40) NOT NULL,
  `riwayat_kesehatan` text NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `jenis_kel`, `tgl_lahir`, `username`, `password`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ayah`, `alamat_ibu`, `no_telp_ayah`, `no_telp_ibu`, `golda`, `anak_ke`, `agama`, `riwayat_kesehatan`) VALUES
('31121109', 'Andriansyah', 'Desa Pedes', 'L', '10/04/2017', 'tes', 'tes', 'sonip', 'indah', '', '', '', '', '', '', '', '', '', ''),
('1211132', 'Rudi Pambudi', 'Kebun Janur', 'L', '02/06/1993', 'rudi', 'rudi', 'rutano', 'suwati', '', '', '', '', '', '', '', '', '', ''),
('121134', 'Ganes prabu', 'pojok kerep', 'L', '11/06/2013', 'ganes', 'ganes', 'subintono', 'suryani', '', '', '', '', '', '', '', '', '', ''),
('121009', 'Rani Mukherjee', 'Dlangu, Jombang', 'P', '09/12/2014', 'rani', 'rani', 'santo', 'santi', '', '', '', '', '', '', '', '', '', ''),
('1210098', 'Rani Asturi', 'Jumbengrejo', 'P', '12/11/2014', 'asturi', 'asturi', 'santrun', 'sanami', '', '', '', '', '', '', '', '', '', ''),
('12345678', 'Miftahur Rohmah', 'Sengon Jombang', 'P', '03/13/2003', 'miftah', 'miftah', 'Nurcholis', 'Hartatik', '', '', '', '', '', '', '', '', '', ''),
('1211111121', 'Juni Antara', 'Jombang', 'L', '04/01/2018', 'juni', 'juni', 'raiis', 'nisa', 'guru', 'guru', 'Lamongan', 'bojonegoro', '081211221', '081243112', 'o', '2', 'islam', 'Tidak ada');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_login`
--
CREATE TABLE IF NOT EXISTS `v_login` (
`username` varchar(100)
,`password` varchar(100)
,`folder` varchar(40)
,`level` varchar(10)
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `wali_kelas`
--

CREATE TABLE IF NOT EXISTS `wali_kelas` (
  `id_wali` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `jenis_kel` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `folder` varchar(32) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_wali`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `wali_kelas`
--

INSERT INTO `wali_kelas` (`id_wali`, `nama_lengkap`, `nama`, `tgl_lahir`, `jenis_kel`, `alamat`, `password`, `folder`, `foto`) VALUES
('01121', 'Farida Hasna', 'farida', '20-01-1987', 'P', 'Sendangrejo', 'farida', 'guru', '3517016611940003.jpg'),
('2817100431', 'Andriansyah salim', 'Andriansyah', '01/16/2013', 'L', 'Lampung', '123', 'guru', '3517133007840001.jpg'),
('0517110342', 'Anita sari', 'Anita', '11/07/1987', 'P', 'Dalngu kulon', 'anita', 'guru', '3517014403820001.jpg'),
('0118041259', 'Roni Abdidin', 'roni', '04/14/2018', 'L', 'Sanan Wetan', 'roni', 'guru', 'dd.jpg');

-- --------------------------------------------------------

--
-- Struktur untuk view `v_login`
--
DROP TABLE IF EXISTS `v_login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_login` AS select `kepsek`.`username` AS `username`,`kepsek`.`password` AS `password`,`kepsek`.`folder` AS `folder`,'kepsek' AS `level` from `kepsek` union select `wali_kelas`.`nama` AS `username`,`wali_kelas`.`password` AS `password`,`wali_kelas`.`folder` AS `folder`,'wali_kelas' AS `level` from `wali_kelas` union select `admin`.`username` AS `username`,`admin`.`password` AS `password`,`admin`.`folder` AS `folder`,'admin' AS `level` from `admin`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
