# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: db_donasi_online
# Generation Time: 2018-07-23 15:42:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table app_bank
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_bank`;

CREATE TABLE `app_bank` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pemilik_bank` varchar(50) DEFAULT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rekening` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table app_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_category`;

CREATE TABLE `app_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table app_event
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_event`;

CREATE TABLE `app_event` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `event_name` varchar(225) DEFAULT NULL,
  `description` text,
  `image` varchar(100) DEFAULT NULL,
  `target_dana` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `app_event` WRITE;
/*!40000 ALTER TABLE `app_event` DISABLE KEYS */;

INSERT INTO `app_event` (`id`, `event_name`, `description`, `image`, `target_dana`, `start_date`, `end_date`)
VALUES
	(1,'buker pay 2018',NULL,NULL,170000000,'2018-02-01','2018-06-25');

/*!40000 ALTER TABLE `app_event` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table app_trx_donatur
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_trx_donatur`;

CREATE TABLE `app_trx_donatur` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `donasi` int(11) NOT NULL,
  `unix_id` int(11) NOT NULL COMMENT 'tambahan 3 angka kode',
  `konfirmasi` tinyint(1) DEFAULT '0' COMMENT '0 = belum konfirmasi,1 = sudah konfirmasi',
  `bukti_donasi` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `app_donatur_app_event_FK` FOREIGN KEY (`id`) REFERENCES `app_event` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='id_event berelasi ke table app_event,\nid_users berelasi ke table app_users';



# Dump of table app_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_users`;

CREATE TABLE `app_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `app_users_app_users_role_FK` FOREIGN KEY (`id`) REFERENCES `app_users_role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `app_users` WRITE;
/*!40000 ALTER TABLE `app_users` DISABLE KEYS */;

INSERT INTO `app_users` (`id`, `fullname`, `username`, `password`, `email`, `user_role`)
VALUES
	(1,'nuridincs','ncs','202cb962ac59075b964b07152d234b70','ncs@pay.com',1),
	(2,'admin','ncs','202cb962ac59075b964b07152d234b70','admin@pay.com',3);

/*!40000 ALTER TABLE `app_users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table app_users_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_users_role`;

CREATE TABLE `app_users_role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `categori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `app_users_role` WRITE;
/*!40000 ALTER TABLE `app_users_role` DISABLE KEYS */;

INSERT INTO `app_users_role` (`id`, `categori`)
VALUES
	(1,'superadmin'),
	(2,'donatur'),
	(3,'admin');

/*!40000 ALTER TABLE `app_users_role` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
