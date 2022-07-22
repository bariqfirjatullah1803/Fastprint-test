/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : fastprint_db

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 22/07/2022 20:31:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `id_produk` int NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 75 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES (6, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', '12500', 'L QUEENLY', 'bisa dijual');
INSERT INTO `produk` VALUES (9, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', '1000', 'L MTH AKSESORIS (IM)', 'bisa dijual');
INSERT INTO `produk` VALUES (11, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', '1000', 'L MTH AKSESORIS (IM)', 'bisa dijual');
INSERT INTO `produk` VALUES (12, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', '12500', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (15, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', '12500', 'L MTH AKSESORIS (IM)', 'bisa dijual');
INSERT INTO `produk` VALUES (17, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', '1000', 'L MTH AKSESORIS (IM)', 'bisa dijual');
INSERT INTO `produk` VALUES (18, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', '13000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (19, 'ALUMUNIUM FOIL PET SHEET 250mm IM', '1000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (22, 'ARM PENDEK MODEL U', '13000', 'L MTH AKSESORIS (IM)', 'bisa dijual');
INSERT INTO `produk` VALUES (23, 'ARM SUPPORT KECIL', '13000', 'L MTH TABUNG (LK)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (24, 'ARM SUPPORT KOTAK PUTIH', '13000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (26, 'ARM SUPPORT PENDEK POLOS', '13000', 'L MTH TABUNG (LK)', 'bisa dijual');
INSERT INTO `produk` VALUES (27, 'ARM SUPPORT S IM', '1000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (28, 'ARM SUPPORT T (IMPORT)', '13000', 'L MTH AKSESORIS (IM)', 'bisa dijual');
INSERT INTO `produk` VALUES (29, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', '10000', 'L MTH TABUNG (LK)', 'bisa dijual');
INSERT INTO `produk` VALUES (50, 'BLACK LASER TONER FP-T3 (100gr)', '13000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (56, 'BODY PRINTER CANON IP2770', '500', 'SP MTH SPAREPART (LK)', 'bisa dijual');
INSERT INTO `produk` VALUES (58, 'BODY PRINTER T13X', '15000', 'SP MTH SPAREPART (LK)', 'bisa dijual');
INSERT INTO `produk` VALUES (59, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', '10000', 'CI MTH TINTA LAIN (IM)', 'bisa dijual');
INSERT INTO `produk` VALUES (60, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', '10000', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (61, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', '1500', 'CI MTH TINTA LAIN (IM)', 'bisa dijual');
INSERT INTO `produk` VALUES (62, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', '1500', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (63, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', '1500', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (64, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', '1000', 'CI MTH TINTA LAIN (IM)', 'bisa dijual');
INSERT INTO `produk` VALUES (65, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', '1500', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (66, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', '1500', 'CI MTH TINTA LAIN (IM)', 'bisa dijual');
INSERT INTO `produk` VALUES (67, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', '1000', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (68, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', '1500', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual');
INSERT INTO `produk` VALUES (70, 'BOTOL KOTAK 100ML LK', '1000', 'L MTH AKSESORIS (LK)', 'bisa dijual');

SET FOREIGN_KEY_CHECKS = 1;
