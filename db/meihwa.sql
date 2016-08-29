-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Agu 2016 pada 11.59
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meihwa`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `lh`
--
CREATE TABLE IF NOT EXISTS `lh` (
`id_pemesanan` varchar(20)
,`id_customer` varchar(20)
,`type_identitas` varchar(15)
,`nama_customer` varchar(20)
,`tanggal_pemesanan` date
,`from_date` date
,`until_date` date
,`total_harga` int(11)
,`status_pembayaran` text
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar`
--

CREATE TABLE IF NOT EXISTS `tb_kamar` (
`id_kamar` int(11) NOT NULL,
  `type_kamar` varchar(20) NOT NULL,
  `harga_kamar` int(11) NOT NULL,
  `jumlah_kamar_keseluruhan` int(11) NOT NULL,
  `jumlah_kamar_tersedia` int(11) NOT NULL,
  `fasilitas_kamar` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `type_kamar`, `harga_kamar`, `jumlah_kamar_keseluruhan`, `jumlah_kamar_tersedia`, `fasilitas_kamar`) VALUES
(1, 'A', 1500000, 22, 114, 'TV LCD 43 inch, 2 Kasur Besar, AC, Kulkas 2 Pintu, Wifi, Makan Pagi, Makan Siang, Makan Malam, Pelayanan Kamar'),
(2, 'B', 1000000, 33, 32, 'TV LCD 32 inch, 1 Kasur Besar, AC, Kulkas 1 pintu, Wifi, Makan Pagi, Pelayanan Kamar'),
(3, 'C', 700000, 55, 55, 'TV LCD 22 inch, 1 Kasur Normal, AC, Wifi, Pelayanan Kamar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
`id_pegawai` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama`, `alamat`, `no_telp`, `username`, `password`) VALUES
(1, 'Lola', 'JL. Jalan Mulu No.0 ', 2147483647, 'lola', 'topa'),
(2, 'Topa', 'JL. Jalan Terus No.0', 2147483647, 'topa', 'lola');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `id_transaksi` varchar(20) NOT NULL,
  `token_pembayaran` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `deadline_pembayaran` datetime NOT NULL,
  `status_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_transaksi`, `token_pembayaran`, `harga`, `total_harga`, `deadline_pembayaran`, `status_pembayaran`) VALUES
('0LMSZMGL4Q', 'PJKI72X3', 1500000, 878, '2016-08-09 01:13:33', 'belum lunas'),
('20EUUY1027', 'KK8LHBGI', 1500000, 4500321, '2015-12-19 12:35:49', 'lunas'),
('9XPYRQYZJI', 'AE8J9C2O', 1500000, 1500525, '2016-08-25 01:40:45', 'lunas'),
('C7Y3RCJJ1C', 'RG4CITO3', 1500000, 996, '2016-01-16 07:55:08', 'belum lunas'),
('H1U646C7UX', 'KGTXABG9', 1000000, 1000545, '2015-12-26 08:06:35', 'lunas'),
('IQMSAZEPOU', '00GNMGSA', 1500000, 1500372, '2015-12-20 07:00:12', 'belum lunas'),
('IXEDLU5ZI1', 'QOT3N1N9', 1500000, 1500474, '2016-01-01 08:53:57', 'lunas'),
('LHMERXJ61T', 'M0XV98JC', 1500000, 150000073, '2015-12-19 12:17:49', 'lunas'),
('M38VS1328V', '2LH2KOYB', 1500000, 3000560, '2015-12-20 06:31:02', 'lunas'),
('TYX4T0UZHK', '742RR387', 700000, 700970, '2015-12-19 08:27:04', 'lunas'),
('V4M0P7LH6C', '84I2G9P8', 1500000, 3000858, '2016-01-16 07:57:26', 'lunas'),
('XH1A3F4NNO', 'H70BEORX', 1500000, 1500335, '2015-12-20 05:24:45', 'lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE IF NOT EXISTS `tb_pemesanan` (
  `id_pemesanan` varchar(20) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `type_identitas` varchar(15) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `email_customer` varchar(50) NOT NULL,
  `tipe_kamar` varchar(20) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `from_date` date DEFAULT NULL,
  `until_date` date DEFAULT NULL,
  `status_pengunjung` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `id_transaksi`, `id_customer`, `type_identitas`, `nama_customer`, `email_customer`, `tipe_kamar`, `jumlah_kamar`, `tanggal_pemesanan`, `from_date`, `until_date`, `status_pengunjung`) VALUES
('29LJGNE033', 'LHMERXJ61T', '951007270179', 'SIM', 'Imaduddin', 'om@gmail.com', 'A', 100, '2015-12-18', '2015-12-20', '2015-12-26', 'Cek Out'),
('5AZST753NL', 'C7Y3RCJJ1C', '2817287187', 'PASSPORT', 'Customer', 'cust@gmail.com', 'A', 0, '2016-01-16', '0000-00-00', '0000-00-00', 'booked'),
('7LOUYVHJ2D', '0LMSZMGL4Q', '', 'NULL', '', '', 'A', 0, '2016-08-08', '0000-00-00', '0000-00-00', 'booked'),
('8FH3HXF7IJ', 'M38VS1328V', '12345678', 'KTP', 'Customer', 'cust@gmail.com', 'A', 2, '2015-12-20', '2015-12-30', '2015-12-31', 'booked'),
('DJMQUXOEYH', 'H1U646C7UX', '12345678', 'KTP', 'Customer', 'cust@gmail.com', 'B', 1, '2015-12-25', '2015-12-31', '2016-01-01', 'booked'),
('G9I8UV60YV', 'IQMSAZEPOU', '3204326010950002', 'KTP', 'Ratu', 'hakimratuadilah@gmail.com', 'A', 1, '2015-12-19', '2015-12-30', '2015-12-31', 'booked'),
('LUC709M7NP', '9XPYRQYZJI', '112', 'KTP', 'lvajdsvbadslj', 'lvksfdbsdlj@falj.com', 'A', 1, '2016-08-24', '2016-01-01', '2016-01-02', 'booked'),
('N3O1CHITZE', '20EUUY1027', '3204326010950002', 'KTP', 'Ratu', 'hakimratuadilah@gmail.com', 'A', 3, '2015-12-18', '2015-12-20', '2015-12-26', 'Cek In'),
('S4SJB4C8HP', 'XH1A3F4NNO', '951007270179', 'SIM', 'Imaduddin', 'om@gmail.com', 'A', 1, '2015-12-19', '2015-12-20', '2015-12-21', 'Cek Out'),
('U30OLIU4NO', 'V4M0P7LH6C', '2817287187', 'PASSPORT', 'Customer', 'cust@gmail.com', 'A', 2, '2016-01-16', '2016-02-29', '2016-03-02', 'booked'),
('VLHJM0SBTE', 'TYX4T0UZHK', '3204326010950002', 'KTP', 'Ratu', 'hakimratuadilah@gmail.com', 'C', 1, '2015-12-19', '2015-12-25', '2015-12-26', 'Cek Out'),
('X5XAX77ZSX', 'IXEDLU5ZI1', '2817287187', 'KTP', 'Imaduddin', 'cust@gmail.com', 'A', 1, '2016-01-01', '2016-01-03', '2016-01-04', 'booked');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `hak_akses`) VALUES
('papoy', 'kucing', 'manager'),
('ratu', 'ratu', 'resepsionis'),
('resepsionis', 'resepsionis', 'resepsionis');

-- --------------------------------------------------------

--
-- Struktur untuk view `lh`
--
DROP TABLE IF EXISTS `lh`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lh` AS select `m`.`id_pemesanan` AS `id_pemesanan`,`m`.`id_customer` AS `id_customer`,`m`.`type_identitas` AS `type_identitas`,`m`.`nama_customer` AS `nama_customer`,`m`.`tanggal_pemesanan` AS `tanggal_pemesanan`,`m`.`from_date` AS `from_date`,`m`.`until_date` AS `until_date`,`b`.`total_harga` AS `total_harga`,`b`.`status_pembayaran` AS `status_pembayaran` from (`tb_pemesanan` `m` join `tb_pembayaran` `b`) where ((`b`.`id_transaksi` = `m`.`id_transaksi`) and (`b`.`status_pembayaran` = 'lunas'));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
 ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
 ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
 ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
 ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
