/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50733
Source Host           : localhost:3306
Source Database       : rainusa

Target Server Type    : MYSQL
Target Server Version : 50733
File Encoding         : 65001

Date: 2022-07-23 18:55:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `buku`
-- ----------------------------
DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pengarang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jumhal` int(11) NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of buku
-- ----------------------------
INSERT INTO `buku` VALUES ('1', 'Murni Laravel', 'Athailah, S.Kom., M.Kom.', 'TI', '100', 'laravel.JPG');
INSERT INTO `buku` VALUES ('2', 'Murni Python', 'Athailah, S.Kom., M.Kom.', 'TI', '250', 'cover.jpg');
INSERT INTO `buku` VALUES ('3', 'Ubuntu Server', 'Athailah, S.Kom., M.Kom.', 'TI', '250', 'cover.jpg');

-- ----------------------------
-- Table structure for `sypnosis`
-- ----------------------------
DROP TABLE IF EXISTS `sypnosis`;
CREATE TABLE `sypnosis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sypnosis1` text COLLATE utf8_unicode_ci NOT NULL,
  `sypnosis2` text COLLATE utf8_unicode_ci,
  `id_buku` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__buku` (`id_buku`),
  CONSTRAINT `FK__buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sypnosis
-- ----------------------------
INSERT INTO `sypnosis` VALUES ('1', 'Murni Laravel adalah buku yang mengupas secara gamblang tentang penggunakan Framework Laravel.\r\nBuku ini terdiri dari 100 halaman yang disertai gambar-gambar yang jelas sehingga gampang untuk diikuti.\r\nBuku ini dikarang oleh Bapak Athailah, S.Kom., M.Kom. pada tahun 2019 yang lalu.', null, '1');
INSERT INTO `sypnosis` VALUES ('2', 'Buku bla..bla..bla...', null, '2');
INSERT INTO `sypnosis` VALUES ('3', 'Buku bla..bla..bla...', null, '3');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rule` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin');
INSERT INTO `users` VALUES ('2', 'staff', '5d43e3169f06cf2a04a0ee870b5ac2aff3c558ff', 'staff');
INSERT INTO `users` VALUES ('3', 'kasir', '8cfab3d2724448440ea03b9cfa0194cb962a7723', 'kasir');
