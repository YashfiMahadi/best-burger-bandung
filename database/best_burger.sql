/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : best_burger

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 14/01/2025 10:28:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'burger', 'burger enak', '2024-07-13 14:41:27', '2024-07-13 14:41:27');
INSERT INTO `categories` VALUES (2, 'pizza', 'pizza dari best burger', '2024-07-14 15:18:41', '2024-07-14 15:18:41');
INSERT INTO `categories` VALUES (3, 'pasta', 'Delicious Pasta', '2024-07-14 15:19:34', '2024-07-14 15:19:34');
INSERT INTO `categories` VALUES (4, 'fries', 'Fries dari best burger', '2024-07-14 15:20:12', '2024-07-15 06:05:06');
INSERT INTO `categories` VALUES (5, 'minuman', 'dengan aneka minuman', '2024-07-14 15:38:21', '2024-07-14 15:38:21');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for keranjangs
-- ----------------------------
DROP TABLE IF EXISTS `keranjangs`;
CREATE TABLE `keranjangs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` bigint NOT NULL,
  `id_makanan` bigint NOT NULL,
  `total_jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal_harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_makanan`(`id_makanan` ASC) USING BTREE,
  INDEX `id_user`(`id_user` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of keranjangs
-- ----------------------------
INSERT INTO `keranjangs` VALUES (11, 2, 10, '1', '25000', '2024-12-04 14:33:55', '2024-12-18 14:04:26');
INSERT INTO `keranjangs` VALUES (12, 2, 9, '1', '41000', '2024-12-04 14:34:06', '2024-12-18 14:04:49');
INSERT INTO `keranjangs` VALUES (13, 3, 8, '1', '45000', '2024-12-04 14:34:17', '2024-12-04 14:34:17');

-- ----------------------------
-- Table structure for makanan_pembayarans
-- ----------------------------
DROP TABLE IF EXISTS `makanan_pembayarans`;
CREATE TABLE `makanan_pembayarans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_transaksi` bigint NOT NULL,
  `id_makanan` bigint NOT NULL,
  `total_jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal_harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_transaksi`(`id_transaksi` ASC, `id_makanan` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of makanan_pembayarans
-- ----------------------------
INSERT INTO `makanan_pembayarans` VALUES (4, 5, 9, '4', '164000', '2024-07-16 13:33:47', '2024-07-16 13:33:47');
INSERT INTO `makanan_pembayarans` VALUES (5, 5, 10, '2', '50000', '2024-07-16 13:33:47', '2024-07-16 13:33:47');
INSERT INTO `makanan_pembayarans` VALUES (6, 6, 9, '3', '123000', '2024-07-16 16:16:14', '2024-07-16 16:16:14');
INSERT INTO `makanan_pembayarans` VALUES (7, 6, 10, '1', '25000', '2024-07-16 16:16:14', '2024-07-16 16:16:14');
INSERT INTO `makanan_pembayarans` VALUES (8, 7, 10, '1', '25000', '2024-07-17 15:08:58', '2024-07-17 15:08:58');
INSERT INTO `makanan_pembayarans` VALUES (9, 7, 9, '2', '82000', '2024-07-17 15:08:58', '2024-07-17 15:08:58');
INSERT INTO `makanan_pembayarans` VALUES (10, 8, 8, '1', '45000', '2024-11-29 09:05:32', '2024-11-29 09:05:32');
INSERT INTO `makanan_pembayarans` VALUES (11, 8, 9, '1', '41000', '2024-11-29 09:05:32', '2024-11-29 09:05:32');
INSERT INTO `makanan_pembayarans` VALUES (12, 8, 10, '2', '50000', '2024-11-29 09:05:32', '2024-11-29 09:05:32');

-- ----------------------------
-- Table structure for makanans
-- ----------------------------
DROP TABLE IF EXISTS `makanans`;
CREATE TABLE `makanans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` bigint NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_kategori`(`id_kategori` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of makanans
-- ----------------------------
INSERT INTO `makanans` VALUES (6, 'Double Cheeseburger', '1720970057.png', '51000', 1, 'Selain burger dengan patty daging sapi, Burger King juga memiliki burger yang terbuat dari bahan dasar daging ayam. Lebih tepatnya, burger ini menggunakan isian ayam boneless yang digoreng dengan tepung.\r\n\r\nIsiannya yang melimpah dipadukan dengan saus mayonaisenya yang sangat lezat membuat menu yang satu ini tidak boleh kamu lewatkan.', '2024-07-13 17:02:21', '2024-07-16 05:37:09');
INSERT INTO `makanans` VALUES (8, 'BBQ Bacon Burger', '1720920628.jpg', '45000', 1, 'Menu ini terbuat dari patty daging sapi yang empuk dan juicy yang dilengkapi dengan keju dan beef rasher yang renyah dan menggugah selera.\r\n\r\nSelain Menu A la Carte, kamu juga bisa mencoba menu paketnya yang sudah termasuk minuman soda dan kentang goreng yang memiliki porsi yang cukup besar.', '2024-07-14 01:30:28', '2024-07-16 05:36:55');
INSERT INTO `makanans` VALUES (9, 'Classic Beef Burger', '1720920892.png', '41000', 1, 'burger yang terbuat dari bahan dasar daging ayam. Lebih tepatnya, burger ini menggunakan isian ayam boneless yang digoreng dengan tepung.\r\n\r\nIsiannya yang melimpah dipadukan dengan saus mayonaisenya yang sangat lezat membuat menu yang satu ini tidak boleh kamu lewatkan.', '2024-07-14 01:34:52', '2024-07-16 05:36:10');
INSERT INTO `makanans` VALUES (10, 'kentang raos', '1720970629.png', '25000', 4, 'kentang segar yang dipotong kecil-kecil dan digoreng dalam rendaman minyak', '2024-07-14 15:23:49', '2024-07-15 06:40:19');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2024_07_09_080208_create_categories_table', 1);
INSERT INTO `migrations` VALUES (6, '2024_07_13_045728_create_makanans_table', 1);
INSERT INTO `migrations` VALUES (7, '2024_07_15_154123_create_keranjangs_table', 2);
INSERT INTO `migrations` VALUES (8, '2024_07_15_195210_create_transaksis_table', 3);
INSERT INTO `migrations` VALUES (9, '2024_07_16_022007_create_makanan_pembayarans_table', 4);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for transaksis
-- ----------------------------
DROP TABLE IF EXISTS `transaksis`;
CREATE TABLE `transaksis`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` bigint NOT NULL,
  `jumlah_total` bigint NOT NULL,
  `grand_total` bigint NOT NULL,
  `metode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_user`(`id_user` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaksis
-- ----------------------------
INSERT INTO `transaksis` VALUES (5, 2, 6, 214000, 'Bayar Di Tempat', 'Dalam Proses', '2024-07-16 13:33:47', '2024-07-16 15:18:39');
INSERT INTO `transaksis` VALUES (6, 3, 4, 148000, 'Bayar Di Tempat', 'Dalam Proses', '2024-07-16 16:16:14', '2024-07-16 16:17:36');
INSERT INTO `transaksis` VALUES (7, 3, 3, 107000, 'Bayar Di Tempat', 'pending', '2024-07-17 15:08:58', '2024-07-17 15:08:58');
INSERT INTO `transaksis` VALUES (8, 3, 4, 136000, 'Bayar Di Tempat', 'pending', '2024-11-29 09:05:32', '2024-11-29 09:05:32');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'administrator', 'admin', '085871067385', 'admin@gmail.com', NULL, '$2y$10$rhtNPdu5KiQSGjZtiDIRz.Wmv8Q0oyjE2JieT5lfSepP7X8krmYXW', 'Bandung', 'admin', NULL, '2024-07-13 14:41:25', '2024-07-13 14:41:25');
INSERT INTO `users` VALUES (2, 'User', 'user', '085871067385', 'user@gmail.com', NULL, '$2y$10$NMNHXU677UsfuO/1OnYkguzDaTgZyruj2WktsVrmyA9aj2pW1zlC2', 'Bandung', 'user', NULL, '2024-07-13 14:41:26', '2024-07-16 15:29:24');
INSERT INTO `users` VALUES (3, 'Yashfi mahadi', 'yashfimahadi', '085871067385', 'yashfiarshi@gmail.com', NULL, '$2y$10$hViSpyvnYMorn/OwyfSN2uA1RZlDu/U0vA.dd7NsQ1aGxnrO4Xrxq', NULL, 'user', NULL, '2024-07-16 13:58:53', '2024-07-16 15:29:01');

SET FOREIGN_KEY_CHECKS = 1;
