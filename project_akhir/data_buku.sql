-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for rainusa
CREATE DATABASE IF NOT EXISTS `rainusa` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `rainusa`;

-- Dumping structure for table rainusa.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pengarang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jumhal` int(11) NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table rainusa.buku: ~5 rows (approximately)
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` (`id`, `judul`, `pengarang`, `jenis`, `jumhal`, `cover`) VALUES
	(1, 'Murni Laravel', 'Athailah, S.Kom., M.Kom.', 'TI', 100, ''),
	(2, 'Murni Python', 'Athailah, S.Kom., M.Kom.', 'TI', 250, ''),
	(3, 'Ubuntu Server', 'Athailah, S.Kom., M.Kom.', 'TI', 250, ''),
	(4, 'Manajemen Mutu Pendidikan', 'DR. John Friadi, S.Kom., MSi.', 'Manajemen', 500, NULL),
	(5, 'Akuntansi Sederhana Kedai Rumpit', 'Lauren Eka Wijaya, SE.', 'Keuangan', 233, NULL);
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;

-- Dumping structure for table rainusa.sypnosis
CREATE TABLE IF NOT EXISTS `sypnosis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sypnosis1` text COLLATE utf8_unicode_ci NOT NULL,
  `sypnosis2` text COLLATE utf8_unicode_ci,
  `id_buku` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__buku` (`id_buku`),
  CONSTRAINT `FK__buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table rainusa.sypnosis: ~5 rows (approximately)
/*!40000 ALTER TABLE `sypnosis` DISABLE KEYS */;
INSERT INTO `sypnosis` (`id`, `sypnosis1`, `sypnosis2`, `id_buku`) VALUES
	(1, 'Murni Laravel adalah buku yang mengupas secara gamblang tentang penggunakan Framework Laravel.\r\nBuku ini terdiri dari 100 halaman yang disertai gambar-gambar yang jelas sehingga gampang untuk diikuti.\r\nBuku ini dikarang oleh Bapak Athailah, S.Kom., M.Kom. pada tahun 2019 yang lalu.', NULL, 1),
	(2, 'Buku bla..bla..bla...', NULL, 2),
	(3, 'Buku bla..bla..bla...', NULL, 3),
	(4, 'Buku bla..bla..bla...', NULL, 4),
	(5, 'Buku bla..bla..bla...', NULL, 5);
/*!40000 ALTER TABLE `sypnosis` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
