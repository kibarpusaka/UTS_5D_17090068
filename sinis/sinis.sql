-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 03:17 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE IF NOT EXISTS `data_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama_admin` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(4, 'Admin1', '123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE IF NOT EXISTS `data_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` char(9) NOT NULL,
  `nama_guru` varchar(15) NOT NULL,
  `gelar` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `nip`, `nama_guru`, `gelar`, `jenis_kelamin`, `alamat`) VALUES
(2, '100100100', 'Ahmad', 'S.Pd.', 'Laki-laki', 'Semarang'),
(3, '200200200', 'Hasan', 'M.Pd.', 'Laki-laki', 'Slawi');

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE IF NOT EXISTS `data_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(5) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_kelas`
--

INSERT INTO `data_kelas` (`id_kelas`, `nama_kelas`, `id_guru`) VALUES
(6, 'VII B', 2),
(7, 'VII A', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_mapel`
--

CREATE TABLE IF NOT EXISTS `data_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_mapel`
--

INSERT INTO `data_mapel` (`id_mapel`, `nama_mapel`, `id_guru`, `id_kelas`) VALUES
(2, 'Bahasa Indonesia', 2, 6),
(3, 'Matematika', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE IF NOT EXISTS `data_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai_tugas` varchar(3) NOT NULL,
  `nilai_uts` varchar(3) NOT NULL,
  `nilai_uas` varchar(3) NOT NULL,
  `nilai_akhir` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nis`, `nama_siswa`, `jenis_kelamin`, `alamat`, `id_kelas`) VALUES
(2, '111000111', 'Udin', 'Laki-laki', 'Semarang', 6),
(3, '222000222', 'Dedi', 'Laki-laki', 'Tegal', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `fk_kg` (`id_guru`);

--
-- Indexes for table `data_mapel`
--
ALTER TABLE `data_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `fk_mg` (`id_guru`),
  ADD KEY `fk_mk` (`id_kelas`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD KEY `fk_nm` (`id_mapel`),
  ADD KEY `fk_ns` (`id_siswa`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_mapel`
--
ALTER TABLE `data_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_nilai`
--
ALTER TABLE `data_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD CONSTRAINT `fk_kg` FOREIGN KEY (`id_guru`) REFERENCES `data_guru` (`id_guru`);

--
-- Constraints for table `data_mapel`
--
ALTER TABLE `data_mapel`
  ADD CONSTRAINT `fk_mg` FOREIGN KEY (`id_guru`) REFERENCES `data_guru` (`id_guru`),
  ADD CONSTRAINT `fk_mk` FOREIGN KEY (`id_kelas`) REFERENCES `data_kelas` (`id_kelas`);

--
-- Constraints for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD CONSTRAINT `fk_nk` FOREIGN KEY (`id_kelas`) REFERENCES `data_kelas` (`id_kelas`),
  ADD CONSTRAINT `fk_nm` FOREIGN KEY (`id_mapel`) REFERENCES `data_mapel` (`id_mapel`),
  ADD CONSTRAINT `fk_ns` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`);

--
-- Constraints for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD CONSTRAINT `fk_sk` FOREIGN KEY (`id_kelas`) REFERENCES `data_kelas` (`id_kelas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
