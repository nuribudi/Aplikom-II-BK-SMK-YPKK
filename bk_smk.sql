/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.6.14 : Database - bk_smk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `jenis_pelanggaran` */

DROP TABLE IF EXISTS `jenis_pelanggaran`;

CREATE TABLE `jenis_pelanggaran` (
  `id_jenis_pelanggaran` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_pelanggaran` enum('ringan','sedang','berat') NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_jenis_pelanggaran`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_pelanggaran` */

insert  into `jenis_pelanggaran`(`id_jenis_pelanggaran`,`nama_jenis_pelanggaran`,`status`) values (1,'ringan','aktif'),(2,'sedang','aktif'),(3,'berat','aktif');

/*Table structure for table `jurusan` */

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(32) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `jurusan` */

insert  into `jurusan`(`id_jurusan`,`nama_jurusan`,`status`) values (1,'RPL','aktif'),(2,'Akutansi','aktif'),(3,'Farmasi','aktif');

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` enum('X','XI','XII') NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `id_jurusan` (`id_jurusan`),
  CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12338 DEFAULT CHARSET=latin1;

/*Data for the table `kelas` */

insert  into `kelas`(`id_kelas`,`nama_kelas`,`id_jurusan`,`status`) values (12337,'X',1,'aktif');

/*Table structure for table `level_user` */

DROP TABLE IF EXISTS `level_user`;

CREATE TABLE `level_user` (
  `id_level_user` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_level_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `level_user` */

insert  into `level_user`(`id_level_user`,`jabatan`,`status`) values (1,'kepala sekolah','aktif');

/*Table structure for table `pelanggaran` */

DROP TABLE IF EXISTS `pelanggaran`;

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelanggaran` text NOT NULL,
  `point_pelanggaran` double NOT NULL,
  `id_jenis_pelanggaran` int(11) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_pelanggaran`),
  KEY `id_jenis_pelanggaran` (`id_jenis_pelanggaran`),
  CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`id_jenis_pelanggaran`) REFERENCES `jenis_pelanggaran` (`id_jenis_pelanggaran`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pelanggaran` */

insert  into `pelanggaran`(`id_pelanggaran`,`nama_pelanggaran`,`point_pelanggaran`,`id_jenis_pelanggaran`,`status`) values (1,'merokok',20,1,'aktif');

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(10) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlpn_siswa` varchar(15) NOT NULL,
  `tlpn_orang_tua` varchar(15) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_siswa`),
  UNIQUE KEY `nis` (`nis`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

insert  into `siswa`(`id_siswa`,`nis`,`nisn`,`nama`,`jenis_kelamin`,`alamat`,`tlpn_siswa`,`tlpn_orang_tua`,`id_kelas`,`status`) values (19,'12345','022222','nuri','L','jogja','08963291922','09826725252',12337,'aktif'),(21,'1234567','0111112','nuri','L','jogja','0897536378','0849485474',12337,'aktif'),(22,'34567','01111','agus','L','jogja','0948473744','09485825235',12337,'aktif'),(23,'0213823','2112124','nuri','L','jogja','08975363782','08494854742',12337,'aktif'),(24,'42355353','3636','ddfxf','P','35364747','5355347','3356378',12337,'aktif'),(27,'345673','0111112','ekowati','P','sleman','02477597452','04579259272',12337,'aktif'),(28,'12345672','01111122','nuri budi','P','jogja','08975363782','08494854742',12337,'tidak aktif');

/*Table structure for table `siswa_pelanggaran` */

DROP TABLE IF EXISTS `siswa_pelanggaran`;

CREATE TABLE `siswa_pelanggaran` (
  `id_siswa_pelanggaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nip` char(32) NOT NULL,
  `poin_total` char(3) NOT NULL,
  `tanggal_pelanggaran` date NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_pelanggaran` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  PRIMARY KEY (`id_siswa_pelanggaran`),
  KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  KEY `id_pelanggaran` (`id_pelanggaran`),
  KEY `nip` (`nip`),
  KEY `nis` (`id_siswa`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `siswa_pelanggaran_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON UPDATE CASCADE,
  CONSTRAINT `siswa_pelanggaran_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `user` (`nip`) ON UPDATE CASCADE,
  CONSTRAINT `siswa_pelanggaran_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON UPDATE CASCADE,
  CONSTRAINT `siswa_pelanggaran_ibfk_4` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON UPDATE CASCADE,
  CONSTRAINT `siswa_pelanggaran_ibfk_5` FOREIGN KEY (`id_pelanggaran`) REFERENCES `pelanggaran` (`id_pelanggaran`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `siswa_pelanggaran` */

/*Table structure for table `tahun_ajaran` */

DROP TABLE IF EXISTS `tahun_ajaran`;

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `nama_tahun_ajaran` varchar(32) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`id_tahun_ajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tahun_ajaran` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `nip` char(32) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  PRIMARY KEY (`nip`),
  KEY `id_level_user` (`id_level_user`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id_level_user`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`nip`,`id_level_user`,`nama`,`user_name`,`password`,`status`) values ('123456',1,'nuri','noury','827ccb0eea8a706c4c34a16891f84e7b','aktif');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
