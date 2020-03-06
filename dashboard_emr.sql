/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : dashboard_emr

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 06/03/2020 17:19:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_chart
-- ----------------------------
DROP TABLE IF EXISTS `data_chart`;
CREATE TABLE `data_chart`  (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `no_emr` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `waktu_pengukuran` datetime(0) NULL DEFAULT NULL,
  `param_1` int(10) NULL DEFAULT NULL,
  `param_2` int(10) NULL DEFAULT NULL,
  `param_3` int(10) NULL DEFAULT NULL,
  `param_4` int(10) NULL DEFAULT NULL,
  `param_5` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_chart
-- ----------------------------
INSERT INTO `data_chart` VALUES (1, '1', '2020-03-04 15:40:01', 10, 30, 10, 30, 10);
INSERT INTO `data_chart` VALUES (2, '1', '2020-03-04 15:41:37', 30, 50, 30, 60, 70);
INSERT INTO `data_chart` VALUES (3, '1', '2020-03-04 15:42:30', 60, 70, 50, 10, 100);
INSERT INTO `data_chart` VALUES (4, '1', '2020-03-04 15:43:12', 30, 50, 90, 150, 30);

SET FOREIGN_KEY_CHECKS = 1;
