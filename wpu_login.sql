-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2022 pada 04.25
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pemesan`
--

CREATE TABLE `data_pemesan` (
  `kode_pemesan` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `totalbyr` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_pemesan`
--

INSERT INTO `data_pemesan` (`kode_pemesan`, `nama`, `email`, `no_hp`, `alamat`, `tanggal`, `jumlah`, `harga`, `totalbyr`, `status`) VALUES
('PMS0000001', 'Lee Haechan', 'haechan@gmail.com', '085123456789', 'Jakarta', '2022-04-23', 2, 15000, 30000, 0),
('PMS0000002', 'Yeji', 'yeji@gmail.com', '089865743567', 'Semarang', '2022-04-25', 4, 15000, 60000, 0),
('PMS0000003', 'Winter', 'winter@gmail.com', '08777777777', 'Los Angeless', '2022-04-30', 10, 15000, 150000, 0),
('PMS0000004', 'Winter', 'winter@gmail.com', '08777777777', 'Los Angeless', '2022-04-30', 10, 15000, 150000, 0),
('PMS0000005', 'Lee Haechan', 'haechan@gmail.com', '081392619954', 'Semarang', '2022-04-27', 2, 15000, 30000, 0),
('PMS0000006', 'Mark', 'mark@gmail.com', '081392619954', 'Semarang', '2022-04-24', 2, 15000, 30000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tiket`
--

CREATE TABLE `data_tiket` (
  `id` int(11) NOT NULL,
  `kode_pemesan` varchar(20) NOT NULL,
  `kode_tiket` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `qrcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `nama_kuliner` varchar(128) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `nama_kuliner`, `gambar`, `keterangan`) VALUES
(1, 'Sate', 'sate3.jpg', '<p style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\">SATE</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'comic sans ms\', sans-serif;\"><strong>Sate</strong>&nbsp;atau&nbsp;<strong>satai</strong>&nbsp;adalah makanan yang terbuat dari&nbsp;<a title=\"Daging\" href=\"https://id.wikipedia.org/wiki/Daging\">daging</a>&nbsp;yang dipotong kecil-kecil dan ditusuk sedemikian rupa dengan tusukan lidi tulang daun kelapa atau&nbsp;<a title=\"Bambu\" href=\"https://id.wikipedia.org/wiki/Bambu\">bambu</a>, kemudian dipanggang menggunakan bara&nbsp;<a title=\"Arang\" href=\"https://id.wikipedia.org/wiki/Arang\">arang</a>&nbsp;kayu. Sate disajikan dengan berbagai macam bumbu yang bergantung pada variasi resep sate. </span></p>'),
(2, 'Lele Bakar', 'lele.jpg', '<p style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\">LELE BAKAR</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><span style=\"font-family: \'comic sans ms\', sans-serif; font-size: 12pt;\">Menu lele bakar merupakan makanan favorit pengunjung omac </span></span></p>'),
(3, 'Kakap Bakar', 'kakap.jpg', '<p style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\">KAKAP BAKAR</span></p>\r\n<p>Menu kakapbakarmerupakanmakananfavoritpengunjungomac</p>'),
(4, 'asasd', 'kakap1.jpg', '<p>asdadsasd</p>'),
(1646802328, 'Lele Bakar', 'sate4.jpg', '<p>sasd</p>'),
(1646802366, 'dfaf', 'mendoan.jpg', '<p>rere</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `kd_pengunjung` varchar(15) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `harga` int(40) DEFAULT NULL,
  `qr_code` varchar(50) DEFAULT NULL,
  `status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`kd_pengunjung`, `tanggal`, `harga`, `qr_code`, `status`) VALUES
('OMC0000001', '2022-03-18', 15000, 'OMC0000001.png', 0),
('OMC0000002', '2022-03-18', 15000, 'OMC0000002.png', 0),
('OMC0000003', '2022-03-19', 15000, 'OMC0000003.png', 0),
('OMC0000004', '2022-03-18', 15000, 'OMC0000004.png', 0),
('OMC0000005', '2022-03-18', 15000, 'OMC0000005.png', 1),
('OMC0000006', '2022-03-24', 15000, 'OMC0000006.png', 1),
('OMC0000007', '2022-04-30', 15000, 'OMC0000007.png', 0),
('OMC0000008', '2022-04-30', 15000, 'OMC0000008.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `no_pembayaran` varchar(255) NOT NULL,
  `no_tiket` varchar(100) NOT NULL,
  `jumlah` int(255) DEFAULT NULL,
  `total_pembayaran` varchar(255) DEFAULT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `qr_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `no_pembayaran`, `no_tiket`, `jumlah`, `total_pembayaran`, `bukti`, `status`, `qr_code`) VALUES
(1, 'AC2461', '', 0, NULL, NULL, 0, NULL),
(2, 'AC2462', '', 0, '75000', NULL, 0, NULL),
(3, 'AC2463', '', 0, '30000', NULL, 0, NULL),
(4, 'AC2464', '', 0, '135000', NULL, 0, NULL),
(5, 'AC2465', '', 0, '135000', NULL, 0, NULL),
(6, 'AC2466', '', 0, '0', NULL, 0, NULL),
(7, 'AC2467', '', 0, '75000', NULL, 0, NULL),
(8, 'AC2468', '', 0, '30000', NULL, 0, NULL),
(9, 'AC2469', '', 0, '45000', NULL, 0, NULL),
(10, 'AC24610', '', 0, '15000', NULL, 0, NULL),
(11, 'AC24611', '', 0, '60000', NULL, 0, NULL),
(12, 'AC24612', '', 0, '15000', NULL, 0, NULL),
(13, 'AC24613', '', 0, '90000', NULL, 0, NULL),
(14, 'AC24614', '', 0, '15000', NULL, 0, NULL),
(15, 'AC24615', '', 0, '75000', NULL, 0, NULL),
(16, 'AC24616', '', 0, '30000', NULL, 0, NULL),
(17, 'AC24617', '', 0, '60000', NULL, 0, NULL),
(18, 'AC24618', '', 0, '60000', NULL, 0, NULL),
(19, 'AC24619', '', 0, '60000', NULL, 0, NULL),
(20, 'AC24620', 'OMC0020', 0, '150000', 'SPU.png', 2, NULL),
(21, 'AC24621', 'OMC0021', 0, '150000', 'IMG-20201226-WA0062.jpg', 2, NULL),
(22, 'AC24622', 'OMC0022', 0, '30000', NULL, 0, NULL),
(23, 'AC24623', 'OMC0023', 0, '150000', 'SPU1.png', 2, NULL),
(24, 'AC24624', 'OMC0024', NULL, '150000', NULL, 0, NULL),
(25, 'AC24625', 'OMC0025', 8, '120000', 'de7b2380ee8020360a27f7602460e184.jpg', 1, NULL),
(26, 'AC24626', 'OMC0026', 5, '75000', 'SPU2.png', 2, NULL),
(27, 'AC24627', 'OMC0027', 1, '15000', NULL, 0, NULL),
(28, 'AC24628', 'OMC0028', 4, '60000', NULL, 0, NULL),
(29, 'AC24629', 'OMC0029', 1, '15000', NULL, 0, NULL),
(30, 'AC24630', 'OMC0030', 5, '75000', 'SPU3.png', 2, 'OMC0030.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesan`
--

CREATE TABLE `pemesan` (
  `id` int(11) NOT NULL,
  `nomor_tiket` varchar(255) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `qr_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesan`
--

INSERT INTO `pemesan` (`id`, `nomor_tiket`, `nama_pemesan`, `email`, `no_telepon`, `alamat`, `tanggal`, `qr_code`) VALUES
(7, 'OMC001', 'Bismillah', 'bismillah@gmail.com', '081234567898', 'kayangan', '2022-04-30', NULL),
(8, 'OMC002', 'makii', 'mark@gmail.com', '081234567898', 'canada', '2022-04-26', NULL),
(9, 'OMC003', 'Karina', 'karinacantik@gmail.com', '081234567898', 'Semarang', '2022-05-01', NULL),
(10, 'OMC004', 'giselle', 'giselle@gmail.com', '081234567898', 'japan', '2022-04-30', NULL),
(11, 'OMC005', 'felix', 'giselle@gmail.com', '081234567898', 'japan', '2022-04-26', NULL),
(12, 'OMC006', 'Doi', 'mark@gmail.com', '081234567898', 'Semarang', '2022-04-30', NULL),
(13, 'OMC007', 'Dio', 'mark@gmail.com', '081234567898', 'Semarang', '2022-04-30', NULL),
(14, 'OMC008', 'gugugaga', 'felfelix@gmail.com', '081234567898', 'Semarang', '2022-04-30', NULL),
(15, 'OMC009', 'winter', 'winter@gmail.com', '081234567898', 'Semarang', '2022-04-30', NULL),
(16, 'OMC0010', 'ningning', 'niki@gmail.com', '081234567898', 'Semarang', '2022-04-30', NULL),
(17, 'OMC0011', 'giselle', 'giselle@gmail.com', '081234567898', 'Semarang', '2022-04-30', NULL),
(18, 'OMC0012', 'Tiffany', 'molmolly@gmail.com', '081234567898', 'Semarang', '2022-04-26', NULL),
(19, 'OMC0013', 'lay', 'molmolly@gmail.com', '081234567898', 'Sanghai', '2022-04-26', NULL),
(20, 'OMC0014', 'Karina', 'molmolly@gmail.com', '081234567898', 'Semarang', '2022-04-26', NULL),
(21, 'OMC0015', 'Niki', 'niki@gmail.com', '081234567898', 'indoo', '2022-04-30', NULL),
(22, 'OMC0016', 'agnesmo', 'molmolly@gmail.com', '081234567898', 'Semarang', '2022-04-26', NULL),
(23, 'OMC0017', 'Bismillah', 'bismillah@gmail.com', '081234567898', 'Sanghai', '2022-04-30', NULL),
(24, 'OMC0018', 'Karina', 'karinacantik@gmail.com', '081234567898', 'Semarang', '2022-04-30', NULL),
(25, 'OMC0019', 'asdfgh', 'karinacantik@gmail.com', '0987235', 'seoul', '2022-04-26', NULL),
(26, 'OMC0020', 'somi', 'somiii@gmail.com', '081234567898', 'Sanghai', '2022-04-30', NULL),
(27, 'OMC0021', 'Karina', 'karinacantik@gmail.com', '081234567898', 'Bandung', '2022-04-30', NULL),
(28, 'OMC0022', 'taaa', 'mark@gmail.com', '081234567898', 'Semarang', '2022-04-30', NULL),
(29, 'OMC0023', 'Al', 'al@gmail.com', '081234567898', 'Ungaran', '2022-04-29', NULL),
(30, 'OMC0024', 'felix', 'felfelix@gmail.com', '081234567898', 'Seoul', '2022-05-01', NULL),
(31, 'OMC0025', 'hyunjin', 'molmolly@gmail.com', '081234567898', 'Seoul', '2022-05-01', NULL),
(32, 'OMC0026', 'Nathan', 'nathan@gmail.com', '081234567898', 'Boyolali', '2022-05-10', NULL),
(33, 'OMC0027', 'Karina', 'karinacantik@gmail.com', '081234567898', 'Semarang', '2022-05-13', NULL),
(34, 'OMC0028', 'tesqr', 'molmolly@gmail.com', '081234567898', 'Semarang', '2022-05-05', 'OMC0028.png'),
(35, 'OMC0029', 'makii', 'mark@gmail.com', '081234567898', 'Boyolali', '2022-05-14', 'OMC0029.png'),
(36, 'OMC0030', 'mei', 'mei@gmail.com', '081234567898', 'gatau', '2022-05-05', 'OMC0030.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_pemesan`
--

CREATE TABLE `tiket_pemesan` (
  `id` int(11) NOT NULL,
  `nomor_tiket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Aulia Lina', 'admin.omac@gmail.com', 'default.jpg', '$2y$10$hWSF9MFvxLSLyE9cf3HBWOFg1yufLswJO6f5qqERaVqIAP4/.PbFm', 1, 1, 1645595065),
(7, 'Yusuf Pratama', 'kasir.omac@gmail.com', 'default.jpg', '$2y$10$ie7Cscn1UECYbVR2trnlQePuw35KOhfEwbsPByAGbu.vXDBla4fX.', 2, 1, 1645595525),
(8, 'Adi Wijaya', 'petugas.omac@gmail.com', 'default.jpg', '$2y$10$vFQsY/PdMYHTgwRrKpa2JOFnPd0weA0CaMMOmw4GEtRouno9/mXR6', 3, 1, 1645600415),
(9, 'Maulana Ilham', 'ilham.ciplen1@gmail.com', 'default.jpg', '$2y$10$T7ut3xFWMMIYg0PNFl3si.dgOanKcrLZAH1xT42g6/bhNBzENR2F2', 2, 1, 1646142203);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wahana`
--

CREATE TABLE `wahana` (
  `id_wahana` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wahana`
--

INSERT INTO `wahana` (`id_wahana`, `nama`, `gambar`, `keterangan`) VALUES
(16, 'Kolam Renang Anak', '22424537_1694165507294210_7300324291823762252_o1.jpg', '<p style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 12pt;\">Kolam Renang Anak</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: \'comic sans ms\', sans-serif; font-size: 8pt;\">Paling&nbsp;<strong>kecil</strong>&nbsp;bisa 80 x 120 cm, sementara&nbsp;<strong>ukuran</strong>&nbsp;sedang sekitar 1,5 x 2 meter. Untuk&nbsp;<strong>kolam anak</strong>, yang lebih penting adalah kedalamannya. Idealnya kedalamannya hanya 60-80 cm, bisa lebih dangkal lagi jika untuk&nbsp;<strong>bayi</strong>, misalnya 30 cm. </span></p>'),
(19, 'Kolam Renang Dewasa', 'kolamdewasa2.jpg', '<p style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif;\">Kolam Renang Dewasa</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'comic sans ms\', sans-serif;\">Paling&nbsp;kecil&nbsp;bisa 80 x 120 cm, sementara&nbsp;ukuran&nbsp;sedang sekitar 1,5 x 2 meter. Untuk&nbsp;kolam anak, yang lebih penting adalah kedalamannya. Idealnya kedalamannya hanya 60-80 cm, bisa lebih dangkal lagi jika untuk&nbsp;bayi, misalnya 30 cm </span></p>'),
(20, 'Flying Fox', 'flying-fox2.jpg', '<p style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif;\">Flying Fox</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: \'comic sans ms\', sans-serif;\">Flying fox&nbsp;adalah istilah yang digunakan dalam Bahasa Inggris Australia dan Selandia Baru yang menggambarkan aktivitas gravitasi menggunakan zip line (terdiri dari katrol yang digantungkan ke wire atau kabel baja) </span></p>'),
(21, 'Terapi Ikan', 'terapiikan2.jpg', '<p style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif;\">Terapi Ikan</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: \'comic sans ms\', sans-serif;\">Terapi ikan sedang hits dan menjadi tren saat ini karena dipercaya bisa memberikan banyak manfaat bagi kesehatan tubuh. Manfaat terapi ikan dipercaya bisa menyembuhkan beberapa jenis penyakit dan keluhan kesehatan lainnya. Seperti namanya maka terapi tersebut menggunakan ikan sebagai media. </span></p>'),
(22, 'Mandi Bola', 'mandibola1.jpg', '<p style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif;\">Mandi Bela</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: \'comic sans ms\', sans-serif;\">Mandi bola&nbsp;adalah&nbsp;<a title=\"Permainan\" href=\"https://id.wikipedia.org/wiki/Permainan\">permainan</a>&nbsp;anak-anak yang berupa&nbsp;<a title=\"Kolam\" href=\"https://id.wikipedia.org/wiki/Kolam\">kolam</a>&nbsp;yang diisi bola-bola yang terbuat dari&nbsp;<a title=\"Plastik\" href=\"https://id.wikipedia.org/wiki/Plastik\">plastik</a>. Anak-anak dapat bermain di antara bola-bola tersebut seolah-olah&nbsp;<a title=\"Berenang\" href=\"https://id.wikipedia.org/wiki/Berenang\">berenang</a>&nbsp;atau&nbsp;<a title=\"Mandi\" href=\"https://id.wikipedia.org/wiki/Mandi\">mandi</a>&nbsp;bersama bola. </span></p>'),
(27, 'Snorkeling & Diving', 'LINE_ALBUM_Pecah_Telor_220330.jpg', '<p>lalaalalal</p>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pemesan`
--
ALTER TABLE `data_pemesan`
  ADD PRIMARY KEY (`kode_pemesan`);

--
-- Indeks untuk tabel `data_tiket`
--
ALTER TABLE `data_tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`kd_pengunjung`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tiket_pemesan`
--
ALTER TABLE `tiket_pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wahana`
--
ALTER TABLE `wahana`
  ADD PRIMARY KEY (`id_wahana`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_tiket`
--
ALTER TABLE `data_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1646802367;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tiket_pemesan`
--
ALTER TABLE `tiket_pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `wahana`
--
ALTER TABLE `wahana`
  MODIFY `id_wahana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
