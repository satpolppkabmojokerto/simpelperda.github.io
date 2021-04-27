-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 07:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pangkat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `jenis`) VALUES
(6, 'TEMPAT USAHA'),
(7, 'PMKS / ANJAL / PSK'),
(8, 'REKLAME'),
(9, 'TIBUMTRANMAS'),
(10, 'LAIN-LAIN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengadu`
--

CREATE TABLE `tb_pengadu` (
  `id_pengadu` varchar(50) NOT NULL,
  `nama_pengadu` varchar(30) NOT NULL,
  `username` varchar(256) NOT NULL,
  `jekel` varchar(256) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengadu`
--

INSERT INTO `tb_pengadu` (`id_pengadu`, `nama_pengadu`, `username`, `jekel`, `no_hp`, `alamat`) VALUES
('059549eb-1d4e-4ead-a941-024cbf8015e2', 'Daniar', '', 'PR', '087789987654', 'Rt 1 Rw 3'),
('33fdb65d-93a8-485f-8aed-b976e1db5395', 'Joni Tralala', '', 'LK', '085878526048', 'Rt 1 Rw2'),
('e124f234-a669-11eb-bb98-e0db55ae270a', 'MEYKE', 'IJO', 'PR', '9898', 'OJIOO');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jenis` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(300) NOT NULL,
  `waktu_aduan` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'Proses',
  `tanggapan` text DEFAULT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` varchar(50) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Petugas','Pengadu') NOT NULL DEFAULT 'Pengadu',
  `jk` varchar(100) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `tempat` varchar(256) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(256) NOT NULL,
  `grup` enum('A','B') NOT NULL DEFAULT 'B',
  `telepon` int(20) NOT NULL,
  `NIK` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`, `jk`, `alamat`, `tempat`, `tgl`, `foto`, `grup`, `telepon`, `NIK`) VALUES
('059549eb-1d4e-4ead-a941-024cbf8015e2', 'Daniar', 'dani', '123', 'Pengadu', '', '', '', '2021-04-26 00:34:39', '', 'B', 0, 0),
('22064324-a5eb-11eb-9b4a-e0db55ae270a', 'KASATPOL PP', 'KASAT', '1', 'Administrator', '', '', '', '2021-04-26 00:34:39', '', 'A', 0, 0),
('33fdb65d-93a8-485f-8aed-b976e1db5395', 'Joni Tralala', 'joni', '123', 'Pengadu', '', '', '', '2021-04-26 00:34:39', '', 'B', 0, 0),
('4fee0a60-a5f1-11eb-9b4a-e0db55ae270a', 'DSD', 'ERETT', '1', 'Petugas', '', '', '', '2021-04-26 01:09:01', '', 'A', 0, 0),
('5351949a-6598-11eb-96e0-60eb69a13690', 'Jumanto', 'tugas', '1', 'Petugas', '', '', '', '2021-04-26 00:34:39', '', 'A', 0, 0),
('766b07b7-658e-11eb-96e0-60eb69a13690', 'Zainal Arifin', 'admin', '1', 'Administrator', '', '', '', '2021-04-26 00:34:39', '', 'A', 0, 0),
('e0e0c825-a669-11eb-bb98-e0db55ae270a', 'MEYKE', 'IJO', '1111', 'Pengadu', 'lk', 'OJIOO', 'MOJOKERTO', '2009-05-06 00:00:00', 'WhatsApp Image 2021-03-19 at 1.40.52 PM.jpeg', 'B', 9898, 223214);

-- --------------------------------------------------------

--
-- Table structure for table `tb_telegram`
--

CREATE TABLE `tb_telegram` (
  `id_telegram` varchar(5) NOT NULL,
  `user` varchar(20) NOT NULL,
  `id_chat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_telegram`
--

INSERT INTO `tb_telegram` (`id_telegram`, `user`, `id_chat`) VALUES
('tL9', 'Akun Telegram Admin', '1399255546');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_pengadu`
--
ALTER TABLE `tb_pengadu`
  ADD PRIMARY KEY (`id_pengadu`);

--
-- Indexes for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `jenis` (`jenis`),
  ADD KEY `author` (`author`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_telegram`
--
ALTER TABLE `tb_telegram`
  ADD PRIMARY KEY (`id_telegram`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD CONSTRAINT `tb_pengaduan_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `tb_jenis` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengaduan_ibfk_2` FOREIGN KEY (`author`) REFERENCES `tb_pengadu` (`id_pengadu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
