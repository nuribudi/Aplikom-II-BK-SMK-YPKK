-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 05:31 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bk_smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelanggaran`
--

CREATE TABLE IF NOT EXISTS `jenis_pelanggaran` (
  `id_jenis_pelanggaran` int(11) NOT NULL,
  `nama_jenis_pelanggaran` enum('ringan','sedang','berat') NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_jenis_pelanggaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pelanggaran`
--

INSERT INTO `jenis_pelanggaran` (`id_jenis_pelanggaran`, `nama_jenis_pelanggaran`, `status`) VALUES
(0, 'ringan', '');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(32) NOT NULL,
  `jurusan` varchar(32) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `nis` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE IF NOT EXISTS `level_user` (
  `id_level_user` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_level_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE IF NOT EXISTS `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `nama_pelanggaran` text NOT NULL,
  `point_pelanggaran` double NOT NULL,
  `id_jenis_pelanggaran` int(11) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_pelanggaran`),
  KEY `id_jenis_pelanggaran` (`id_jenis_pelanggaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(10) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlpn_siswa` varchar(15) NOT NULL,
  `tlpn_orang_tua` varchar(15) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `nama`, `jenis_kelamin`, `alamat`, `tlpn_siswa`, `tlpn_orang_tua`, `status`) VALUES
('', '', '', 'L', '', '', '', 'aktif'),
('12345', '022222', 'eko hary aaa', 'P', 'sleman', '094579354754', '0984757223235', 'aktif'),
('1234567', '', '', 'P', '', '', '', 'aktif'),
('133333', '', '', 'L', '', '', '', 'aktif'),
('1354768799', '243546', 'cxxccxxcxcx', 'L', 'sssssss', '09877656000', '09485825235235', 'aktif'),
('567', '', '', '', '', '', '', ''),
('aaaa', '', '', '', '', '', '', ''),
('nis', 'nisn', 'nama', '', 'alamat', 'tlpn_siswa', 'tlpn_orang_tua', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_pelanggaran`
--

CREATE TABLE IF NOT EXISTS `siswa_pelanggaran` (
  `id_siswa_pelanggaran` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nip` char(32) NOT NULL,
  `poin_pelanggaran` double NOT NULL,
  `tanggal_pelanggaran` date NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_pelanggaran` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  PRIMARY KEY (`id_siswa_pelanggaran`),
  KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  KEY `id_pelanggaran` (`id_pelanggaran`),
  KEY `nip` (`nip`),
  KEY `nis` (`nis`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `nama_tahun_ajaran` varchar(32) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_tahun_ajaran`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nip` char(32) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`nip`),
  KEY `id_level_user` (`id_level_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE;

--
-- Constraints for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`id_jenis_pelanggaran`) REFERENCES `jenis_pelanggaran` (`id_jenis_pelanggaran`) ON UPDATE CASCADE;

--
-- Constraints for table `siswa_pelanggaran`
--
ALTER TABLE `siswa_pelanggaran`
  ADD CONSTRAINT `siswa_pelanggaran_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_pelanggaran_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `user` (`nip`) ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_pelanggaran_ibfk_3` FOREIGN KEY (`id_pelanggaran`) REFERENCES `pelanggaran` (`id_pelanggaran`) ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_pelanggaran_ibfk_4` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_pelanggaran_ibfk_5` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON UPDATE CASCADE;

--
-- Constraints for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD CONSTRAINT `tahun_ajaran_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id_level_user`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
