-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 07:53 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bismillah`
--

-- --------------------------------------------------------

--
-- Table structure for table `asrama`
--

CREATE TABLE `asrama` (
  `id_asrama` int(20) NOT NULL,
  `asrama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asrama`
--

INSERT INTO `asrama` (`id_asrama`, `asrama`) VALUES
(1, 'Ny Nur Sari'),
(2, 'Ny Maimunah'),
(3, 'Ny. Zubaidah'),
(4, 'Ny Saidah'),
(5, 'Ny Zainiyah'),
(6, 'Imarotul Tahksis'),
(7, 'Ny Mukorromah'),
(8, 'Madrasatul Qu''ran'),
(9, 'Nurul Qoni'''),
(10, 'Mahad Aly'),
(11, 'Al-khuzaimah');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(20) NOT NULL,
  `kamar` varchar(50) NOT NULL,
  `id_asrama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `kamar`, `id_asrama`) VALUES
(1, 'A. 01', '1'),
(2, 'A. 02', '1'),
(3, 'A. 03', '1'),
(4, 'A. 04', '1'),
(5, 'A. 05', '1'),
(6, 'A. 06', '1'),
(7, 'A. 07', '1'),
(8, 'A. 08', '1'),
(9, 'A. 09', '1'),
(10, 'A. 10', '1'),
(11, 'A. 11', '1'),
(12, 'A. 12', '1'),
(13, 'A. 13', '1'),
(14, 'A. 14', '1'),
(15, 'A. 15', '1'),
(16, 'A. 16', '1'),
(17, 'A. 17', '1'),
(18, 'A. 18', '1'),
(19, 'A. 19', '1'),
(20, 'B. 01', '2'),
(21, 'B. 02', '2'),
(22, 'B. 03', '2'),
(23, 'B. 04', '2'),
(24, 'B. 05', '2'),
(25, 'B. 06', '2'),
(26, 'B. 07', '2'),
(27, 'B. 08', '2'),
(28, 'B. 09', '2'),
(29, 'B. 10', '2'),
(30, 'C. 01', '3'),
(31, 'C. 02', '3'),
(32, 'C. 03', '3'),
(33, 'C. 04', '3'),
(34, 'C. 05', '3'),
(35, 'D. 01', '4'),
(36, 'D. 02', '4'),
(37, 'D. 03', '4'),
(38, 'D. 04', '4'),
(39, 'D. 05', '4'),
(40, 'D. 06', '4'),
(41, 'D. 07', '4'),
(42, 'D. 08', '4'),
(43, 'D. 09', '4'),
(44, 'D. 10', '4');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, '1 '),
(2, 'II A'),
(3, 'II B'),
(4, 'II C'),
(5, 'II D');

-- --------------------------------------------------------

--
-- Table structure for table `master_anggaran`
--

CREATE TABLE `master_anggaran` (
  `id_master_anggaran` int(11) NOT NULL,
  `jenis_anggaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_anggaran`
--

INSERT INTO `master_anggaran` (`id_master_anggaran`, `jenis_anggaran`) VALUES
(2, 'Barokah Tenaga Pengajar Amtsilati'),
(3, 'Barokah 2 Staff, 2 Guru Piket'),
(4, 'Transport dan BMM'),
(5, 'Adminitrasi'),
(6, 'Konsumsi'),
(7, 'Rekenning (listrik, air, telepon, internet)'),
(8, 'Pengadaan'),
(9, 'Pemeliharan'),
(10, 'Pembinaan'),
(11, 'Perhargaan Anggota Terbaik'),
(12, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `master_pengeluaran`
--

CREATE TABLE `master_pengeluaran` (
  `id_master_pengeluaran` int(11) NOT NULL,
  `jenis_pengeluaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_pengeluaran`
--

INSERT INTO `master_pengeluaran` (`id_master_pengeluaran`, `jenis_pengeluaran`) VALUES
(1, 'Barokah Tenaga Pengajar Amtsilati'),
(2, 'Barokah Ramadhan'),
(3, 'Transport dan BMM'),
(4, 'Adminitrasi'),
(5, 'Konsumsi'),
(6, 'Rekenning (listrik, air, telepon, internet)'),
(7, 'Pengadaan'),
(8, 'Pemeliharan'),
(9, 'Perpustakaan dan Laborat'),
(10, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(11) NOT NULL,
  `nm_santri` varchar(50) NOT NULL,
  `id_kamar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id_santri`, `nm_santri`, `id_kamar`) VALUES
(1, 'AINUN FITRIYAH', '14');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_santri` varchar(50) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_santri`, `id_user`, `id_kelas`) VALUES
(1, '1', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `trans_anggaran`
--

CREATE TABLE `trans_anggaran` (
  `id_anggaran` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_master_anggaran` varchar(20) NOT NULL,
  `nominal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_anggaran`
--

INSERT INTO `trans_anggaran` (`id_anggaran`, `id_user`, `id_master_anggaran`, `nominal`) VALUES
(1, '', '2', '6250000'),
(2, '', '3', '400000'),
(3, '', '4', '-'),
(4, '1', '5', '100000'),
(5, '1', '6', '695000'),
(6, '1', '7', '-'),
(7, '', '8', '250000'),
(8, '', '9', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `trans_aruskas`
--

CREATE TABLE `trans_aruskas` (
  `id_kas` int(20) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `waktu` date NOT NULL,
  `id_master_pengeluaran` text NOT NULL,
  `pemasukan` text NOT NULL,
  `debit` int(20) NOT NULL,
  `kredit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_aruskas`
--

INSERT INTO `trans_aruskas` (`id_kas`, `id_user`, `waktu`, `id_master_pengeluaran`, `pemasukan`, `debit`, `kredit`) VALUES
(1, '1', '2019-07-06', '', 'Saldo Awal', 30, 0),
(2, '', '2019-07-13', '1', '', 0, 6),
(3, '', '2019-07-06', '1', '', 0, 0),
(4, '2', '2019-07-05', '', 'Saldo Bulan Lalu', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trans_pemasukan`
--

CREATE TABLE `trans_pemasukan` (
  `id_pemasukan` int(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_siswa` varchar(50) NOT NULL,
  `pem_kitab` text NOT NULL,
  `pem_ujian` text NOT NULL,
  `pem_wisuda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_pemasukan`
--

INSERT INTO `trans_pemasukan` (`id_pemasukan`, `id_user`, `id_siswa`, `pem_kitab`, `pem_ujian`, `pem_wisuda`) VALUES
(9, '1', '', 'pem_kitab', '', ''),
(10, '2', '', '', 'pem_ujian', ''),
(11, '1', '', 'pem_kitab', '', ''),
(12, '1', '', '', 'pem_ujian', ''),
(13, '1', '', 'pem_kitab', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `trans_pengeluaran`
--

CREATE TABLE `trans_pengeluaran` (
  `id_pengeluaran` int(10) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_master_pengeluaran` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_pengeluaran`
--

INSERT INTO `trans_pengeluaran` (`id_pengeluaran`, `id_user`, `id_master_pengeluaran`, `nominal`, `waktu`) VALUES
(1, '', '1', '1575000', '2019-07-06'),
(2, '', '2', '6725000', '2019-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` enum('admin','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'staff', 'staff', 'staff'),
(2, 'admin', 'admin', 'admin'),
(3, 'ruzah', 'ruzah', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asrama`
--
ALTER TABLE `asrama`
  ADD PRIMARY KEY (`id_asrama`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `master_anggaran`
--
ALTER TABLE `master_anggaran`
  ADD PRIMARY KEY (`id_master_anggaran`);

--
-- Indexes for table `master_pengeluaran`
--
ALTER TABLE `master_pengeluaran`
  ADD PRIMARY KEY (`id_master_pengeluaran`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `trans_anggaran`
--
ALTER TABLE `trans_anggaran`
  ADD PRIMARY KEY (`id_anggaran`);

--
-- Indexes for table `trans_aruskas`
--
ALTER TABLE `trans_aruskas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indexes for table `trans_pemasukan`
--
ALTER TABLE `trans_pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `trans_pengeluaran`
--
ALTER TABLE `trans_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asrama`
--
ALTER TABLE `asrama`
  MODIFY `id_asrama` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `master_anggaran`
--
ALTER TABLE `master_anggaran`
  MODIFY `id_master_anggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `master_pengeluaran`
--
ALTER TABLE `master_pengeluaran`
  MODIFY `id_master_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trans_anggaran`
--
ALTER TABLE `trans_anggaran`
  MODIFY `id_anggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `trans_aruskas`
--
ALTER TABLE `trans_aruskas`
  MODIFY `id_kas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `trans_pemasukan`
--
ALTER TABLE `trans_pemasukan`
  MODIFY `id_pemasukan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `trans_pengeluaran`
--
ALTER TABLE `trans_pengeluaran`
  MODIFY `id_pengeluaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
