/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.1.37-MariaDB : Database - pigura
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pigura` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pigura`;

/*Table structure for table `data_agen` */

DROP TABLE IF EXISTS `data_agen`;

CREATE TABLE `data_agen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `agen` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `data_agen` */

insert  into `data_agen`(`id`,`agen`,`created_at`,`updated_at`) values 
(1,'Sunarto',NULL,'2020-11-04 23:43:36'),
(2,'Alex',NULL,'2020-11-04 23:43:23'),
(5,'Rudi','2020-11-04 23:42:58','2020-11-04 23:43:12');

/*Table structure for table `data_barang` */

DROP TABLE IF EXISTS `data_barang`;

CREATE TABLE `data_barang` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(10) DEFAULT NULL,
  `tipe_id` int(10) NOT NULL,
  `ukuran_id` int(10) NOT NULL,
  `warna_id` int(10) NOT NULL,
  `agen_id` int(10) DEFAULT NULL,
  `harga_modal` int(100) DEFAULT NULL,
  `harga_jual` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipe` (`tipe_id`),
  KEY `id_ukuran` (`ukuran_id`),
  KEY `id_warna` (`warna_id`),
  KEY `id_agen` (`agen_id`),
  CONSTRAINT `data_barang_ibfk_1` FOREIGN KEY (`warna_id`) REFERENCES `data_warna` (`id`),
  CONSTRAINT `data_barang_ibfk_2` FOREIGN KEY (`ukuran_id`) REFERENCES `data_ukuran` (`id`),
  CONSTRAINT `data_barang_ibfk_3` FOREIGN KEY (`agen_id`) REFERENCES `data_agen` (`id`),
  CONSTRAINT `data_barang_ibfk_4` FOREIGN KEY (`tipe_id`) REFERENCES `data_tipe` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `data_barang` */

insert  into `data_barang`(`id`,`kode_barang`,`tipe_id`,`ukuran_id`,`warna_id`,`agen_id`,`harga_modal`,`harga_jual`) values 
(4,'10RM25HT',2,2,1,1,25000,30000),
(5,'20RRMCK',1,3,3,2,50000,100000);

/*Table structure for table `data_pemesanan` */

DROP TABLE IF EXISTS `data_pemesanan`;

CREATE TABLE `data_pemesanan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pemesan` varchar(50) DEFAULT NULL,
  `telepon_pemesan` varchar(50) DEFAULT NULL,
  `status_pemesanan` varchar(20) DEFAULT NULL,
  `barang_id` int(15) DEFAULT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `data_pemesanan` */

insert  into `data_pemesanan`(`id`,`nama_pemesan`,`telepon_pemesan`,`status_pemesanan`,`barang_id`,`kode_barang`) values 
(1,'Sugeng Agung Waluyo','085736685801','Proses',4,'10RM25HT'),
(2,'Sugeng Agung Waluyo','085736907267','Selesai',4,'10RM25HT'),
(3,'Fernanda Eka Novitasari','081620461937','Proses',4,'10RM25HT'),
(4,'yeni','77685659','Proses',4,'10RM25HT'),
(5,'asa','ASSA','Proses',4,'10RM25HT'),
(13,'r','r','Proses',NULL,'10RM25HT'),
(14,'sqw','SDW','Proses',NULL,'20RRMCK');

/*Table structure for table `data_tipe` */

DROP TABLE IF EXISTS `data_tipe`;

CREATE TABLE `data_tipe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tipe` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `data_tipe` */

insert  into `data_tipe`(`id`,`tipe`,`created_at`,`updated_at`) values 
(1,'RM',NULL,NULL),
(2,'M25 B',NULL,NULL),
(3,'305 G',NULL,'2020-11-05 01:18:42');

/*Table structure for table `data_transaksi` */

DROP TABLE IF EXISTS `data_transaksi`;

CREATE TABLE `data_transaksi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal_penjualan` date DEFAULT NULL,
  `waktu_penjualan` time DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `total_pembayaran` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kasir` (`user_id`),
  CONSTRAINT `data_transaksi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `data_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `data_transaksi` */

insert  into `data_transaksi`(`id`,`tanggal_penjualan`,`waktu_penjualan`,`user_id`,`total_pembayaran`) values 
(1,'2020-09-07','09:00:00',1,90000),
(2,'2020-09-09','10:00:00',1,100000);

/*Table structure for table `data_ukuran` */

DROP TABLE IF EXISTS `data_ukuran`;

CREATE TABLE `data_ukuran` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukuran` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `data_ukuran` */

insert  into `data_ukuran`(`id`,`ukuran`,`created_at`,`updated_at`) values 
(1,'4R',NULL,NULL),
(2,'10R',NULL,NULL),
(3,'20R',NULL,NULL),
(4,'10RS',NULL,NULL);

/*Table structure for table `data_user` */

DROP TABLE IF EXISTS `data_user`;

CREATE TABLE `data_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` enum('kasir','admin') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `data_user` */

insert  into `data_user`(`id`,`nama`,`email`,`password`,`level`,`created_at`,`updated_at`) values 
(1,'Ratna Dwi','ratna@gmail.com','ratna','kasir','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(4,'Yeni Rahayu','yeni@yeni','123','kasir','2020-11-05 01:17:05','2020-11-05 01:17:05'),
(5,'Yonathan','yonathan@yona','123','admin','2020-11-05 01:17:43','2020-11-05 01:17:43');

/*Table structure for table `data_warna` */

DROP TABLE IF EXISTS `data_warna`;

CREATE TABLE `data_warna` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `warna` varchar(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `data_warna` */

insert  into `data_warna`(`id`,`warna`,`updated_at`,`created_at`) values 
(1,'Hitam',NULL,NULL),
(3,'Coklat','2020-11-04 16:00:54',NULL),
(4,'Merah',NULL,NULL),
(5,'Gold','2020-11-04 22:20:28','2020-11-04 22:20:28'),
(6,'Silver','2020-11-04 22:20:37','2020-11-04 22:20:37');

/*Table structure for table `detail_transaksi` */

DROP TABLE IF EXISTS `detail_transaksi`;

CREATE TABLE `detail_transaksi` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `transaksi_id` int(10) DEFAULT NULL,
  `pemesanan_id` int(10) DEFAULT NULL,
  `barang_id` varchar(15) DEFAULT NULL,
  `jumlah_pembelian` int(10) DEFAULT NULL,
  `total_harga` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_barang` (`barang_id`),
  KEY `id_transaksi` (`transaksi_id`),
  KEY `id_pemesanan` (`pemesanan_id`),
  CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `data_transaksi` (`id`),
  CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`pemesanan_id`) REFERENCES `data_pemesanan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `detail_transaksi` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
